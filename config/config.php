<?php
// Cấu hình chung cho hệ thống quản lý trường học

return [
    // Đường dẫn gốc (tùy chỉnh nếu deploy production)
    'base_url' => 'http://localhost:8000',

    // Thông tin liên hệ trường học
    'school_name'    => 'Trường THPT Demo',
    'school_address' => '123 Đường ABC, Quận XYZ, TP.HCM',
    'school_email'   => 'info@truongdemo.edu.vn',
    'school_phone'   => '0123-456-789',

    // Cấu hình ngôn ngữ mặc định
    'locale' => 'vi',

    // Cấu hình file lưu trữ (nếu cần chuyển sang DB chỉ sửa tại đây)
    'storage' => [
        'students'    => 'data/students.json',
        'teachers'    => 'data/teachers.json',
        'classes'     => 'data/classes.json',
        'courses'     => 'data/courses.json',
        'schedules'   => 'data/schedules.json',
        'attendances' => 'data/attendances.json',
        'fees'        => 'data/fees.json',
    ],

    // Thông tin khác (nếu cần mở rộng)
    // 'timezone' => 'Asia/Ho_Chi_Minh',
    // 'admin_email' => 'admin@truongdemo.edu.vn'
];