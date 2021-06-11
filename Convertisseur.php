<?php 

	$typeConversion = "XOF";
	$TAUX_CONVERSION = 655.957;
	$montant=$_POST["montant"];

		function changer($typeConversion)
		{
			if ($typeConversion === "XOF")
			{
				$typeConversion = "EURO";
				echo "EURO ==> XOF";

			}
			else
			{
				echo "XOF ==> EURO";
			}
			convertir();
		}


		function convertir($montant)
		{
			if ($typeConversion === "XOF")
			{
				$resultat=$montant * $TAUX_CONVERSION;
				echo "Le resultat EURO==>XOF est:".$resultat;
			}
			else
			{
				$resultat=$montant / $TAUX_CONVERSION;
				echo "Le resultat XOF==>EURO est:".$resultat;
			}
		}
 ?>