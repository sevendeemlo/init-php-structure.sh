<?php
// $statistic = dữ liệu thống kê (nếu là edit), $errors = mảng lỗi
?>

<h2><?= isset($statistic) ? 'Sửa' : 'Thêm' ?> chỉ số thống kê</h2>
<form method="POST">
    <div>
        <label>Tên chỉ số</label>
        <input type="text" name="label" value="<?= Escape::html($statistic['label'] ?? '') ?>" required>
    </div>
    <div>
        <label>Giá trị</label>
        <input type="text" name="value" value="<?= Escape::html($statistic['value'] ?? '') ?>" required>
    </div>
    <button type="submit">Lưu</button>
</form>
<?php if (!empty($errors)): ?>
    <div class="errors">
        <?php foreach ($errors as $err): ?>
            <div><?= Escape::html($err) ?></div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>