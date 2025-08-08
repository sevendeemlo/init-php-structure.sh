<?php
// $students = mảng dữ liệu học sinh, truyền từ Controller
?>

<h2>Danh sách học sinh</h2>
<a href="/student/create" class="btn btn-primary">Thêm học sinh</a>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Họ tên</th>
            <th>Email</th>
            <th>Ngày sinh</th>
            <th>Lớp</th>
            <th>Trạng thái</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($students as $i => $student): ?>
        <tr>
            <td><?= $i+1 ?></td>
            <td><?= Escape::html($student['name']) ?></td>
            <td><?= Escape::html($student['email']) ?></td>
            <td><?= Escape::html($student['dob']) ?></td>
            <td><?= Escape::html($student['class']) ?></td>
            <td><?= Escape::html($student['status'] ?? 'Đang học') ?></td>
            <td>
                <a href="/student/edit?id=<?= $student['id'] ?>">Sửa</a> |
                <a href="/student/delete?id=<?= $student['id'] ?>" onclick="return confirm('Xác nhận xoá?')">Xoá</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>