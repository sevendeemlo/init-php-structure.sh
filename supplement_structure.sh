#!/bin/bash

# ===============================
# 1. Thư mục/mẫu file data bổ sung
# ===============================
echo "Tạo file students.json và users.json trong thư mục data/"
touch data/students.json
echo "[]" > data/students.json

touch data/users.json
echo "[]" > data/users.json

# ===============================
# 2. Base classes cho app/backend
# ===============================
echo "Tạo BaseModel, BaseController, BaseService..."
cat <<EOL > app/models/BaseModel.php
<?php
abstract class BaseModel {
    // Thêm các hàm chung cho các model ở đây (nếu cần)
}
EOL

cat <<EOL > app/controllers/BaseController.php
<?php
abstract class BaseController {
    protected function render(\$view, \$data = []) {
        extract(\$data);
        include \$view;
    }
    // Thêm các hàm chung cho các controller ở đây
}
EOL

cat <<EOL > app/services/BaseService.php
<?php
abstract class BaseService {
    // Thêm các hàm chung cho các service ở đây (nếu cần)
}
EOL

# ===============================
# 3. Middleware mẫu
# ===============================
echo "Tạo AuthMiddleware, LogMiddleware cơ bản..."
cat <<EOL > app/middlewares/AuthMiddleware.php
<?php
class AuthMiddleware {
    public static function handle() {
        // Kiểm tra đăng nhập, redirect nếu chưa login
    }
}
EOL

cat <<EOL > app/middlewares/LogMiddleware.php
<?php
class LogMiddleware {
    public static function handle() {
        // Ghi lại log thao tác người dùng (nếu cần)
    }
}
EOL

# ===============================
# 4. Helper mở rộng
# ===============================
echo "Tạo Flash.php, Logger.php trong utils/"
cat <<EOL > app/utils/Flash.php
<?php
class Flash {
    public static function set(\$msg) {
        \$_SESSION['flash'] = \$msg;
    }
    public static function get() {
        if(isset(\$_SESSION['flash'])) {
            \$msg = \$_SESSION['flash'];
            unset(\$_SESSION['flash']);
            return \$msg;
        }
        return null;
    }
}
EOL

cat <<EOL > app/utils/Logger.php
<?php
class Logger {
    public static function info(\$msg) {
        error_log("[INFO] " . \$msg);
    }
    public static function error(\$msg) {
        error_log("[ERROR] " . \$msg);
    }
}
EOL

# ===============================
# 5. Router/index.php mẫu
# ===============================
echo "Tạo index.php mẫu cho public/"
cat <<EOL > public/index.php
<?php
session_start();
require_once '../config/config.php';
require_once '../app/utils/Escape.php';
require_once '../app/utils/Validator.php';
require_once '../app/utils/FileHelper.php';
// ... require các controller, service, model cần thiết

\$uri = \$_SERVER['REQUEST_URI'];
// Xử lý routing đơn giản
switch (true) {
    case preg_match('#^/student#', \$uri):
        require_once '../app/controllers/StudentController.php';
        \$controller = new StudentController();
        \$controller->handleRequest();
        break;
    // Thêm các route khác tương tự
    default:
        echo "404 Not Found";
}
EOL

echo "Đã bổ sung các file cơ bản & hướng dẫn mở rộng!"