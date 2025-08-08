<?php
// $attendances = mảng dữ liệu điểm danh, nhận từ Controller
?>

<h2>Danh sách điểm danh</h2>
<a href="/attendance/create" class="btn btn-primary">Thêm mới</a>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Lớp</th>
            <th>Học sinh</th>
            <th>Ngày</th>
            <th>Trạng thái</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($attendances as $i => $a): ?>
        <tr>
            <td><?= $i+1 ?></td>
            <td><?= Escape::html($a['class_name']) ?></td>
            <td><?= Escape::html($a['student_name']) ?></td>
            <td><?= Escape::html($a['date']) ?></td>
            <td><?= Escape::html($a['status']) ?></td>
            <td>
                <a href="/attendance/edit?id=<?= $a['id'] ?>">Sửa</a> |
                <a href="/attendance/delete?id=<?= $a['id'] ?>" onclick="return confirm('Xác nhận xoá?')">Xoá</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>