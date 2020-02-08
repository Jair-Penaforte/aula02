<?php

/* Entrar com um número e informar se ele é divisível por 10, por 5, por 2 ou se não é divisível por nenhum destes

	$x= $_GET["valor"];
	
	if(($x%10)==0){
		
		echo "o numero $x é divisivel por 10<br>"; 	
		
		if(($x%2)==0){
		echo " o numero $x é divisivel por 2";
		}
	}
	
	else if (($x%5)==0){
		
		echo "o numero $x é divisivel por 5"; 	
	}
	
	else if (($x%2)==0){
		
		echo "o numero $x é divisivel por 2"; 	
	}

	else if (($x%2)==1) {
		echo "o numero $x não é divisivel nem por 10, 5 e 2";
	
	}

*/





/*2. Construir um algoritmo que leia 2 números e efetue a adição. Caso o valor somado seja maior que 20, este deverá ser apresentado somando-se a ele mais 8; caso o valor somado seja menor ou igual a 20, este deverá ser apresentado subtraindo-se 5
	
	$x = $_GET["valor1"];
	$y = $_GET["valor2"];
	
	$soma= $x + $y;
	
	if($soma>20){
		$soma+8;
		echo "a soma dos valores digitados + 8 será igual a $soma";
	}
	else if($soma<=20){
		$soma-5;
		echo "a soma dos valores digitados - 5 será igual a $soma";
	}

*/






/* 3. Entrar com nome, sexo e idade de uma pessoa. Se a pessoa for do sexo feminino e tiver menos que 18 anos, imprimir nome e a mensagem: Acesso proibido. Caso contrário, imprimir nome e a mensagem: Acesso permitido.

	$nome= $_GET["nome"];
	$sexo= $_GET["sexo"];
	$idade= $_GET["idade"];
	
	if(($sexo='feminino') && ($idade<18)){
		echo "Acesso proibido";
	} 
	elseif{
		echo"$nome acesso permitido"
	}
	
	
*/




?>