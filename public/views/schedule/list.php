<?php
// $schedules = mảng dữ liệu lịch học
?>

<h2>Danh sách lịch học</h2>
<a href="/schedule/create" class="btn btn-primary">Thêm lịch học</a>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Lớp</th>
            <th>Môn học</th>
            <th>Giáo viên</th>
            <th>Ngày</th>
            <th>Ca học</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($schedules as $i => $sch): ?>
        <tr>
            <td><?= $i+1 ?></td>
            <td><?= Escape::html($sch['class_name']) ?></td>
            <td><?= Escape::html($sch['course']) ?></td>
            <td><?= Escape::html($sch['teacher']) ?></td>
            <td><?= Escape::html($sch['date']) ?></td>
            <td><?= Escape::html($sch['session']) ?></td>
            <td>
                <a href="/schedule/edit?id=<?= $sch['id'] ?>">Sửa</a> |
                <a href="/schedule/delete?id=<?= $sch['id'] ?>" onclick="return confirm('Xác nhận xoá?')">Xoá</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>