<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Quản Lý Hồ Sơ Bảo Hiểm</title>
<style>
  body { font-family: Arial, sans-serif; }
  .profile-section { background-color: #f4f4f9; padding: 20px; margin-bottom: 10px; }
  .profile-section h2 { color: #5d5c61; }
  .profile-section p { color: #6c757d; }
  .profile-button { background-color: #6f42c1; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; }
</style>
</head>
<body>

<div class="profile-section">
  <h2>Hồ sơ của bạn</h2>
  <p>Hồ sơ trực tuyến</p>
  <button class="profile-button" onclick="createOnlineProfile()">Tạo hồ sơ trực tuyến</button>
</div>

<div class="profile-section">
  <h2>Hồ sơ của bạn</h2>
  <p>Hồ sơ đính kèm</p>
  <button class="profile-button" onclick="createAttachedProfile()">Tạo hồ sơ đính kèm</button>
</div>

<script>
function createOnlineProfile() {
  // JavaScript để xử lý tạo hồ sơ trực tuyến
  alert('Tạo hồ sơ trực tuyến');
}

function createAttachedProfile() {
  // JavaScript để xử lý tạo hồ sơ đính kèm
  alert('Tạo hồ sơ đính kèm');
}
</script>

</body>
</html>
