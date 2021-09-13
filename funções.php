<?php
function sorteio($milhar, $bicho, $aposta, $x){
	$n1 = rand(0,9); $n2 = rand(0,9); $n3= rand(0,9); $n4 = rand(0,9);
	$sorteio = $n1;
	$sorteio .= $n2;
	$sorteio .= $n3;
	$sorteio .= $n4;
	//$sorteio = 6244;
	$final = $n3;
	$final .= $n4;
	if($x == 0){  echo "1° Premio - ", $sorteio, " - ";
			  }
	elseif($x == 1){  echo "2° Premio - ", $sorteio, " - ";;}
			elseif($x == 2){  echo "3° Premio - ", $sorteio, " - ";}
			elseif($x == 3){  echo "4° Premio - ", $sorteio, " - ";}
			elseif($x == 4){ echo "5° Premio - ", $sorteio, " - ";}
	vencedor($final, $bicho, $x, $aposta);
	if($milhar == $sorteio){
	if($x == 0){ $premio = $aposta * 35;
			  echo $premio, "<br><br>";
			  }
	elseif($x == 1){ $premio = $aposta * 30;		  
			  echo $premio, "<br><br>";}
			elseif($x == 2){ $premio = $aposta * 25;		  
			  echo $premio, "<br><br>";}
			elseif($x == 3){ $premio = $aposta * 20;		  
			  echo $premio, "<br><br>";}
			elseif($x == 4){ $premio = $aposta * 15;		  
			  echo $premio, "<br><br>";}
			  }}


function vencedor($final, $bicho, $x, $aposta){
	$avestruz = array( 1,2,3,4);
	$aguia = array(5,6,7,8);
	$burro = array(9,10,11,12);
	$borboleta = array(13,14,15,16);
	$cachorro = array( 17,18,19,20);
	$cabra = array(21,22,23,24);
	$carneiro = array(25,26,27,28);
	$camelo = array(29,30,31,32);
	$cobra = array( 33,34,35,36);
	$coelho = array(37,38,39,40);
	$cavalo = array(41,42,43,44);
	$elefante = array(45,46,47,48);
	$galo = array( 49,50,51,52);
	$gato = array( 53,54,55,56);
	$jacare = array( 57,58,59,60);
	$leao = array( 61,62,63,64);
	$macaco = array(65,66,67,68);
	$porco = array(69,70,71,72);
	$pavao = array(73,74,75,76);
	$peru = array(77,78,79,80);
	$touro = array( 81,82,83,84);
	$tigre = array(85,86,87,88);
	$urso = array(89,90,91,92);
	$veado = array(93,94,95,96);
	$vaca = array(97,98,99,00);
	
	bicharada($avestruz,$final, $bicho, $x, $aposta, "avestruz");
	bicharada($aguia,$final, $bicho, $x, $aposta, "aguia");
	bicharada($burro,$final, $bicho, $x, $aposta, "burro");
	bicharada($borboleta,$final, $bicho, $x, $aposta, "borboleta");
	bicharada($cachorro,$final, $bicho, $x, $aposta, "cachorro");
	bicharada($cabra,$final, $bicho, $x, $aposta, "cabra");
	bicharada($carneiro,$final, $bicho, $x, $aposta, 'carneiro');
	bicharada($camelo,$final, $bicho, $x, $aposta, "camelo");
	bicharada($cobra,$final, $bicho, $x, $aposta, "cobra");
	bicharada($coelho,$final, $bicho, $x, $aposta, "coelho");
	bicharada($cavalo,$final, $bicho, $x, $aposta, "cavalo");
	bicharada($elefante,$final, $bicho, $x, $aposta, "elefante");
	bicharada($galo,$final, $bicho, $x, $aposta, "galo");
	bicharada($gato,$final, $bicho, $x, $aposta, "gato");
	bicharada($jacare,$final, $bicho, $x, $aposta, "jacare");
	bicharada($leao,$final, $bicho, $x, $aposta, "leão");
	bicharada($macaco,$final, $bicho, $x, $aposta, "macaco");
	bicharada($porco,$final, $bicho, $x, $aposta, "porco");
	bicharada($pavao,$final, $bicho, $x, $aposta, "pavão");
	bicharada($peru,$final, $bicho, $x, $aposta, "peru");
	bicharada($touro,$final, $bicho, $x, $aposta, "touro");
	bicharada($tigre,$final, $bicho, $x, $aposta, "tigre");
	bicharada($urso,$final, $bicho, $x, $aposta, "urso");
	bicharada($veado,$final, $bicho, $x, $aposta, "veado");
	bicharada($vaca,$final, $bicho, $x, $aposta, "vaca");
}

function jogador($ser, $bicho, $x, $aposta){
	if($ser == $bicho){
		if($x == 0){ $premio = $aposta * 15;
			  echo $premio, "<br><br>";
			  }
	elseif($x == 1){ $premio = $aposta * 5;		  
			  echo $premio, "<br><br>";}
			elseif($x == 2){ $premio = $aposta * 4;		  
			  echo $premio, "<br><br>";}
			elseif($x == 3){ $premio = $aposta * 3;		  
			  echo $premio, "<br><br>";}
			elseif($x == 4){ $premio = $aposta * 2;		  
			  echo $premio, "<br><br>";}
			  }
}

function bicharada($bixo,$final, $bicho, $x, $aposta, $bichin){
	for ($xy = 0; $xy < count($bixo); $xy++){
	if($bixo[$xy] == $final){ echo "<img src='imagems/$bichin.png' height='100' width='100'> <br>"; jogador($bichin, $bicho, $x, $aposta);}}	
}
	
	

function checagem($bicho,$aposta, $milhar){
	for($x = 0; $x < 5; $x++){
	sorteio($milhar, $bicho, $aposta, $x);
}}
?>