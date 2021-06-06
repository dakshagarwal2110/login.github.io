<?php
$username="root";
$password="";
$server='localhost';
$db = 'dakshaa';
$con = mysqli_connect($server,$username,$password,$db);
if($con){
	?>
	<script>
		alert("connected");
	</script>
	<?php
}else{
	?>
	<script>
		alert("no connection");
	</script>
	<?php
}
?>