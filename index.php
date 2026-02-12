<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ระบบตรวจความเสี่ยงโรคไต</title>

<link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;600&display=swap" rel="stylesheet">

<style>

body{
    margin:0;
    font-family: 'Sarabun', sans-serif;
    background:#f5f9ff;
}

/* ===== Header ===== */
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
    font-weight:500;
}

/* ===== Hero ===== */
.hero{
    display:flex;
    align-items:center;
    justify-content:space-between;
    padding:80px 60px;
    background:linear-gradient(to right,#e3f2fd,#ffffff);
}

.hero-text{
    max-width:500px;
}

.hero-text h1{
    font-size:36px;
    color:#023e8a;
}

.hero-text p{
    font-size:18px;
    color:#555;
    margin-top:15px;
    line-height:1.6;
}

/* ===== Button ===== */
.btn{
    display:inline-block;
    margin-top:25px;
    padding:14px 28px;
    background:#0077b6;
    color:white;
    border-radius:8px;
    text-decoration:none;
    font-size:18px;
    transition:0.3s;
}

.btn:hover{
    background:#023e8a;
}

/* ===== Hero Image ===== */
.hero img{
    width:420px;
}

/* ===== Feature ===== */
.features{
    padding:60px;
    text-align:center;
}

.features h2{
    color:#023e8a;
    margin-bottom:40px;
}

.feature-box{
    display:flex;
    justify-content:center;
    gap:30px;
}

.card{
    background:white;
    padding:25px;
    width:250px;
    border-radius:12px;
    box-shadow:0 4px 15px rgba(0,0,0,0.08);
}

/* ===== Footer ===== */
.footer{
    background:#023e8a;
    color:white;
    text-align:center;
    padding:20px;
    margin-top:40px;
}

</style>
</head>

<body>

<!-- Header -->
<div class="header">
    <div class="logo">Kidney Care System</div>
    <div class="nav">
        <a href="#">หน้าหลัก</a>
        <a href="about.php">เกี่ยวกับระบบ</a>
        <a href="analyze.php">ตรวจสุขภาพ</a>
    </div>
</div>

<!-- Hero -->
<div class="hero">
    
    <div class="hero-text">
        <h1>ระบบตรวจความเสี่ยงโรคไต</h1>

        <p>
        ระบบช่วยประเมินความเสี่ยงโรคไตเบื้องต้น
        ด้วยเทคโนโลยีวิเคราะห์ข้อมูลสุขภาพ
        เพื่อช่วยให้คุณดูแลสุขภาพได้อย่างเหมาะสม
        </p>

        <a href="analyze.php" class="btn">
            เริ่มตรวจสุขภาพ
        </a>
    </div>

    <img src="https://cdn-icons-png.flaticon.com/512/2966/2966485.png">
</div>

<!-- Features -->
<div class="features">

    <h2>จุดเด่นของระบบ</h2>

    <div class="feature-box">

        <div class="card">
            <h3>แม่นยำ</h3>
            <p>ใช้ข้อมูลทางการแพทย์และ AI วิเคราะห์</p>
        </div>

        <div class="card">
            <h3>ใช้งานง่าย</h3>
            <p>กรอกข้อมูลเพียงไม่กี่ขั้นตอน</p>
        </div>

        <div class="card">
            <h3>ปลอดภัย</h3>
            <p>ข้อมูลผู้ใช้ถูกเก็บเป็นความลับ</p>
        </div>

    </div>

</div>

<!-- Footer -->
<div class="footer">
    © 2026 Kidney Care System | ระบบคัดกรองสุขภาพเบื้องต้น
</div>

</body>
</html>
