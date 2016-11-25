<?PHP
include('koneksi.php');
$username=$_POST['username'];
$password=$_POST['password'];

$sql="insert into user Values
		('$username','$password')";
		$input=mysql_query($sql);
		if($input)
		{
		
?>
<script type="text/javascript">
alert('Data berhasil ditambahkan');
location.href="Halaman_Member.php";
</script>
<?php
} else
{
?>
<script type="text/javascript">
alert('Data gagal ditambahkan');
location.href="ACT_TAMBAHlogin.php";
</script>
<?php
}
?>