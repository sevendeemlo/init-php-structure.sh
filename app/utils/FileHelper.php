<?php

class FileHelper
{
    public static function readJson($file)
    {
        if (!file_exists($file)) return [];
        $json = file_get_contents($file);
        return json_decode($json, true) ?: [];
    }

    public static function writeJson($file, $data)
    {
        file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }
}