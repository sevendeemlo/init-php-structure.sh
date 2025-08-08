<?php
// $statistics = mảng dữ liệu thống kê (ví dụ: tổng số học sinh, tổng doanh thu v.v.)
?>

<h2>Bảng thống kê</h2>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Chỉ số</th>
            <th>Giá trị</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($statistics as $i => $stat): ?>
        <tr>
            <td><?= $i+1 ?></td>
            <td><?= Escape::html($stat['label']) ?></td>
            <td><?= Escape::html($stat['value']) ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<a href="/statistics/create" class="btn btn-primary">Thêm thống kê</a>