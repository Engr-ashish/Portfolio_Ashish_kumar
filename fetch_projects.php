<?php
$conn = new mysqli("localhost","root","","portfolio");
$res = $conn->query("SELECT * FROM projects");
$data = [];
while($row = $res->fetch_assoc()) $data[] = $row;
echo json_encode($data);
