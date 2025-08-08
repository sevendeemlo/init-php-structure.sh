<?php
// $teacher = dữ liệu giáo viên (nếu là edit), $errors = mảng lỗi
?>

<h2><?= isset($teacher) ? 'Sửa' : 'Thêm' ?> giáo viên</h2>
<form method="POST">
    <div>
        <label>Họ tên</label>
        <input type="text" name="name" value="<?= Escape::html($teacher['name'] ?? '') ?>" required>
    </div>
    <div>
        <label>Email</label>
        <input type="email" name="email" value="<?= Escape::html($teacher['email'] ?? '') ?>" required>
    </div>
    <div>
        <label>Số điện thoại</label>
        <input type="text" name="phone" value="<?= Escape::html($teacher['phone'] ?? '') ?>" required>
    </div>
    <div>
        <label>Bộ môn</label>
        <input type="text" name="subject" value="<?= Escape::html($teacher['subject'] ?? '') ?>" required>
    </div>
    <div>
        <label>Trạng thái</label>
        <select name="status">
            <option value="Đang dạy" <?= (isset($teacher['status']) && $teacher['status'] === 'Đang dạy') ? 'selected' : '' ?>>Đang dạy</option>
            <option value="Nghỉ phép" <?= (isset($teacher['status']) && $teacher['status'] === 'Nghỉ phép') ? 'selected' : '' ?>>Nghỉ phép</option>
            <option value="Đã nghỉ" <?= (isset($teacher['status']) && $teacher['status'] === 'Đã nghỉ') ? 'selected' : '' ?>>Đã nghỉ</option>
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