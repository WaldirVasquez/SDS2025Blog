<?php
class Route {
    private static $routes = [];

    // Registrar ruta GET
    public static function get($path, $callback) {
        self::$routes['GET'][$path] = $callback;
    }

    // Registrar ruta POST
    public static function post($path, $callback) {
        self::$routes['POST'][$path] = $callback;
    }

    // Ejecutar la ruta correspondiente
    public static function dispatch() {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $method = $_SERVER['REQUEST_METHOD'];

        // Normalizar URI (quita / final y /index.php/)
        if (strpos($uri, '/index.php') === 0) {
            $uri = substr($uri, strlen('/index.php'));
        }
        if ($uri !== '/' && substr($uri, -1) === '/') {
            $uri = rtrim($uri, '/');
        }

        // Buscar la ruta registrada
        if (isset(self::$routes[$method][$uri])) {
            $callback = self::$routes[$method][$uri];

            if (is_array($callback)) {
                $controller = $callback[0];
                $methodName = $callback[1];

                if (method_exists($controller, $methodName)) {
                    $controller->$methodName();
                } else {
                    self::error("El método <b>{$methodName}</b> no existe en el controlador.");
                }

            } elseif (is_callable($callback)) {
                call_user_func($callback);
            } else {
                self::error("Callback inválido para la ruta <b>{$uri}</b>.");
            }

        } else {
            http_response_code(404);
            self::notFound();
        }
    }

    // Mostrar error genérico (solo si estás en desarrollo)
    private static function error($message) {
        echo "<div style='color:red;text-align:center;margin-top:2rem;'>
                ⚠️ Error de ruta: {$message}
              </div>";
    }

    // Vista 404 personalizada
    private static function notFound() {
        $view404 = __DIR__ . '/../app/views/errors/404.php';
        if (file_exists($view404)) {
            require $view404;
        } else {
            echo "<h1 style='color:red;text-align:center;'>404 Página no encontrada</h1>";
        }
    }
}
?>
