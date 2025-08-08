<?php

require_once __DIR__ . '/../models/AttendanceModel.php';

class AttendanceService
{
    public static function getAll()
    {
        return AttendanceModel::getAll();
    }

    public static function getById($id)
    {
        return AttendanceModel::getById($id);
    }

    public static function create($data)
    {
        // TODO: validate data nếu cần
        return AttendanceModel::create($data);
    }

    public static function update($id, $data)
    {
        // TODO: validate data nếu cần
        AttendanceModel::update($id, $data);
    }

    public static function delete($id)
    {
        AttendanceModel::delete($id);
    }
}