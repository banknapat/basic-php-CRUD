<?php
include'condb.php';
echo '<pre>';
print_r($_POST);
echo '</pre>';

// ประกาศตัวแปรรับค่าจาก form
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

// insert into table
    $sql = "INSERT INTO tbl_member
    (username, password, name, phone, email)
    VALUES
    ('$username', '$password', '$name', '$phone', '$email')
    ";

    $result = mysqli_query($condb, $sql) or die("Error in sql : $sql". mysqli_error($sql));

    // ปิดการใช้งาน เมื่อทำงานเสร็จ
    mysqli_close($condb);

    if($result){
        echo 'Insert Successfully';
    }else{
        echo 'Error !!!';
    }
?>