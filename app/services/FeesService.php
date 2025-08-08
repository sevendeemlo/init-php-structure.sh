<?php

require_once __DIR__ . '/../models/FeesModel.php';

class FeesService
{
    public static function getAll()
    {
        return FeesModel::getAll();
    }

    public static function getById($id)
    {
        return FeesModel::getById($id);
    }

    public static function create($data)
    {
        // TODO: validate data nếu cần
        return FeesModel::create($data);
    }

    public static function update($id, $data)
    {
        // TODO: validate data nếu cần
        FeesModel::update($id, $data);
    }

    public static function delete($id)
    {
        FeesModel::delete($id);
    }
}