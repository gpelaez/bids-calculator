<?php

namespace App\Controller;

use Core\View;

class BaseController
{
    /**
     * Render a view.
     *
     * @param string $view
     *   Name of the view you want to render.
     *
     * @param array $data
     *   View payload.
     */
    protected function render($view, $data = [])
    {
        View::render($view, $data);
    }

    /**
     * Api return json data.
     *
     * @param array $data
     *   View payload.
     */
    protected function json($data)
    {
        header('Content-Type: application/json');
        echo json_encode($data, true);
    }
}
