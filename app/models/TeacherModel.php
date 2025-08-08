<?php

class TeacherModel
{
    private static $file = 'data/teachers.json';

    public static function getAll()
    {
        return json_decode(@file_get_contents(self::$file), true) ?: [];
    }

    public static function getById($id)
    {
        foreach (self::getAll() as $item) {
            if ($item['id'] == $id) return $item;
        }
        return null;
    }

    public static function create($data)
    {
        $items = self::getAll();
        $data['id'] = uniqid();
        $items[] = $data;
        file_put_contents(self::$file, json_encode($items, JSON_PRETTY_PRINT));
        return $data;
    }

    public static function update($id, $data)
    {
        $items = self::getAll();
        foreach ($items as &$item) {
            if ($item['id'] == $id) {
                $item = array_merge($item, $data);
                break;
            }
        }
        file_put_contents(self::$file, json_encode($items, JSON_PRETTY_PRINT));
    }

    public static function delete($id)
    {
        $items = array_filter(self::getAll(), fn($item) => $item['id'] != $id);
        file_put_contents(self::$file, json_encode(array_values($items), JSON_PRETTY_PRINT));
    }
}