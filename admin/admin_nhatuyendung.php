<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Quản lý Nhà Tuyển Dụng</title>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.container {
    width: 90%;
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

    </style>
</head>
<body>

<div class="container">
    <h2>Quản lý Nhà Tuyển Dụng</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Họ và Tên</th>
                <th>Email</th>
                <th>Ngày Đăng Ký</th>
                <th>Số Điện Thoại</th>
                <th>Tên Công Ty</th>
                <th>Mã Số Thuế</th>
                <th>Quy Mô Nhân Sự</th>
                <th>Châu Lục</th>
                <th>Quốc Gia</th>
                <th>Tỉnh/Huyện</th>
                <th>Địa Chỉ</th>
                <th>Lĩnh Vực</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Nguyễn Văn A</td>
                <td>example1@example.com</td>
                <td>2024-05-20</td>
                <td>0123456789</td>
                <td>Công ty A</td>
                <td>1234567890</td>
                <td>100</td>
                <td>Châu Á</td>
                <td>Việt Nam</td>
                <td>Hà Nội</td>
                <td>123 Đường ABC, Quận XYZ, Hà Nội</td>
                <td>IT</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Trần Thị B</td>
                <td>example2@example.com</td>
                <td>2024-05-21</td>
                <td>0987654321</td>
                <td>Công ty B</td>
                <td>0987654321</td>
                <td>50</td>
                <td>Châu Âu</td>
                <td>Pháp</td>
                <td>Paris</td>
                <td>456 Đường XYZ, Quận ABC, Paris</td>
                <td>Finance</td>
            </tr>
            <!-- Thêm các hàng dữ liệu khác nếu cần -->
        </tbody>
    </table>
</div>

</body>
</html>
