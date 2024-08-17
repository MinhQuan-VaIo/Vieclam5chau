
<?php
include './connect.php'; // Include file kết nối

// Truy vấn dữ liệu từ bảng
$sql = "SELECT * FROM ten_bang"; // Thay `ten_bang` bằng tên bảng thực tế của bạn
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Quản lý Đăng Tin Tuyển Dụng</title>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.container {
    width: 95%;
    margin: 20px auto;
}

h2 {
    text-align: center;
}

table {
    width: 100%;
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 10px;
    text-align: left;
}

thead {
    background-color: #f2f2f2;
}

tbody tr:nth-child(even) {
    background-color: #f2f2f2;
}
.approve-btn {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 5px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    margin: 2px 0;
    cursor: pointer;
    border-radius: 5px;
}
    </style>

</head>
<body>
<div class="container">
    <h2>Quản lý Đăng Tin Tuyển Dụng</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên Công Ty</th>
                <th>Chức Danh</th>
                <th>Nghề Nghiệp</th>
                <th>Hình Thức Làm Việc</th>
                <th>Bằng Cấp</th>
                <th>Kinh Nghiệm</th>
                <th>Cấp Bậc</th>
                <th>Độ Tuổi Tối Thiểu</th>
                <th>Độ Tuổi Tối Đa</th>
                <th>Yêu Cầu Giới Tính</th>
                <th>Số Lượng Tuyển</th>
                <th>Thời Hạn Thử Việc</th>
                <th>Hạn Nộp Hồ Sơ</th>
                <th>Lương Tối Thiểu</th>
                <th>Lương Tối Đa</th>
                <th>Dịch Vụ</th>
                <th>Tình Trạng Tin</th>
                <th>Trạng Thái</th>
                <th>Kiểm duyệt</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Kiểm tra và hiển thị dữ liệu
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["ten_cong_ty"] . "</td>";
                    echo "<td>" . $row["chuc_danh"] . "</td>";
                    echo "<td>" . $row["nghe_nghiep"] . "</td>";
                    echo "<td>" . $row["hinh_thuc_lam_viec"] . "</td>";
                    echo "<td>" . $row["bang_cap"] . "</td>";
                    echo "<td>" . $row["kinh_nghiem"] . "</td>";
                    echo "<td>" . $row["cap_bac"] . "</td>";
                    echo "<td>" . $row["do_tuoi_toi_thieu"] . "</td>";
                    echo "<td>" . $row["do_tuoi_toi_da"] . "</td>";
                    echo "<td>" . $row["yeu_cau_gioi_tinh"] . "</td>";
                    echo "<td>" . $row["so_luong_tuyen"] . "</td>";
                    echo "<td>" . $row["thoi_han_thu_viec"] . "</td>";
                    echo "<td>" . $row["han_nop_ho_so"] . "</td>";
                    echo "<td>" . $row["luong_toi_thieu"] . "</td>";
                    echo "<td>" . $row["luong_toi_da"] . "</td>";
                    echo "<td>" . $row["dich_vu"] . "</td>";
                    echo "<td>" . $row["tinh_trang_tin"] . "</td>";
                    echo "<td>" . $row["trang thai"] . "</td>";
                    echo "<td><button class='approve-btn'>Duyệt</button></td>";
                    echo "</tr>";
                }
            } else {
                echo "Không có dữ liệu";
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>
