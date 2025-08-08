<?php

class CourseController
{
    public function index()
    {
        // TODO: Lấy danh sách khóa học
        // $courses = CourseService::getAll();
        // require 'public/views/course/list.php';
    }

    public function show($id)
    {
        // TODO: Lấy chi tiết khóa học
        // $course = CourseService::getById($id);
        // require 'public/views/course/detail.php';
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // TODO: Thêm khóa học mới
            // CourseService::create($_POST);
            // header('Location: /course');
        } else {
            // require 'public/views/course/form.php';
        }
    }

    public function update($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // TODO: Cập nhật khóa học
            // CourseService::update($id, $_POST);
            // header('Location: /course');
        } else {
            // $course = CourseService::getById($id);
            // require 'public/views/course/form.php';
        }
    }

    public function delete($id)
    {
        // TODO: Xóa khóa học
        // CourseService::delete($id);
        // header('Location: /course');
    }
}