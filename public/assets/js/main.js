// main.js - Script hỗ trợ cho giao diện quản trị

// Xác nhận xóa khi ấn các link có class 'delete-link'
document.addEventListener('DOMContentLoaded', function() {
  document.querySelectorAll('.delete-link').forEach(function(link) {
    link.addEventListener('click', function(e) {
      if (!confirm('Bạn có chắc chắn muốn xoá?')) {
        e.preventDefault();
      }
    });
  });

  // Hiển thị và tự động ẩn flash message (nếu có)
  var flash = document.querySelector('.flash');
  if (flash) {
    setTimeout(function() {
      flash.style.display = 'none';
    }, 3500);
  }
});

// Các script custom khác có thể thêm phía dưới