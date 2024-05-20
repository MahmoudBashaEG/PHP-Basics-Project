<?php

class Router
{
    protected $routes = [];

    private function AddRoutes($method, $routes)
    {
        foreach ($routes as $key => $controller) {
            $this->routes[$method][] = [
                'method' => $method,
                'uri' => $key,
                'controller' => $controller,
            ];
        }
    }

    public function AddGetRoutes($routes)
    {
        $this->AddRoutes("GET", $routes);
    }

    public function AddPostRoutes($routes)
    {
        $this->AddRoutes("POST", $routes);
    }

    public function AddPutRoutes($routes)
    {
        $this->AddRoutes("PUT", $routes);
    }

    public function AddDeleteRoutes($routes)
    {
        $this->AddRoutes("DELETE", $routes);
    }

    public function Route($uri, $method)
    {
        $ismethodRoutesFound = key_exists($method, $this->routes);
        if (!$ismethodRoutesFound) {
            $this->error(404);
        }

        $methodRoutes = $this->routes[$method];
        foreach ($methodRoutes as $route) {
            if ($route['uri'] === $uri && $route['method'] === $method) {
                require $route['controller'];
                return;
            }
        }

        $this->error(403);
    }

    public function Error($httpErrorCode = 404)
    {
        http_response_code($httpErrorCode);
        loadView("errors/{$httpErrorCode}");
        exit;
    }
}
