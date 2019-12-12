<?php
/**
 * Ecrivez un script qui calcule et affiche le prix TTC d’un produit sur base d’un prix HTVA 
 * de 1200euros et d’un taux de TVA de 21%
 * Affichez le résultat selon le format suivant :
 * [1200 € aux taux de 21% donne 1452 € à payer]
 * @author B. Zeddour Brahim
 * @version 0.1
 */

 //Declaration des constantes et variavbles.
define("TVA",21);
$prixHTVA = intval($_POST['prixHTVA']);
$totalTVA = ($prixHTVA * TVA)/100;
$prixTTC = ($totalTVA + $prixHTVA);

//Affichages
echo "[$prixHTVA € aux taux de " .TVA. "% donne ".round($prixTTC,2)." € à payer]";

?>

<form action="Ex4A.php" method="POST">
    <input type="text" name="prixHTVA" placeholder="Prix"/>
    <input type="submit" value="calculer"/>
</form>
