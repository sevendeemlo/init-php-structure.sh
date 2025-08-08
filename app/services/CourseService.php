<?php

require_once __DIR__ . '/../models/CourseModel.php';

class CourseService
{
    public static function getAll()
    {
        return CourseModel::getAll();
    }

    public static function getById($id)
    {
        return CourseModel::getById($id);
    }

    public static function create($data)
    {
        // TODO: validate data nếu cần
        return CourseModel::create($data);
    }

    public static function update($id, $data)
    {
        // TODO: validate data nếu cần
        CourseModel::update($id, $data);
    }

    public static function delete($id)
    {
        CourseModel::delete($id);
    }
}