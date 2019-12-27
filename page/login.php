<form action="" method="post">
	<input type="text" name="u_name"><br>
	<input type="password" name="psw"><br>
	<input type="submit" name="send">
</form>

<?
	if($_POST['send']){
		$user = $_POST['u_name'];
		$psw = $_POST['psw'];

		$user_s = mysqli_query($con, "select * from user where user_name='$user' and pass='$psw'");

			$say = mysqli_num_rows($user_s);
        if($say==1){
          $row = mysqli_fetch_array($user_s);
          

          $_SESSION['user']=$user;

           header('location:index.php');
        }else{
      
          header('location:index.php?page=login');
		
	}
}
?>
