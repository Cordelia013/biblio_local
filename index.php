<?php ob_start()?>

<div>ici le contenur de ma page</div>






<?php
$titre="Bibliotheque Cordelia";
$content = ob_get_clean();
require "template.php";

?>