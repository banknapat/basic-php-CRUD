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

// เช็คข้อมูลซ้ำ
    $query = "SELECT * FROM tbl_member WHERE username = '$username' ";
    // ตรวจสอบการทำงานของ query  และ connect database และเอาข้อมูลเก็บไว้ในตัวแปล
    $result = mysqli_query($condb, $query) or die("Error in sql : $query". mysqli_error($query));
    //echo 'จำนวนข้อมูล ' .mysqli_num_rows($result);
    

    if(mysqli_num_rows($result) > 0) {
        echo "<script type='text/javascript'>";
            echo "alert('Username นี้มีคนใช้แล้ว');";
            echo "window.location='member_form_add.php';";
        echo "</script>";
    }else{
        // insert into table
    $sql = "INSERT INTO tbl_member
    (username, password, name, phone, email)
    VALUES
    ('$username', '$password', '$name', '$phone', '$email')
    ";

    $result = mysqli_query($condb, $sql) or die("Error in sql : $sql". mysqli_error($sql));

    if($result){
        echo "<script type='text/javascript'>";
            echo "alert('Insert Successfully');";
            echo "window.location='member_list.php';";
        echo "</script>";
    }else{
        echo "<script type='text/javascript'>";
            echo "alert('Error !!!');";
            echo "window.location='member_list.php';";
        echo "</script>";
    // ปิดการใช้งาน เมื่อทำงานเสร็จ
    mysqli_close($condb);
    }

    exit();
    }
?>