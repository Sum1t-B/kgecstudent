<?php
include('../php/connection.php');
$query="SELECT * FROM `admin`";
$res=mysqli_query($conn,$query);

$query1="SELECT * FROM `notice`";
$res1=mysqli_query($conn,$query1);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Super User</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-md-10">
		<h1>Admins:</h1>            
  <table class="table table-hover">
    <thead>
    	
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Number</th>
        <th>Dept</th>
        <th>Pass</th>
        <th>Time</th>
        <th>Delete</th>
      </tr>
  
    </thead>
    <tbody>
    	<?php while($row=mysqli_fetch_array($res)) 
    	{
    	?>
      <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['number']; ?></td>
        <td><?php echo $row['dept']; ?></td>
        <td><?php echo $row['pass']; ?></td>
        <td><?php echo $row['time']; ?></td>
        <td><a href="supersudelusr.php?id=<?php echo $row['id']; ?>"><button class="btn btn-success">Delete</button></a></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
  </div>
	</div>
<br><br>
<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-md-10">
		<h1>Notices:</h1>            
  <table class="table table-hover">
    <thead>
    	
      <tr>
        <th>Id</th>
        <th>Type</th>
        <th>Tag</th>
        <th>Date</th>
        <th>Content</th>
        <th>Dept</th>
        <th>Time</th>
        <th>Delete</th>
      </tr>
  
    </thead>
    <tbody>
    	<?php while($row1=mysqli_fetch_array($res1)) 
    	{
    	?>
      <tr>
        <td><?php echo $row1['id']; ?></td>
        <td><?php echo $row1['type']; ?></td>
        <td><?php echo $row1['tag']; ?></td>
        <td><?php echo $row1['date']; ?></td>
        <td><?php echo $row1['content']; ?></td>
        <td><?php echo $row1['dept']; ?></td>
        <td><?php echo $row1['time']; ?></td>
        <td><a href="supersudelnot.php?id=<?php echo $row1['id']; ?>"><button class="btn btn-success">Delete</button></a></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
  </div>
	</div>
</body>
</html>