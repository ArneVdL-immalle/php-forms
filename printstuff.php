<ul>
<?php

// Vul de juiste key in voor $_GET[...] zodat de gekozen VORM en KLEUR getoond wordt.

echo "<li>" . $_GET['vorm'] . "</li>";
echo "<li>" . $_GET['kleur'] . "</li>";
echo "<li>" . $_POST['vorm'] . "</li>";
echo "<li>" . $_POST['kleur'] . "</li>";


?>
</ul>
