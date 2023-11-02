<?php
	//koneksi database
	$conn = mysqli_connect("localhost","root","","wad_project3");

	//ambil data dari tabel database
	$result = mysqli_query($conn,"SELECT * FROM students");

	//$data = mysqli_fetch_object($result);

?>

<!DOCTYPE html>
<html>
<head>
    <h1>Halaman index data</h1>
</head>
<body>
    <table border = 1>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>nim</th>
                <th>address</th>
            </tr>
        </thead>
        <tbody>
        	<?php while ($data = mysqli_fetch_object($result) )  {
        		?>
            <tr>
                <td><?php echo $data->id; ?></td>
                <td><?php echo $data->name; ?></td>
                <td><?php echo $data->nim; ?></td>
                <td><?php echo $data->address; ?></td>
            </tr>
        	<?php } ?>
        </tbody>
    </table>
</body>
</html>