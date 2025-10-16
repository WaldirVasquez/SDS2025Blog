<?php
class Route {
    private static $routes = [];

    public static function get($path, $callback) {
        self::$routes['GET'][$path] = $callback;
    }

    public static function post($path, $callback) {
        self::$routes['POST'][$path] = $callback;
    }

    public static function dispatch() {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $method = $_SERVER['REQUEST_METHOD'];

        
        if ($uri !== '/' && substr($uri, -1) === '/') {
            $uri = rtrim($uri, '/');
        }

        if (isset(self::$routes[$method][$uri])) {
            $callback = self::$routes[$method][$uri];

            if (is_array($callback)) {
                $controller = $callback[0];
                $methodName = $callback[1];
                $controller->$methodName();
            } elseif (is_callable($callback)) {
                call_user_func($callback);
            }
        } else {
            http_response_code(404);
            echo "<h1 style='color:red;text-align:center;'>404 Página no encontrada</h1>";
        }
    }
}
