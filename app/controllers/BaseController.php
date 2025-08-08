<?php
abstract class BaseController {
    protected function render($view, $data = []) {
        extract($data);
        include $view;
    }
    // Thêm các hàm chung cho các controller ở đây
}
