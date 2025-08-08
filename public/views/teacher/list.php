<?php
// $teachers = mảng dữ liệu giáo viên, truyền từ Controller
?>

<h2>Danh sách giáo viên</h2>
<a href="/teacher/create" class="btn btn-primary">Thêm giáo viên</a>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Họ tên</th>
            <th>Email</th>
            <th>Số điện thoại</th>
            <th>Bộ môn</th>
            <th>Trạng thái</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($teachers as $i => $teacher): ?>
        <tr>
            <td><?= $i+1 ?></td>
            <td><?= Escape::html($teacher['name']) ?></td>
            <td><?= Escape::html($teacher['email']) ?></td>
            <td><?= Escape::html($teacher['phone']) ?></td>
            <td><?= Escape::html($teacher['subject']) ?></td>
            <td><?= Escape::html($teacher['status'] ?? 'Đang dạy') ?></td>
            <td>
                <a href="/teacher/edit?id=<?= $teacher['id'] ?>">Sửa</a> |
                <a href="/teacher/delete?id=<?= $teacher['id'] ?>" onclick="return confirm('Xác nhận xoá?')">Xoá</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>