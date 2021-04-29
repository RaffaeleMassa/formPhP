<!DOCTYPE html>
<html>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
<head>
<title>PICCOLO FORM PHP</title>
<style>
	body{
		background-color:tomato;
	}
	h1,h2{
		text-align: center;
		font-family: "fantasy";
		font-family: 'Indie Flower', cursive;
	}

	form {
		font-family: 'Indie Flower', cursive;
	}
</style>
<script language="JavaScript">
function valida()
{
	nome=document.form1.nome.value;
	if(nome=="")
	{
		alert("Non hai inserito il nome");
		return false;
	}
	password=document.form1.pwd.value;
	if(password.length<7)
	{
		alert("Password non inserita o troppo corta");
		return false;
	}
}

</script>
</head>
<body>
<?php 
if(!isset($_POST["submit"]))
{ ?>
	<form name="form1" onsubmit="return valida()" method="POST">
	<h1>Esercizio sui form</h1>
<table width=35%>
	<tr>
		<td>Nome</td>
		<td>
			<input type="text" name="nome" placeholder="Inserisci il Nome" size="30" maxlength="20">
		</td>
	</tr>
    <tr>
		<td>Password</td>
		<td>
			<input type="password" name="pwd" placeholder="password">
		</td>
	</tr>
	<tr>
		<td>Sesso</td>
		<td>
		<input type="radio" name="sesso" value="maschio">Maschio
		<input type="radio"  name="sesso" value="femmina">Femmina
		</td>
	</tr>
	<tr>
		<td>Specializzazione</td>
		<td>
		  <Select name="spec">
			 <option value="informatica">informatica</option>   
			 <option value="elettronica">elettronica</option>
			 <option value="meccanica">meccanica</option>
			 <option value="civile">civile</option>
          </Select>
	    </td>
    </tr>
	<tr>
		<td>Interessi Culturali</td>
		<td>
			<input type="checkbox" name="interessi[]" value="Sport">Sport
			<input type="checkbox" name="interessi[]" value="Sviluppo">Sviluppo Web
			<input type="checkbox" name="interessi[]" value="Storia">Storia
			<input type="checkbox" name="interessi[]" value="Geografia">Geografia
		</td>
    </tr>
	<tr>
		<td>Invia File</td>
		<td>
			<input type="file" name="fi" size="50">
		</td>
    </tr>
	<tr>
		<td>Età(14-30)</td>
		<td>
			<select name="eta" id="">
				<?php 
				for($i=14;$i<=30;$i++)
				{
					echo "<option value=$i>$i<option>";
				};
				
				?>
				
			</select>
		</td>
	</tr>
</table>
<input type="submit" name="submit" value="invia dati al server">
<input type="reset" value="resetta i campi">
</form>
<?php 
}
else
{
$nome= $_POST["nome"];
$pass= $_POST["pwd"];
$sesso= $_POST["sesso"];
$specializzazione= $_POST["spec"];
$inter="";
if(!empty($_POST["interessi"])){
	foreach($_POST["interessi"] as $v){
		$inter.="-".$v."<br/>";
	}
}
$file= $_POST["fi"];
$eta= $_POST["eta"];
echo "<h1>Esercizio sui form</h1>
        <h2> Dati Inviati al server </h2>";
echo "Nome: $nome<br/>";
echo "Password: $pass<br/>";
echo "sesso: $sesso<br/>";
echo "specializzazione: $specializzazione<br/>";
if($inter!=""){
	echo "Interessi:<br/>$inter";
}
echo "file: $file<br/>";
echo "eta: $eta</br>";
echo"<br/><br/><a href='impariamoForm.php'>Torna al form</a>";
}





?>
</body>
</html>