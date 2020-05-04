<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member List</title>
</head>
<body>
<table border="1">
    <caption>List Member  <a href="member_form_add.php">เพิ่มข้อมูล</a></caption>
    <thead>
        <tr>
        <th>ID</th>
        <th>USERNAME</th>
        <th>PASSWORD</th>
        <th>NAME</th>
        <th>PHONE</th>
        <th>EMAIL</th>
        <th>EDIT</th>
        </tr>
    </thead>
    <tbody>
    <?php
    // นำเข้าไฟล์เชื่อมต่อ database
    include 'condb.php';
    // สร้าง query จาก database
    $query = "SELECT * FROM tbl_member";
    // ตรวจสอบการทำงานของ query  และ connect database และเอาข้อมูลเก็บไว้ในตัวแปล
    $result = mysqli_query($condb, $query) or die("Error in sql : $query". mysqli_error($query));
    // เรียกข้อมูลมาแสดง
    foreach ($result as $row){ ?>
        <tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['username'];?></td>
        <td><?php echo $row['password'];?></td>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['phone'];?></td>
        <td><?php echo $row['email'];?></td>
        <!-- ส่งค่า id เพื่อแก้ไข -->
        <td><a href="member_form_edit.php?id=<?php echo $row['id'];?>">Edit</a></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
<?php 
    // ปิดการใช้งาน เมื่อทำงานเสร็จ
    mysqli_close($condb);
?>

</body>
</html>