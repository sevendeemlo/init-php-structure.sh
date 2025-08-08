<?php

class StatisticsModel
{
    // Statistics thường lấy tổng hợp từ các Model khác (không lưu file riêng)
    // Bạn có thể thêm các hàm tính toán tùy ý

    public static function getSummary()
    {
        // Ví dụ: tổng số học sinh, giáo viên, lớp, v.v.
        return [
            'students' => count(StudentModel::getAll()),
            'teachers' => count(TeacherModel::getAll()),
            'classes'  => count(ClassModel::getAll()),
            'courses'  => count(CourseModel::getAll()),
            'schedules'=> count(ScheduleModel::getAll()),
            'attendances' => count(AttendanceModel::getAll()),
            'fees'     => count(FeesModel::getAll()),
        ];
    }
}