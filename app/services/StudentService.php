<?php

require_once __DIR__ . '/../models/StudentModel.php';

class StudentService
{
    public static function getAll()
    {
        return StudentModel::getAll();
    }

    public static function getById($id)
    {
        return StudentModel::getById($id);
    }

    public static function create($data)
    {
        // TODO: validate data nếu cần
        return StudentModel::create($data);
    }

    public static function update($id, $data)
    {
        // TODO: validate data nếu cần
        StudentModel::update($id, $data);
    }

    public static function delete($id)
    {
        StudentModel::delete($id);
    }
}