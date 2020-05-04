<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
    include 'condb.php';
    // รับไอดีที่ส่งมาจาก url
    $id = $_GET['id'];
    //echo $id;
    // query ข้อมูลตัวที่เราจะแก้ไข
    $query = "SELECT * FROM tbl_member WHERE id=$id";
    $result = mysqli_query($condb, $query) or die("Error in sql : $query". mysqli_error($query));
    // เรียกข้อมูลที่จะแก้ไขใน database มาเก็บไว้ใน array
    $row = mysqli_fetch_array($result);
    //print_r($row);
    ?>

<h1>แก้ไขข้อมูลสมาชิก ID <?php echo $row['id'];?></h1>
    <form action="member_form_edit_db.php" method="post">
        id : 
        <input type="number" name="id" value="<?php echo $row['id'];?>" readonly>
        <br>
        ชื่อผู้ใช้
        <input type="text" name="username" placeholder="กรุณาระบุชื่อผู้ใช้" required value="<?php echo $row['username'];?>">
        <br>
        รหัสผ่าน
        <input type="password" name="password" placeholder="กรุณาระบุรหัสผ่าน" required value="<?php echo $row['password'];?>">
        <br>
        ชื่อ-นามสกุล
        <input type="text" name="name" placeholder="กรุณาระบุชื่อ-นามสกุล" required value="<?php echo $row['name'];?>">
        <br>
        เบอร์โทรศัพท์
        <input type="text" name="phone" placeholder="กรุณาระบุเบอร์โทรศัพท์" required value="<?php echo $row['phone'];?>">
        <br>
        อีเมล
        <input type="email" name="email" placeholder="กรุณาระบุอีเมล" required value="<?php echo $row['email'];?>">
        <br>
        <button type="submit"> บันทึก </button>
    </form>
</body>
</html>