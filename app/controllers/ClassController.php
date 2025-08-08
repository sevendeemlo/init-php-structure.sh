<?php

class ClassController
{
    public function index()
    {
        // TODO: Lấy danh sách lớp
        // $classes = ClassService::getAll();
        // require 'public/views/class/list.php';
    }

    public function show($id)
    {
        // TODO: Lấy thông tin chi tiết lớp
        // $class = ClassService::getById($id);
        // require 'public/views/class/detail.php';
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // TODO: Xử lý lưu lớp mới
            // ClassService::create($_POST);
            // header('Location: /class');
        } else {
            // require 'public/views/class/form.php';
        }
    }

    public function update($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // TODO: Cập nhật lớp
            // ClassService::update($id, $_POST);
            // header('Location: /class');
        } else {
            // $class = ClassService::getById($id);
            // require 'public/views/class/form.php';
        }
    }

    public function delete($id)
    {
        // TODO: Xóa lớp
        // ClassService::delete($id);
        // header('Location: /class');
    }
}