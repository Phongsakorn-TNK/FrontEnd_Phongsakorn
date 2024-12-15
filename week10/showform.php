<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>แบบบฟอร์มสมัครงาน</title>
    </head>
    <body style="background-color: rgb(231, 255, 150);">
            <h1>เข้าสู่ระบบแล้ว</h1>
            <h2>ชื่อ-นามสกุล: <?php echo $_GET["name"]; ?></h2><br>
            <h2>เพศ: <?php echo $_GET["sex"]; ?></h2><br>
            <h2>โปรแกรมที่ถนัด: <?php foreach($_GET["program"] as $program){
                echo ($program)," ";} ?></h2><br>
            <h2>อีเมล: <?php echo $_GET["email"]; ?></h2><br>
            <h2>เบอร์โทรศัพท์: <?php echo $_GET["telephone"]; ?></h2><br>
            <h2>ตำแหน่งที่ต้องการสมัคร: <?php echo $_GET["position"]; ?></h2><br>
            <h2>ข้อความเพิ่มเติม: <?php echo $_GET["moreinfo"]; ?></h2><br>
    </body>
</html>