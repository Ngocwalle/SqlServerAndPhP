<?php
		include('modules/config.php');
		if(isset($_POST['login'])) {
			$username=$_POST['username'];
			$password=$_POST['password'];
			$sql="SELECT * FROM [dbo].[admin] WHERE username='$username' and password='$password'";
			$params = array();
			$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
			$row=sqlsrv_query($conn,$sql,$params,$options);
			$count=sqlsrv_num_rows($row);
			if($count > 0 )
			{
				$_SESSION['username']=$username;
				$_SESSION['password']=$password;
		echo "<script language='javascript'>";
		echo "location.href='welcome.php';</script>";
		}
		else
		{
		echo "<script language='javascript'>alert('Đăng nhập thất bạn, Yêu cầu bạn nhập đúng thông tin tài khoản và mật khẩu');";
		echo "location.href='login.php';</script>";
		}
		}
		?>