<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title><?= isset($title) ? Escape::html($title) : 'Quản lý trường học' ?></title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <!-- Nhúng Tailwind nếu có -->
</head>
<body>
    <header>
        <h1>Quản lý trường học</h1>
        <nav>
            <a href="/attendance">Điểm danh</a> |
            <a href="/class">Lớp học</a> |
            <a href="/course">Khóa học</a> |
            <a href="/fees">Học phí</a> |
            <a href="/schedule">Lịch học</a> |
            <a href="/statistics">Thống kê</a>
        </nav>
    </header>
    <main>
        <?php if (!empty($flash)): ?>
            <div class="flash"><?= Escape::html($flash) ?></div>
        <?php endif; ?>
        <?php include $view; ?>
    </main>
    <footer>
        <hr>
        <p>&copy; <?= date('Y') ?> Demo School</p>
    </footer>
</body>
</html>