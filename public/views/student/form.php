<?php
// $student = dữ liệu học sinh (nếu là edit), $errors = mảng lỗi
?>

<h2><?= isset($student) ? 'Sửa' : 'Thêm' ?> học sinh</h2>
<form method="POST">
    <div>
        <label>Họ tên</label>
        <input type="text" name="name" value="<?= Escape::html($student['name'] ?? '') ?>" required>
    </div>
    <div>
        <label>Email</label>
        <input type="email" name="email" value="<?= Escape::html($student['email'] ?? '') ?>" required>
    </div>
    <div>
        <label>Ngày sinh</label>
        <input type="date" name="dob" value="<?= Escape::html($student['dob'] ?? '') ?>" required>
    </div>
    <div>
        <label>Lớp</label>
        <input type="text" name="class" value="<?= Escape::html($student['class'] ?? '') ?>" required>
    </div>
    <div>
        <label>Trạng thái</label>
        <select name="status">
            <option value="Đang học" <?= (isset($student['status']) && $student['status'] === 'Đang học') ? 'selected' : '' ?>>Đang học</option>
            <option value="Bảo lưu" <?= (isset($student['status']) && $student['status'] === 'Bảo lưu') ? 'selected' : '' ?>>Bảo lưu</option>
            <option value="Đã tốt nghiệp" <?= (isset($student['status']) && $student['status'] === 'Đã tốt nghiệp') ? 'selected' : '' ?>>Đã tốt nghiệp</option>
            <option value="Đã nghỉ" <?= (isset($student['status']) && $student['status'] === 'Đã nghỉ') ? 'selected' : '' ?>>Đã nghỉ</option>
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