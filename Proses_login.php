<?php
session_start();
include_once('function/helper.php');
$username = $_POST['ussname'];
$password = $_POST['passwd'];


$query  = mysqli_query($conn,"select *, tb_login.hak_akses as ha from tb_login,mahasiswa where ussname='$username' and passwd=md5('$password') and tb_login.ussname = mahasiswa.NIM");
$cek = mysqli_num_rows($query);
	#cek apakah ada ?
	if($cek > 0)
	{
		$result = mysqli_fetch_array($query);
		
			$_SESSION = array(
				'username' => $result['ussname'],
				'ha' => $result['NAMA_MHS'],
				'stat' => $result['ha']
			);
			header("location: view/mahasiswa/Index.php ");
		
	}elseif($_POST['ussname'] == 'adminmif' and $_POST['passwd']=='adminmif'){
		$_SESSION = array(
				'username' => $_POST['ussname'],
				'ha' => 'Admin_MIF',
				'stat' => '1'
			);
			header("location: view/admin/Index.php ");
	}elseif($_POST['ussname'] == 'admintkk' and $_POST['passwd']=='admintkk'){
		$_SESSION = array(
				'username' => $_POST['ussname'],
				'ha' => 'Admin_TKK',
				'stat' => '2'
			);
			header("location: view/admin/Index.php ");
	}elseif($_POST['ussname'] == 'admintif' and $_POST['passwd']=='admintif'){
		$_SESSION = array(
				'username' => $_POST['ussname'],
				'ha' => 'Admin_TIF',
				'stat' => '3'
			);
			header("location: view/admin/Index.php ");
	}elseif($_POST['ussname'] == 'koordi' and $_POST['passwd']=='koordi'){
		$_SESSION = array(
				'username' => $_POST['ussname'],
				'ha' => 'koordinator',
				'stat' => '0'
			);
			header("location: view/koordinator/Index.php ");
	}else{
		var_dump($result);
		echo '<script>alert("ZONK!");window.location.href="Login.php"</script>';
		#header("location: login.php ");
	}
?>
