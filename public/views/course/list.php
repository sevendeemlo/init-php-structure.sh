<?php
// $courses = mảng dữ liệu khóa học
?>

<h2>Danh sách khóa học</h2>
<a href="/course/create" class="btn btn-primary">Thêm khóa học</a>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Tên khóa học</th>
            <th>Giáo viên</th>
            <th>Lớp học</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($courses as $i => $c): ?>
        <tr>
            <td><?= $i+1 ?></td>
            <td><?= Escape::html($c['name']) ?></td>
            <td><?= Escape::html($c['teacher']) ?></td>
            <td><?= Escape::html($c['class']) ?></td>
            <td>
                <a href="/course/edit?id=<?= $c['id'] ?>">Sửa</a> |
                <a href="/course/delete?id=<?= $c['id'] ?>" onclick="return confirm('Xác nhận xoá?')">Xoá</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>