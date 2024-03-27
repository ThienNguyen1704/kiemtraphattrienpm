<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hiển thị dữ liệu NHANVIEN</title>
    <style>
        table {
            border-collapse: collapse;
            width: 90%;
        }
        th, td {
            padding: 7px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        .thumbnail {
            width: 40px; /* Kích thước thu nhỏ tùy chỉnh */
        }
    </style>
</head>
<body>
    <h1>DATA NHANVIEN</h1>
    <?php
    // Kết nối đến cơ sở dữ liệu
    $connection = mysqli_connect('localhost', 'root', '', 'ql_nhansu');

    // Kiểm tra kết nối
    if (!$connection) {
        die("Kết nối cơ sở dữ liệu thất bại: " . mysqli_connect_error());
    }

    // Truy vấn dữ liệu từ bảng NHANVIEN
    $query = "SELECT Ma_NV, Ten_NV, Phai, Noi_Sinh, Ma_Phong, Luong FROM NHANVIEN";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Lỗi truy vấn: " . mysqli_error($connection));
    }
    ?>

    <div id="data-container">
        <table>
            <tr>
                <th>Mã Nhân Viên</th>
                <th>Tên Nhân Viên</th>
                <th>Phái</th>
                <th>Nơi Sinh</th>
                <th>Mã Phòng</th>
                <th>Lương</th>
            </tr>
            <?php
            // Duyệt qua các hàng dữ liệu và hiển thị
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['Ma_NV'] . "</td>";
                echo "<td>" . $row['Ten_NV'] . "</td>";
                echo "<td><img class='thumbnail' src='/kiemtra/images/" . ($row['Phai'] == 'NU' ? 'woman.jpg' : 'man.jpg') . "' alt='Hình ảnh'></td>";
                echo "<td>" . $row['Noi_Sinh'] . "</td>";
                echo "<td>" . $row['Ma_Phong'] . "</td>";
                echo "<td>" . $row['Luong'] . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>

<?php
// Đóng kết nối cơ sở dữ liệu
mysqli_close($connection);
?>