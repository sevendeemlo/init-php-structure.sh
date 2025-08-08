<?php
// $fees = mảng dữ liệu học phí
?>

<h2>Danh sách học phí</h2>
<a href="/fees/create" class="btn btn-primary">Thêm khoản phí</a>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Học sinh</th>
            <th>Lớp</th>
            <th>Số tiền</th>
            <th>Trạng thái</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($fees as $i => $fee): ?>
        <tr>
            <td><?= $i+1 ?></td>
            <td><?= Escape::html($fee['student_name']) ?></td>
            <td><?= Escape::html($fee['class_name']) ?></td>
            <td><?= number_format($fee['amount']) ?> đ</td>
            <td><?= Escape::html($fee['status']) ?></td>
            <td>
                <a href="/fees/edit?id=<?= $fee['id'] ?>">Sửa</a> |
                <a href="/fees/delete?id=<?= $fee['id'] ?>" onclick="return confirm('Xác nhận xoá?')">Xoá</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>