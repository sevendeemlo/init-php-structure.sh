<?php

class ScheduleController
{
    public function index()
    {
        // TODO: Lấy danh sách thời khóa biểu
        // $schedules = ScheduleService::getAll();
        // require 'public/views/schedule/list.php';
    }

    public function show($id)
    {
        // TODO: Lấy chi tiết thời khóa biểu
        // $schedule = ScheduleService::getById($id);
        // require 'public/views/schedule/detail.php';
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // TODO: Thêm thời khóa biểu mới
            // ScheduleService::create($_POST);
            // header('Location: /schedule');
        } else {
            // require 'public/views/schedule/form.php';
        }
    }

    public function update($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // TODO: Cập nhật thời khóa biểu
            // ScheduleService::update($id, $_POST);
            // header('Location: /schedule');
        } else {
            // $schedule = ScheduleService::getById($id);
            // require 'public/views/schedule/form.php';
        }
    }

    public function delete($id)
    {
        // TODO: Xóa thời khóa biểu
        // ScheduleService::delete($id);
        // header('Location: /schedule');
    }
}