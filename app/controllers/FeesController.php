<?php

class FeesController
{
    public function index()
    {
        // TODO: Lấy danh sách học phí
        // $fees = FeesService::getAll();
        // require 'public/views/fees/list.php';
    }

    public function show($id)
    {
        // TODO: Lấy chi tiết học phí
        // $fee = FeesService::getById($id);
        // require 'public/views/fees/detail.php';
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // TODO: Thêm học phí mới
            // FeesService::create($_POST);
            // header('Location: /fees');
        } else {
            // require 'public/views/fees/form.php';
        }
    }

    public function update($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // TODO: Cập nhật học phí
            // FeesService::update($id, $_POST);
            // header('Location: /fees');
        } else {
            // $fee = FeesService::getById($id);
            // require 'public/views/fees/form.php';
        }
    }

    public function delete($id)
    {
        // TODO: Xóa học phí
        // FeesService::delete($id);
        // header('Location: /fees');
    }
}