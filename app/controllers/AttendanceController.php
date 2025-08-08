<?php

class AttendanceController
{
    public function index()
    {
        // TODO: Lấy danh sách điểm danh
        // $attendances = AttendanceService::getAll();
        // require 'public/views/attendance/list.php';
    }

    public function show($id)
    {
        // TODO: Lấy thông tin chi tiết điểm danh
        // $attendance = AttendanceService::getById($id);
        // require 'public/views/attendance/detail.php';
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // TODO: Xử lý lưu điểm danh mới
            // AttendanceService::create($_POST);
            // header('Location: /attendance');
        } else {
            // require 'public/views/attendance/form.php';
        }
    }

    public function update($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // TODO: Cập nhật điểm danh
            // AttendanceService::update($id, $_POST);
            // header('Location: /attendance');
        } else {
            // $attendance = AttendanceService::getById($id);
            // require 'public/views/attendance/form.php';
        }
    }

    public function delete($id)
    {
        // TODO: Xóa điểm danh
        // AttendanceService::delete($id);
        // header('Location: /attendance');
    }
}