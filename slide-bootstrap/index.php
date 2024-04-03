<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hien thi hinh anh</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="image_url" placeholder=" ">
        <button type="submit">Add</button>
    </form>

    <?php

    // Tạo biến để lưu trữ danh sách các đường dẫn đến hình ảnh
    $image_urls = [];

    // Khi người dùng nhấp vào nút "Button add", hãy thêm đường dẫn đến hình ảnh vào danh sách
    if (isset($_POST['image_url'])) {
        $image_urls[] = $_POST['image_url'];
    }

    // Sử dụng vòng lặp để hiển thị tất cả các hình ảnh trong danh sách
    foreach ($image_urls as $image_url) {
        echo '<div class="carousel-item">
            <img src="' . $image_url . '" alt="Image">
        </div>';
    }
    
    // Lấy đường dẫn đến hình ảnh từ trường văn bản
$image_url = $_POST['image_url'] ?? '';

// Kiểm tra xem đường dẫn đến hình ảnh có hợp lệ hay không
if (!filter_var($image_url, FILTER_VALIDATE_URL)) {
    echo "Đường dẫn đến hình ảnh không hợp lệ.";
    return;
}

// Tạo thẻ img để hiển thị hình ảnh
echo '<div class="carousel slide" data-ride="carousel">
        <div class="carousel-item active">
            <img src="' . $image_url . '" alt="Image">
        </div>
    </div>';
    ?>
</body>
</html>
