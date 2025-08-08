<?php
// $fee = dữ liệu học phí (nếu là edit), $errors = mảng lỗi
?>

<h2><?= isset($fee) ? 'Sửa' : 'Thêm' ?> học phí</h2>
<form method="POST">
    <div>
        <label>Học sinh</label>
        <input type="text" name="student_name" value="<?= Escape::html($fee['student_name'] ?? '') ?>" required>
    </div>
    <div>
        <label>Lớp</label>
        <input type="text" name="class_name" value="<?= Escape::html($fee['class_name'] ?? '') ?>" required>
    </div>
    <div>
        <label>Số tiền</label>
        <input type="number" name="amount" value="<?= Escape::html($fee['amount'] ?? '') ?>" required>
    </div>
    <div>
        <label>Trạng thái</label>
        <select name="status" required>
            <option value="Chưa đóng" <?= (isset($fee['status']) && $fee['status'] === 'Chưa đóng') ? 'selected' : '' ?>>Chưa đóng</option>
            <option value="Đã đóng" <?= (isset($fee['status']) && $fee['status'] === 'Đã đóng') ? 'selected' : '' ?>>Đã đóng</option>
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