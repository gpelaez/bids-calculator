<?php

namespace Core;

/**
 * This view class.
 *
 * This class allows to display HTML.
 *
 */
class View
{

    /**
     * The render method.
     *
     * @param string $view A string representation of page template.
     * @param array $params A array of the controller variables.
     *
     * @return void
     */
    public static function render(string $view, array $params): void
    {

        // Extract controller variables
        extract($params, EXTR_SKIP);

        // Page template path.
        $content = APPLICATION_PATH . "/app/View/Page/$view.php";

        if (is_readable($content)) {
            // Include global template
            require_once APPLICATION_PATH . "/app/View/layout.php";
        } else {
            throw new \Exception("View $view not found");
        }
    }
}
