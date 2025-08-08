<?php
// $attendance = dữ liệu điểm danh (nếu là edit), $errors = mảng lỗi
?>

<h2><?= isset($attendance) ? 'Sửa' : 'Thêm' ?> điểm danh</h2>
<form method="POST">
    <div>
        <label>Lớp</label>
        <input type="text" name="class_name" value="<?= Escape::html($attendance['class_name'] ?? '') ?>" required>
    </div>
    <div>
        <label>Học sinh</label>
        <input type="text" name="student_name" value="<?= Escape::html($attendance['student_name'] ?? '') ?>" required>
    </div>
    <div>
        <label>Ngày</label>
        <input type="date" name="date" value="<?= Escape::html($attendance['date'] ?? '') ?>" required>
    </div>
    <div>
        <label>Trạng thái</label>
        <select name="status" required>
            <option value="Có mặt" <?= (isset($attendance['status']) && $attendance['status'] === 'Có mặt') ? 'selected' : '' ?>>Có mặt</option>
            <option value="Vắng" <?= (isset($attendance['status']) && $attendance['status'] === 'Vắng') ? 'selected' : '' ?>>Vắng</option>
            <option value="Nghỉ phép" <?= (isset($attendance['status']) && $attendance['status'] === 'Nghỉ phép') ? 'selected' : '' ?>>Nghỉ phép</option>
        </select>
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