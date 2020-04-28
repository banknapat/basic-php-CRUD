<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>เพิ่มข้อมูลสมาชิก</h1>
    <form action="member_form_add_db.php" method="post">
        ชื่อผู้ใช้
        <input type="text" name="username" placeholder="กรุณาระบุชื่อผู้ใช้" required>
        <br>
        รหัสผ่าน
        <input type="password" name="password" placeholder="กรุณาระบุรหัสผ่าน" required>
        <br>
        ชื่อ-นามสกุล
        <input type="text" name="name" placeholder="กรุณาระบุชื่อ-นามสกุล" required>
        <br>
        เบอร์โทรศัพท์
        <input type="text" name="phone" placeholder="กรุณาระบุเบอร์โทรศัพท์" required>
        <br>
        อีเมล
        <input type="email" name="email" placeholder="กรุณาระบุอีเมล" required>
        <br>
        <button type="submit"> บันทึก </button>
    </form>
</body>
</html>