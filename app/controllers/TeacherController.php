<?php

class TeacherController
{
    public function index()
    {
        // TODO: Lấy danh sách giáo viên
        // $teachers = TeacherService::getAll();
        // require 'public/views/teacher/list.php';
    }

    public function show($id)
    {
        // TODO: Lấy thông tin giáo viên
        // $teacher = TeacherService::getById($id);
        // require 'public/views/teacher/detail.php';
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // TODO: Tạo mới giáo viên
            // TeacherService::create($_POST);
            // header('Location: /teacher');
        } else {
            // require 'public/views/teacher/form.php';
        }
    }

    public function update($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // TODO: Cập nhật giáo viên
            // TeacherService::update($id, $_POST);
            // header('Location: /teacher');
        } else {
            // $teacher = TeacherService::getById($id);
            // require 'public/views/teacher/form.php';
        }
    }

    public function delete($id)
    {
        // TODO: Xóa giáo viên
        // TeacherService::delete($id);
        // header('Location: /teacher');
    }
}