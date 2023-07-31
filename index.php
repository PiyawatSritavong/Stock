<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="App">
        <div class="App-header">
            <div class="container">
                <form action="service.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="product" value="add">
                    <h2>STORE</h2>
                    <div class="content">
                        <div class="box-content">
                            <label for="p_name">ชื่อ</label>
                            <input type="text" name="p_name" placeholder="Enter name" required />
                        </div>

                        <div class="box-content">
                            <label for="p_detail">รายละเอียด</label>
                            <input type="text" name="p_detail" placeholder="Enter details" required />
                        </div>

                        <div class="box-content">
                            <label for="p_price">ราคา</label>
                            <input type="number" name="p_price" placeholder="Enter price" required />
                        </div>

                        <div class="box-content">
                            <label for="p_qty">จำนวน</label>
                            <input type="number" name="p_qty" placeholder="Enter qty" required />
                        </div>

                        <div class="box-content">
                            <label for="barcode">บารโค๊ด</label>
                            <input type="number" name="barcode" placeholder="Enter barcode" required />
                        </div>
                    </div>
                    <input type="submit" name="submit" value="submit" class="formbold-btn" />
                </form>
            </div>
        </div>
    </div>

    <?php if (isset($_GET['product_add'])) { ?>
        <script>
            alert("บันทึกข้อมูลสำเร็จ");
        </script>
    <?php } ?>

    <?php if (isset($_GET['product_no'])) { ?>
        <script>
            alert("ไม่สามารถเข้าถึงได้");
        </script>
    <?php } ?>

</body>

</html>