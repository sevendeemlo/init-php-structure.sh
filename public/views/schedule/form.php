<?php
// $schedule = dữ liệu lịch học (nếu là edit), $errors = mảng lỗi
?>

<h2><?= isset($schedule) ? 'Sửa' : 'Thêm' ?> lịch học</h2>
<form method="POST">
    <div>
        <label>Lớp</label>
        <input type="text" name="class_name" value="<?= Escape::html($schedule['class_name'] ?? '') ?>" required>
    </div>
    <div>
        <label>Môn học</label>
        <input type="text" name="course" value="<?= Escape::html($schedule['course'] ?? '') ?>" required>
    </div>
    <div>
        <label>Giáo viên</label>
        <input type="text" name="teacher" value="<?= Escape::html($schedule['teacher'] ?? '') ?>" required>
    </div>
    <div>
        <label>Ngày</label>
        <input type="date" name="date" value="<?= Escape::html($schedule['date'] ?? '') ?>" required>
    </div>
    <div>
        <label>Ca học</label>
        <input type="text" name="session" value="<?= Escape::html($schedule['session'] ?? '') ?>" required>
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