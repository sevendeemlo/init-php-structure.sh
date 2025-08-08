<?php

require_once __DIR__ . '/../models/ScheduleModel.php';

class ScheduleService
{
    public static function getAll()
    {
        return ScheduleModel::getAll();
    }

    public static function getById($id)
    {
        return ScheduleModel::getById($id);
    }

    public static function create($data)
    {
        // TODO: validate data nếu cần
        return ScheduleModel::create($data);
    }

    public static function update($id, $data)
    {
        // TODO: validate data nếu cần
        ScheduleModel::update($id, $data);
    }

    public static function delete($id)
    {
        ScheduleModel::delete($id);
    }
}