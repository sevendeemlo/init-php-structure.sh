<?php

require_once __DIR__ . '/../models/StatisticsModel.php';

class StatisticsService
{
    public static function getAllStats()
    {
        return StatisticsModel::getSummary();
    }

    public static function getReport($type = null)
    {
        // Có thể mở rộng: $type là "student", "teacher", ...
        $summary = StatisticsModel::getSummary();
        if ($type && isset($summary[$type])) {
            return [$type => $summary[$type]];
        }
        return $summary;
    }
}