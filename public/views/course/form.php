<?php
// $course = dữ liệu khóa học (nếu là edit), $errors = mảng lỗi
?>

<h2><?= isset($course) ? 'Sửa' : 'Thêm' ?> khóa học</h2>
<form method="POST">
    <div>
        <label>Tên khóa học</label>
        <input type="text" name="name" value="<?= Escape::html($course['name'] ?? '') ?>" required>
    </div>
    <div>
        <label>Giáo viên phụ trách</label>
        <input type="text" name="teacher" value="<?= Escape::html($course['teacher'] ?? '') ?>" required>
    </div>
    <div>
        <label>Lớp học</label>
        <input type="text" name="class" value="<?= Escape::html($course['class'] ?? '') ?>" required>
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