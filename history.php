<?php
include "db.php";

$result = $conn->query("SELECT * FROM patients ORDER BY id DESC");
?>

<h2>ประวัติการตรวจ</h2>

<table border="1">
<tr>
<th>ชื่อ</th>
<th>อายุ</th>
<th>ผลตรวจ</th>
<th>วันที่</th>
</tr>

<?php while($row = $result->fetch_assoc()) { ?>

<tr>
<td><?= $row['patient_name'] ?></td>
<td><?= $row['age'] ?></td>
<td><?= $row['result'] ?></td>
<td><?= $row['created_at'] ?></td>
</tr>

<?php } ?>

</table>
