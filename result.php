<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "db.php";

/* รับค่าจากฟอร์ม */
$name = $_POST['patient_name'] ?? '-';
$gender = $_POST['gender'] ?? '-';
$phone = $_POST['phone'] ?? '-';

$age = $_POST['Age'] ?? 0;
$diabetes = $_POST['Diabetes'] ?? 0;
$bp = $_POST['Hypertension'] ?? 0;
$protein = $_POST['Protein_in_Urine'] ?? 0;
$water = $_POST['Water_Intake'] ?? 0;
$urine = $_POST['Urine_Output'] ?? 0;

/* วิเคราะห์ความเสี่ยง */
$score = 0;

if($age > 60) $score++;
if($diabetes == 1) $score++;
if($bp == 1) $score++;
if($protein == 1) $score++;

$riskPercent = ($score / 4) * 100;

/* กำหนดผลลัพธ์ + สี */
if($riskPercent >= 50){
    $result = "มีความเสี่ยงโรคไต";
    $riskClass = "risk";
    $color = "#e63946";
}else{
    $result = "อยู่ในเกณฑ์ปกติ";
    $riskClass = "normal";
    $color = "#2a9d8f";
}

/* บันทึกข้อมูล */
$sql = "INSERT INTO patients
(patient_name, gender, phone, age, diabetes, hypertension, protein_urine, water_intake, urine_output, result)
VALUES
('$name','$gender','$phone','$age','$diabetes','$bp','$protein','$water','$urine','$result')";

$conn->query($sql);
?>

<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ผลการวิเคราะห์</title>

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

/* Hero */
.hero{
    background:linear-gradient(to right,#e3f2fd,#ffffff);
    padding:60px;
    text-align:center;
}

.hero h1{
    color:#023e8a;
}

/* Container */
.container{
    max-width:800px;
    margin:auto;
    margin-top:-40px;
    padding:20px;
}

.card{
    background:white;
    padding:30px;
    border-radius:14px;
    box-shadow:0 5px 20px rgba(0,0,0,0.08);
    margin-bottom:20px;
}

/* Result */
.result{
    font-size:22px;
    font-weight:600;
    margin-top:15px;
}

.normal{ color:#2a9d8f; }
.risk{ color:#e63946; }

/* Progress Bar */
.progress{
    background:#eee;
    border-radius:30px;
    overflow:hidden;
    height:25px;
    margin-top:10px;
}

.bar{
    height:100%;
    color:white;
    line-height:25px;
    transition:1s;
}

/* Button */
.btn{
    display:inline-block;
    margin-top:20px;
    padding:12px 25px;
    background:#0077b6;
    color:white;
    text-decoration:none;
    border-radius:8px;
}

.btn:hover{
    background:#023e8a;
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

<div class="header">
    <div class="logo">Kidney Care System</div>
    <div class="nav">
        <a href="index.php">หน้าหลัก</a>
        <a href="analyze.php">ตรวจใหม่</a>
        <a href="dashboard.php">Dashboard แพทย์</a>
    </div>
</div>

<div class="hero">
    <h1>ผลการวิเคราะห์สุขภาพ</h1>
</div>

<div class="container">

<!-- ข้อมูลผู้ป่วย -->
<div class="card">
<h3>ข้อมูลผู้ป่วย</h3>

<p><b>ชื่อ :</b> <?= $name ?></p>
<p><b>เพศ :</b> <?= $gender ?></p>
<p><b>เบอร์โทร :</b> <?= $phone ?></p>
<p><b>อายุ :</b> <?= $age ?> ปี</p>
</div>

<!-- ผลวิเคราะห์ -->
<div class="card">

<h3>ผลการประเมิน</h3>

<p class="result <?= $riskClass ?>">
<?= $result ?>
</p>

<p>ระดับความเสี่ยง : <?= number_format($riskPercent,2) ?>%</p>

<div class="progress">
<div class="bar"
style="width: <?= $riskPercent ?>%; background: <?= $color ?>;">
<?= number_format($riskPercent,0) ?>%
</div>
</div>

<canvas id="riskChart"></canvas>

<a href="analyze.php" class="btn">ตรวจใหม่อีกครั้ง</a>

</div>
</div>

<div class="footer">
© 2026 Kidney Care System | ระบบคัดกรองสุขภาพเบื้องต้น
</div>

<script>
new Chart(document.getElementById('riskChart'), {
type:'doughnut',
data:{
labels:['ความเสี่ยง','ปกติ'],
datasets:[{
data:[<?= $riskPercent ?>, <?= 100-$riskPercent ?>],
backgroundColor:['<?= $color ?>','#e9ecef']
}]
}
});
</script>

</body>
</html>
