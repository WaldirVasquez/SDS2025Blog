<?php
class Route {
    public static function get($route, $callback) {
        $url = $_SERVER['REQUEST_URI'];
        if ($url == $route) {
            call_user_func($callback);
            exit;
        }
    }
}

?>