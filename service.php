<?php
include('./db.php');

if (isset($_POST['product']) && $_POST['product'] == "add") {

    $p_name = mysqli_real_escape_string($condb, $_POST["p_name"]);
    $p_detail = mysqli_real_escape_string($condb, $_POST["p_detail"]);
    $p_price = mysqli_real_escape_string($condb, $_POST["p_price"]);
    $p_qty = mysqli_real_escape_string($condb, $_POST["p_qty"]);
    $barcode = mysqli_real_escape_string($condb, $_POST["barcode"]);

    $sql = "INSERT INTO tbl_product	VALUES('','$p_name','$p_detail','$p_price','$p_qty','$barcode',now())";

    $result = mysqli_query($condb, $sql) or die("Error in query: $sql " . mysqli_error($condb) . "<br>$sql");

    //exit();
    //mysqli_close($condb);

    if ($result) {
        echo "<script type='text/javascript'>";
        //echo "alert('เพิ่มข้อมูลเรียบร้อย');";
        echo "window.location = 'index.php?product_add=product_add'; ";
        echo "</script>";
    } else {
        echo "<script type='text/javascript'>";
        echo "window.location = 'index.php?product_no=product_no'; ";
        echo "</script>";
    }
}


?>