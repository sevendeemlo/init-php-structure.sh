<?php
// $class = dữ liệu lớp học (nếu là edit), $errors = mảng lỗi
?>

<h2><?= isset($class) ? 'Sửa' : 'Thêm' ?> lớp học</h2>
<form method="POST">
    <div>
        <label>Tên lớp</label>
        <input type="text" name="name" value="<?= Escape::html($class['name'] ?? '') ?>" required>
    </div>
    <div>
        <label>Giáo viên chủ nhiệm</label>
        <input type="text" name="teacher" value="<?= Escape::html($class['teacher'] ?? '') ?>" required>
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