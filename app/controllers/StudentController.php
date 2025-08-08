<?php

class StudentController
{
    public function index()
    {
        // TODO: Lấy danh sách học sinh
        // $students = StudentService::getAll();
        // require 'public/views/student/list.php';
    }

    public function show($id)
    {
        // TODO: Lấy thông tin học sinh
        // $student = StudentService::getById($id);
        // require 'public/views/student/detail.php';
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // TODO: Tạo mới học sinh
            // StudentService::create($_POST);
            // header('Location: /student');
        } else {
            // require 'public/views/student/form.php';
        }
    }

    public function update($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // TODO: Cập nhật học sinh
            // StudentService::update($id, $_POST);
            // header('Location: /student');
        } else {
            // $student = StudentService::getById($id);
            // require 'public/views/student/form.php';
        }
    }

    public function delete($id)
    {
        // TODO: Xóa học sinh
        // StudentService::delete($id);
        // header('Location: /student');
    }
}