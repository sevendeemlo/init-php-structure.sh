<?php

require_once __DIR__ . '/../models/ClassModel.php';

class ClassService
{
    public static function getAll()
    {
        return ClassModel::getAll();
    }

    public static function getById($id)
    {
        return ClassModel::getById($id);
    }

    public static function create($data)
    {
        // TODO: validate data nếu cần
        return ClassModel::create($data);
    }

    public static function update($id, $data)
    {
        // TODO: validate data nếu cần
        ClassModel::update($id, $data);
    }

    public static function delete($id)
    {
        ClassModel::delete($id);
    }
}