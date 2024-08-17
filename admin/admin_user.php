<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Quản lý Người Tìm Việc</title>

<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.container {
    width: 80%;
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
    <h2>Quản lý User</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Họ và Tên</th>
                <th>Email</th>
                <th>Ngày Đăng Ký</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Nguyễn Văn A</td>
                <td>example1@example.com</td>
                <td>2024-05-20</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Trần Thị B</td>
                <td>example2@example.com</td>
                <td>2024-05-21</td>
            </tr>
            <!-- Thêm các hàng dữ liệu khác nếu cần -->
        </tbody>
    </table>
</div>

</body>
</html>
