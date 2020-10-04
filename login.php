<html>

<?php
extract($_POST);
echo 'trying to login as '.$uname.'<br>';
$db = mysqli_connect('localhost:3306','Dpk','dpksam@123','doggodopt'); //change localhost to localhost:3306 and the respective fields
if(isset($db)){

//	mysql_select_db('test');
	$stmt = "SELECT * FROM signed_up_users where userName='".$uname."'and password='".$pwd."'"; //change this according to your database
	//echo $stmt;
	$res=mysqli_query($db,$stmt);
//	print_r($res);
	if(mysqli_num_rows($res)>0){

		session_start();
		$_SESSION['uname'] = $uname;
		echo "Welcome $uname!"."<br/>";
		echo "<br/>"."Go to <a href='index.html'>Home page</a>";
		/*
		$arr = mysqli_fetch_array($res,MYSQLI_ASSOC);
		$item[1] = new Item();
		$item[1]->name = $arr["name"];
		*/
	}
	else{

		echo "Want to sign up?<a href='signup.html'>Yes</a>
		<a href='/WT/index.html'>No</a>";
	}
}
?>
</html>
