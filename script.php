<?php 
$mysqli = new mysqli("localhost","root", "", "projeto1"); //connect on database;

if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());
do{
	$sensores = fopen('teste.txt','r');
	$leitura = array();
	if($sensores){
		while(!feof($sensores)){
			//Mostra uma linha do arquivo
			$linha = fgets($sensores, 1024);

			$leitura[] = explode(" ",$linha);//criar array;
		}

		// Fecha arquivo aberto
		fclose($sensores);

		unlink('teste.txt'); //deleta arquivo



		foreach ($leitura as $value){ 

			if($value[2]==1){
				$table = "pressao";
			}else{
				$table = "vasao";
			}
			
			$sql = "insert into ".$table." (tag,valor) values ('".$value[0]."',".$value[1].")";
			
			$query1 = $mysqli->query($sql);
			
			
		}
	}else{
		echo "Arquivo não encontrado";
	}
	sleep(5);
}while(1);

?>