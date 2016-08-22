<?php
if(isset($_POST['img'])){
	$img=$_POST['img'];
}else{
	$img="null";
}
?>
<HTML>
<BODY>
	<style type="text/css">
	body{
		font-family: helvetica;
		background-image: url(img/inicio.jpg);
		background-color: #000;
		color: #fff;
	}
	nav {
		display: inline-block;
	}
	
	</style>
<CENTER>
<img src="../img/logoBlanco.png">
<?php
if($img=="null"){
?>	
<form action="imagen.php" method="POST" >	
<table>
<caption>Edad:<caption>


<td>
	
    <select name="img">
	<option value="1">Mayor de 18</option>
	<option value="2">Menor de 18</option>
</select>
</td>
<td><button type="submit" value="Entrar" >Entrar</button></td>
</table>
</form>
<?php
}else{
	switch($img){
		case 1:
			header('Location: imagen/inicio.php');
			break;
		case 2:
			echo '<script language="javascript">alert("Lo siento, no puedes ingresar");</script>'; 
			break;
	}
}
?>

<footer>
  <nav>
  <a class="3" href="http://shop.clubtorres.com/es/">Club Torres</a> |
  <p>Posted by: Tania Ubaldo</p>
</nav>
 </footer>
</CENTER>
</BODY>
</HTML>