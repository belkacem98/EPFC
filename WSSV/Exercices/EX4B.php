<?php
/**
 * Ecrivez un script qui calcule et affiche le prix TTC d’un produit sur base 
 * d’un prix HTVA de 1200 e et d’un taux de TVA de 21%. 
 * Au-delà d’un seuil de 1500 e, l’acheteur bénéficie d’une remise de 5%.
 * Affichage suivant: 
 * [1200 e aux taux de 21% donne 1452 e à payer]
 * @author B. Zeddour Brahim
 * @version 0.1
 */
 
//Declaration des variables et des constantes
define("TVA",21);
define("REMISE",0.05);
define("SEUIL",1500);
$prixHTVA = intval($_POST['prixHTVA']);
$totalTVA = ($prixHTVA * TVA)/100;
$prixTTC = ($totalTVA + $prixHTVA);
$prixRemise = $prixTTC-($prixTTC*REMISE);

if ($prixHTVA > SEUIL) {
    echo "[$prixHTVA € aux taux de " .TVA. "% donne ".round($prixRemise,2)." € à payer]";
    echo "</br>";
    echo "Vous avez une remise de 5% sur votre prix total!";
} else 
    echo "[$prixHTVA € aux taux de " .TVA. "% donne ".round($prixTTC,2)." € à payer]";

?>

<form action="Ex4B.php" method="POST">
    <input type="text" name="prixHTVA" placeholder="Prix"/>
    <input type="submit" value="calculer"/>
</form>
