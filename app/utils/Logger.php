<?php
class Logger {
    public static function info($msg) {
        error_log("[INFO] " . $msg);
    }
    public static function error($msg) {
        error_log("[ERROR] " . $msg);
    }
}
