<?php

class Router
{
    private static array $routes = [];
    private string $page404;

    function __construct($page404Url) {
        $this->page404 = $page404Url;
    }

    public function addRoutes($paths)
    {
        foreach ($paths as $path=>$controller) {
            if (!array_key_exists($path, self::$routes)) {
                self::$routes[$path] = $controller;
            }
        }
    }

    public function route() {
        $request = $_SERVER['REQUEST_URI'];
        if (array_key_exists($request, self::$routes)) {
            include __DIR__ . '/../' . self::$routes[$request];
            exit;
        } else {
            $this->show404Page();
        }
    }

    private function show404Page() {
        include __DIR__ . '/../' . $this->page404;
    }


}
