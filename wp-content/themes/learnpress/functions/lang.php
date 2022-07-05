<?php
function my_custom_translations( $strings ) {
  $text = array(
  'Quick View' => 'Xem nhanh',
  'SHOPPING CART' => 'Giỏ hàng',
  'CHECKOUT DETAILS' => 'Thanh toán',
  'ORDER COMPLETE' => 'Hoàn thành',
  'Accept' => 'Chấp nhận',
  'Add to cart' => 'Cho vào giỏ',
  'Thêm vào giỏ hàng' => 'Cho vào giỏ',
  'Related products' => 'Sản phẩm tương tự',
  'Description' => 'Thông tin chi tiết',
  'Additional information' =>'Thông tin bổ sung',
  'Reviews' => 'Đánh giá',
  'Start Learning' => 'Học Ngay',
  'Course Content' => 'Nội dung khóa học',
  'About Lesson' => 'Thông tin bài học',
  'Exercise Files' => 'Files đính kèm',
  'Previous' => 'quay lại',
  'Next' => 'Tiếp Theo',
  'Clear All Filters'=> 'Đặt lại bộ lọc',
  'By' =>'Bởi',
  'Category' => 'Doanh mục',
  'Dashboard' => 'Bảng điều khiển',
  'My Profile' => 'Thông tin của tôi',
  'Enrolled Courses' => 'Các khóa học đã đăng ký',
  'Wishlist' => 'Danh sách yêu thích',
  'Order History' => 'lịch sử đơn hàng',
  'Question & Answer' => 'Trả lời câu hỏi',
  'Instructor' => 'Giảng viên',
  'My Courses' => 'Các khóa học của tôi',
  'Announcements' => 'Thông báo',
  'Settings' => 'Cài đặt',
  'Logout' => 'Đăng xuất',
  'Complete Your Profile' =>'Hoàn thành hồ sơ của bạn',
  'Set Your Profile Photo' => 'Đặt ảnh hồ sơ của bạn',
  'Set Your Bio' => 'Đặt tiểu sử của bạn',
  'Set Withdraw Method' => 'Đặt phương thức rút tiền',
  'Active Courses' => 'Các khóa học hoạt động',
  'Completed Courses' => 'Các khóa học đã hoàn thành',
  'Total Students' =>'Tổng số học sinh',
  'Total Courses'=> 'Tổng số khóa học',
  'Total Earnings' => 'Tổng Thu Nhập',
  'In Progress Courses'=> 'Các Khóa Học Đang Tiến Hành',
  'Completed Lessons:' => 'Bài học đã hoàn thành:',
  'Complete' => 'Hoàn thành',
  'Course Name' => 'Tên khóa học',
  'Enrolled' => 'Đã đăng ký',
  'Rating' => 'Đánh giá',
  'You are almost done' => 'Bạn đã hoàn thành',
  'Course Progress' => 'Tiến trình học',
  'Course' => 'Khóa học',
  'hours' => 'giờ',
  'minutes' => 'phút',
  'Duration' => 'Thời lượng',
  'Info' => 'Thông tin',
  'Show More' => 'Hiển thị thêm',
  'Audience' => 'Cấu trúc bài giảng',
  'Tags' => 'Thẻ',
  'Requirements' => 'Yêu cầu',
  'Material Includes' =>  'Khóa học bao gồm',
  'What Will You Learn?' => 'Bạn sẽ học gì?',
  'Last Updated' => 'Cập nhật lúc',
  'Intermediate' => 'Trung bình',
  'View Cart' =>'Xem giỏ hàng',
  'An account is already registered with your email address' => 'Một tài khoản đã được đăng ký với địa chỉ email của bạn',
  'Please log in' => 'Hãy đăng nhập',
  'Your Progress' => 'Tiến trình của bạn',
  'Overview' => 'Tổng quan',
  'Mark as' => 'Đánh dấu',
  'Show Less' => 'Ẩn bớt',
  'Free' =>'Miễn phí',
  'Enroll now' => 'Đăng ký ngay bây giờ',
  'access this' => 'truy cập',
  'You' => 'Bạn',
  'in this' => '',
  'on' => 'lúc',
  'No data supplied.'=> 'Không tìm thấy dữ liệu'
  );
  $strings = str_ireplace( array_keys( $text ), $text, $strings );
  return $strings;
  }
  add_filter( 'gettext', 'my_custom_translations', 20 );