<?php
    class Lib {
    public function render($file, $params = array()) {
        ob_flush();
        extract($params);
        ob_start();
        include($file);
        $out = ob_get_clean();

        return $out;
        }
    }