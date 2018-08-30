<?php

namespace Core;

/**
 * Class View
 * @package Core
 */
class View
{
    /**
     * Render a view file
     *
     * @param string $view The view file
     * @param array $args Data arguments
     *
     * @return void
     */
    public static function render($view, $args = [])
    {
        extract($args, EXTR_SKIP);

        $file = "../App/Views/$view"; // relative to Core directory

        if(is_readable($file)) {
            require $file;
        } else {
            echo "$file not found";
        }
    }

    /**
     * Render a view file
     *
     * @param string $template Path to the view file
     * @param array $args Data arguments
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public static function renderTemplate($template, $args = [])
    {
        static $twig = null;

        $template = self::convertToNormalPath($template);

        if($twig === null) {
            $loader = new \Twig_Loader_Filesystem('../App/Views');
            $twig = new \Twig_Environment($loader);
        }

        echo $twig->render($template, $args);
    }

    /**
     * Convert beautiful template path to normal, e.g.:
     *
     * posts.index      =>      posts/index.html
     * admin.posts.edit =>      admin/posts/edit.html
     *
     * @param string $string    Path to the view file
     * @param string $extension Extension of the template file
     * @return string
     */
    protected static function convertToNormalPath($string, $extension = "html")
    {
        return str_replace('.', '/', $string) . '.' . $extension;
    }
}