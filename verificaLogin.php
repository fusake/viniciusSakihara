<?php
    
    session_start();
	$usuario = strip_tags($_POST['usuario']);
	$senha = strip_tags($_POST['senha']);
	echo $senha."<br>";
    $senha = sha1(strip_tags($_POST['senha']));
	echo $senha."<br>";
    // conctando ao BD
    include "conecta.php";

	$query="SELECT * from login WHERE  usuario=? AND senha=?";

	if($stmt = mysqli_prepare($conexao, $query)) {
		mysqli_stmt_bind_param($stmt, "ss", $usuario, $senha);	
		mysqli_stmt_execute($stmt);
		mysqli_stmt_bind_result($stmt, $id, $usuario, $email, $senha);
		mysqli_stmt_fetch($stmt);
	  
		if ($usuario == $usuario && $senha == $senha) {
			$_SESSION['usuario'] = $usuario;
			$_SESSION['senha'] = $senha;
			header('location:photo.php');
		}	  
		else {
			echo "Usuario ou senha incorretos";
		}
		mysqli_stmt_close($stmt);
	} else {
		echo "Falha no statment";
	}
	mysqli_close($conexao);
?>
