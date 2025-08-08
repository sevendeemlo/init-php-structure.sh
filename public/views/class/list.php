<?php
// $classes = mảng dữ liệu lớp học
?>

<h2>Danh sách lớp học</h2>
<a href="/class/create" class="btn btn-primary">Thêm lớp</a>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Tên lớp</th>
            <th>Giáo viên chủ nhiệm</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($classes as $i => $c): ?>
        <tr>
            <td><?= $i+1 ?></td>
            <td><?= Escape::html($c['name']) ?></td>
            <td><?= Escape::html($c['teacher']) ?></td>
            <td>
                <a href="/class/edit?id=<?= $c['id'] ?>">Sửa</a> |
                <a href="/class/delete?id=<?= $c['id'] ?>" onclick="return confirm('Xác nhận xoá?')">Xoá</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>