<?php
include'condb.php';
echo '<pre>';
print_r($_POST);
echo '</pre>';
//exit;
// ประกาศตัวแปรรับค่าจาก form
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $id = $_POST['id'];
// อัพเดทข้อมูลลง database
// UPDATE table_name
// SET column1=value, column2=value2,...
// WHERE some_column=some_value
    $sql = "UPDATE tbl_member SET username='$username',password='$password', name='$name', phone='$phone', email='$email' WHERE id = $id
    ";

    $result = mysqli_query($condb, $sql) or die("Error in sql : $sql". mysqli_error($sql));

    // ปิดการใช้งาน เมื่อทำงานเสร็จ
    mysqli_close($condb);

    if($result){
        echo "<script type='text/javascript'>";
            echo "alert('Update Successfully');";
            echo "window.location='member_list.php';";
        echo "</script>";
    }else {
        echo 'Error !!!';
    }
?>