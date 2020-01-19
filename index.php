<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<title>Sklep papierniczy</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<div class="baner"><h1>W naszym sklepie internetowym kupisz najtaniej</h1></div>
		<div class="lewy"><h3>Promocja 15% obejmuje arrtykuly:</h3>
		<?php
	
	$conn = mysqli_connect("localhost", "root", "", "sklep");
	mysqli_set_charset($conn, "utf8");
	
	//$tow = $_POST["tow"];
	$q1 = "SELECT nazwa FROM towary WHERE promocja=1";
	//$q2 = "SELECT cena FROM towary WHERE  nazwa='cienkopis'";
	$result = mysqli_query($conn, $q1);
		echo "<ul>";
	while($row = mysqli_fetch_row($result))
	{
		echo "<li>".$row[0]."</li><br>";
	}
		echo "</ul>";
	
	
	 
	
	
	?>
		</div>
		<div class="srodkowy"><h3>Cena wybranego artykulu w promocji</h3>
		<form action="index.php" method="post">

		
			<?php
			
	
	//$tow = $_POST["tow"];
	$q2 = "SELECT nazwa FROM towary WHERE promocja=1";
	//$q2 = "SELECT cena FROM towary WHERE promocja=1";
	$result2 = mysqli_query($conn, $q2);
			
			
			
			echo '<select name="tow">';
			
	while($row2 = mysqli_fetch_row($result2))
	{
		echo "<option>".$row2[0]."</option><br>";
	}
		echo "</select>";
		
		
		
		
		
			
			
		
	
				
			$tow = $_POST["tow"];
			$q3 = "SELECT nazwa, cena FROM towary WHERE nazwa='$tow'";

			$result3 = mysqli_query($conn, $q3);
			
			//echo ;
			echo "<button>Wybiez</button>";
			while($cena = mysqli_fetch_row($result3))
			{ echo '<br>'.$cena[0]."  ";
				echo round($cena[1]/100*85, 2)." "."zl";
			
							

			}
		//mysqli_free_result($result3);
		
			
		
echo '</form>';
	
		
	mysqli_close($conn);
	
	
			?>
			
			 
		
			 
			 
			 
			
		<!-- Sktypt 2-->
		</div>
		<div class="prawy"><h3>Kontakt</h3>
			<p>telefon: 123123123 <br>
			e-mail:
			<a href="mailto:bok@sklep.pl">bok@sklep.pl</a></p>
		
		<img src="promocja2.png" alt="promocja">
		
		</div>
		<div class="stopka"><h4>Autor strony 83091119895</h4>
		</div>
	
	</div>
	
	
	
	
	
	
	
	
	  

	
</body>
</html>
