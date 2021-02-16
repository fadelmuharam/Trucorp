<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trucorp</title>
</head>
<body>
    Trucorp Data
    <br>
    
    <?php 
    $count = 0;
    $con=mysqli_connect('172.18.0.2','root','root','trucorp');
    $query="SELECT * FROM Users";
    $result=$con->query($query);
    while($data=$result->fetch_assoc()){
    ?>
        <br>
        ID      = <?php echo $data['ID']?>
	<br>
	Nama    = <?php echo $data['Nama']?>
	<br>
	Kantor  = <?php echo $data['Kantor']?>
	<br>

    <?php
    $count++;
    }
    ?>
	<h1>JUMLAH USER = <?php echo $count?> </h1>
	new update
</body>
</html>
