<?php
include "db.php";

/* นับจำนวนผู้ป่วย */
$total = $conn->query("SELECT COUNT(*) as total FROM patients")->fetch_assoc()['total'];

/* นับเสี่ยง */
$risk = $conn->query("SELECT COUNT(*) as risk FROM patients WHERE result='มีความเสี่ยงโรคไต'")->fetch_assoc()['risk'];

/* นับปกติ */
$normal = $conn->query("SELECT COUNT(*) as normal FROM patients WHERE result='อยู่ในเกณฑ์ปกติ'")->fetch_assoc()['normal'];

/* ดึงรายชื่อผู้ป่วยล่าสุด */
$patients = $conn->query("SELECT * FROM patients ORDER BY id DESC LIMIT 10");
?>

<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard แพทย์</title>

<link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;600&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>

body{
    margin:0;
    font-family:'Sarabun', sans-serif;
    background:#f5f9ff;
}

/* Header */
.header{
    background:white;
    padding:15px 60px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    box-shadow:0 2px 10px rgba(0,0,0,0.05);
}

.logo{
    font-size:22px;
    font-weight:600;
    color:#0077b6;
}

.nav a{
    margin-left:25px;
    text-decoration:none;
    color:#333;
}

/* Container */
.container{
    max-width:1100px;
    margin:auto;
    padding:30px;
}

/* Cards */
.cards{
    display:flex;
    gap:20px;
    margin-bottom:30px;
}

.card{
    flex:1;
    background:white;
    padding:25px;
    border-radius:14px;
    box-shadow:0 5px 20px rgba(0,0,0,0.08);
    text-align:center;
}

.card h2{
    margin:10px 0;
    color:#023e8a;
}

/* Table */
table{
    width:100%;
    border-collapse:collapse;
    background:white;
    border-radius:12px;
    overflow:hidden;
    box-shadow:0 5px 20px rgba(0,0,0,0.08);
}

th, td{
    padding:12px;
    text-align:center;
    border-bottom:1px solid #eee;
}

th{
    background:#0077b6;
    color:white;
}

.risk{
    color:red;
    font-weight:600;
}

.normal{
    color:green;
    font-weight:600;
}

/* Footer */
.footer{
    background:#023e8a;
    color:white;
    text-align:center;
    padding:18px;
    margin-top:40px;
}

</style>
</head>

<body>

<!-- Header -->
<div class="header">
    <div class="logo">Kidney Care System</div>
    <div class="nav">
        <a href="index.php">หน้าหลัก</a>
        <a href="analyze.php">ตรวจสุขภาพ</a>
        <a href="dashboard.php">Dashboard แพทย์</a>
    </div>
</div>

<div class="container">

<h2>Dashboard สรุปข้อมูลผู้ป่วย</h2>

<!-- Summary Cards -->
<div class="cards">

<div class="card">
    <h3>จำนวนผู้ตรวจทั้งหมด</h3>
    <h2><?= $total ?> คน</h2>
</div>

<div class="card">
    <h3>กลุ่มเสี่ยงโรคไต</h3>
    <h2 style="color:red"><?= $risk ?> คน</h2>
</div>

<div class="card">
    <h3>กลุ่มปกติ</h3>
    <h2 style="color:green"><?= $normal ?> คน</h2>
</div>

</div>

<!-- Chart -->
<div class="card">
<h3>สัดส่วนความเสี่ยง</h3>
<canvas id="riskChart"></canvas>
</div>

<br>

<!-- ตารางผู้ป่วย -->
<h3>รายชื่อผู้ป่วยล่าสุด</h3>

<table>
<tr>
<th>ชื่อ</th>
<th>เพศ</th>
<th>อายุ</th>
<th>ผลวิเคราะห์</th>
</tr>

<?php while($row = $patients->fetch_assoc()){ ?>
<tr>
<td><?= $row['patient_name'] ?></td>
<td><?= $row['gender'] ?></td>
<td><?= $row['age'] ?></td>
<td class="<?= ($row['result']=='มีความเสี่ยงโรคไต') ? 'risk':'normal' ?>">
<?= $row['result'] ?>
</td>
</tr>
<?php } ?>

</table>

</div>

<div class="footer">
© 2026 Kidney Care System | Dashboard แพทย์
</div>

<script>
new Chart(document.getElementById('riskChart'), {
type:'pie',
data:{
labels:['เสี่ยงโรคไต','ปกติ'],
datasets:[{
data:[<?= $risk ?>, <?= $normal ?>]
}]
}
});
</script>

</body>
</html>
