<?php
    $stringa = "Apelle, figlio di Apollo fece una palla di pelle di pollo, tutti i pesci vennero a galla per vedere quella bella palla di pelle di pollo fatta da Apelle, figlio di Apollo.";
    $censura = $_GET["parola"];
    $stringa = str_replace($censura, "***", $stringa);


?>

<p><?php echo $stringa?></p>