<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ตรวจสุขภาพโรคไต</title>

<link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;600&display=swap" rel="stylesheet">

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
    max-width:750px;
    margin:auto;
    margin-top:-40px;
    padding:20px;
}

.form-card{
    background:white;
    padding:35px;
    border-radius:14px;
    box-shadow:0 5px 20px rgba(0,0,0,0.08);
}

/* Form */
label{
    font-weight:600;
    margin-top:15px;
    display:block;
}

small{
    color:#777;
}

input, select{
    width:100%;
    padding:12px;
    margin-top:5px;
    border-radius:8px;
    border:1px solid #ccc;
    font-size:15px;
}

/* Button */
button{
    width:100%;
    margin-top:25px;
    padding:14px;
    background:#0077b6;
    border:none;
    color:white;
    font-size:18px;
    border-radius:8px;
    cursor:pointer;
    transition:0.3s;
}

button:hover{
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

<!-- Header -->
<div class="header">
    <div class="logo">Kidney Care System</div>
    <div class="nav">
        <a href="index.php">หน้าหลัก</a>
        <a href="about.php">เกี่ยวกับระบบ</a>
        <a href="dashboard.php">Dashboard แพทย์</a>
    </div>
</div>

<!-- Hero -->
<div class="hero">
    <h1>แบบประเมินความเสี่ยงโรคไต</h1>
    <p>กรอกข้อมูลสุขภาพเพื่อวิเคราะห์ความเสี่ยงเบื้องต้น</p>
</div>

<!-- Form -->
<div class="container">

<div class="form-card">

<form action="result.php" method="POST">

<h3>ข้อมูลผู้ป่วย</h3>

<label>ชื่อ - นามสกุล</label>
<input type="text" name="patient_name" required>

<label>เพศ</label>
<select name="gender" required>
<option value="ชาย">ชาย</option>
<option value="หญิง">หญิง</option>
</select>

<label>เบอร์โทรศัพท์</label>
<input type="text" name="phone" required>

<hr>

<h3>ข้อมูลสุขภาพ</h3>

<label>อายุ</label>
<input type="number" name="Age" required>
<small>กรอกอายุเป็นปี เช่น 45</small>

<label>โรคเบาหวาน</label>
<select name="Diabetes">
<option value="0">ไม่มี</option>
<option value="1">มี</option>
</select>

<label>ความดันโลหิตสูง</label>
<select name="Hypertension">
<option value="0">ไม่มี</option>
<option value="1">มี</option>
</select>

<label>โปรตีนในปัสสาวะ</label>
<select name="Protein_in_Urine">
<option value="0">ปกติ</option>
<option value="1">ผิดปกติ</option>
</select>

<label>ปริมาณน้ำที่ดื่มต่อวัน (ลิตร)</label>
<input type="number" step="0.1" name="Water_Intake">
<small>ค่าเฉลี่ย 1.5 - 2.5 ลิตร</small>

<label>ปริมาณปัสสาวะต่อวัน (ml)</label>
<input type="number" name="Urine_Output">
<small>ค่าเฉลี่ย 800 - 2000 ml</small>

<button type="submit">วิเคราะห์ผลสุขภาพ</button>

</form>

</div>
</div>

<div class="footer">
© 2026 Kidney Care System | ระบบคัดกรองสุขภาพเบื้องต้น
</div>

</body>
</html>
