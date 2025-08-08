<?php
session_start();
require_once '../config/config.php';
require_once '../app/utils/Escape.php';
require_once '../app/utils/Validator.php';
require_once '../app/utils/FileHelper.php';
// ... require các controller, service, model cần thiết

$uri = $_SERVER['REQUEST_URI'];
// Xử lý routing đơn giản
switch (true) {
    case preg_match('#^/student#', $uri):
        require_once '../app/controllers/StudentController.php';
        $controller = new StudentController();
        $controller->handleRequest();
        break;
    // Thêm các route khác tương tự
    default:
        echo "404 Not Found";
}
