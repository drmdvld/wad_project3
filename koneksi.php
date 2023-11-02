<?php
//koneksi database
$conn = mysqli_connect("localhost","root","","wad_project3");

//ambil data dari tabel database
$result = mysqli_query($conn,"SELECT * FROM students");
?>