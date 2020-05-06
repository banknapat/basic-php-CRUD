<?php
include'condb.php';
// echo '<pre>';
// print_r($_GET);
// echo '</pre>';
//exit;

// ประกาศตัวแปรรับค่าจาก form
    $id = $_GET['id'];

// ลบข้อมูล
    $sql = "DELETE FROM tbl_member WHERE id = $id";

    $result = mysqli_query($condb, $sql) or die("Error in sql : $sql". mysqli_error($sql));

    // ปิดการใช้งาน เมื่อทำงานเสร็จ
    mysqli_close($condb);

    if($result){
        echo "<script type='text/javascript'>";
            echo "alert('Delete Successfully');";
            echo "window.location='member_list.php';";
        echo "</script>";
    }else {
        echo "<script type='text/javascript'>";
            echo "alert('Error !!!');";
            echo "window.location='member_list.php';";
        echo "</script>";
    }
?>