<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>เกี่ยวกับระบบ</title>

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
    font-weight:500;
}

/* Hero */
.hero{
    background:linear-gradient(to right,#e3f2fd,#ffffff);
    padding:70px 60px;
    text-align:center;
}

.hero h1{
    color:#023e8a;
    font-size:34px;
}

/* Content */
.container{
    max-width:1000px;
    margin:auto;
    padding:40px 20px;
}

.card{
    background:white;
    padding:30px;
    margin-bottom:25px;
    border-radius:12px;
    box-shadow:0 4px 15px rgba(0,0,0,0.08);
}

.card h2{
    color:#023e8a;
    margin-bottom:15px;
}

.card p{
    line-height:1.8;
    color:#555;
}

/* Footer */
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
        <a href="index.php">หน้าหลัก</a>
        <a href="about.php">เกี่ยวกับระบบ</a>
        <a href="analyze.php">ตรวจสุขภาพ</a>
    </div>
</div>

<!-- Hero -->
<div class="hero">
    <h1>เกี่ยวกับระบบตรวจคัดกรองโรคไต</h1>
</div>

<!-- Content -->
<div class="container">

    <div class="card">
        <h2>วัตถุประสงค์ของระบบ</h2>
        <p>
        ระบบตรวจคัดกรองความเสี่ยงโรคไตถูกพัฒนาขึ้นเพื่อใช้เป็นเครื่องมือช่วยประเมินความเสี่ยงโรคไตเบื้องต้น 
        โดยอาศัยเทคโนโลยี Machine Learning ในการวิเคราะห์ข้อมูลสุขภาพของผู้ใช้งาน 
        เพื่อช่วยให้ประชาชนสามารถตระหนักและดูแลสุขภาพของตนเองได้อย่างเหมาะสม
        </p>
    </div>

    <div class="card">
        <h2>เทคโนโลยีที่ใช้</h2>
        <p>
        ระบบใช้เทคนิคการวิเคราะห์ข้อมูลด้วย Machine Learning 
        ซึ่งอ้างอิงจากชุดข้อมูลทางการแพทย์ (Medical Dataset) 
        ผ่านกระบวนการประมวลผลตามหลักวิชาการ 
        เพื่อประเมินระดับความเสี่ยงของผู้ใช้งานอย่างมีประสิทธิภาพ
        </p>
    </div>

    <div class="card">
        <h2>ข้อจำกัดของระบบ</h2>
        <p>
        ผลลัพธ์จากระบบเป็นเพียงการประเมินความเสี่ยงเบื้องต้นเท่านั้น 
        ไม่สามารถใช้แทนการวินิจฉัยโรคจากแพทย์ผู้เชี่ยวชาญได้ 
        ผู้ใช้งานควรเข้ารับการตรวจสุขภาพเพิ่มเติมกับสถานพยาบาล 
        หากพบว่ามีความเสี่ยงหรือมีอาการผิดปกติ
        </p>
    </div>

    <div class="card">
        <h2>ความปลอดภัยของข้อมูล</h2>
        <p>
        ระบบให้ความสำคัญกับความปลอดภัยและความเป็นส่วนตัวของข้อมูลผู้ใช้งาน 
        ข้อมูลทั้งหมดจะถูกนำไปใช้เพื่อการวิเคราะห์และพัฒนาระบบเท่านั้น 
        โดยไม่มีการเปิดเผยข้อมูลส่วนบุคคลโดยไม่ได้รับอนุญาต
        </p>
    </div>

</div>

<!-- Footer -->
<div class="footer">
    © 2026 Kidney Care System | ระบบคัดกรองสุขภาพเบื้องต้น
</div>

</body>
</html>
