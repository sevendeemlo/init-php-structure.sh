<?php

require_once __DIR__ . '/../models/TeacherModel.php';

class TeacherService
{
    public static function getAll()
    {
        return TeacherModel::getAll();
    }

    public static function getById($id)
    {
        return TeacherModel::getById($id);
    }

    public static function create($data)
    {
        // TODO: validate data nếu cần
        return TeacherModel::create($data);
    }

    public static function update($id, $data)
    {
        // TODO: validate data nếu cần
        TeacherModel::update($id, $data);
    }

    public static function delete($id)
    {
        TeacherModel::delete($id);
    }
}