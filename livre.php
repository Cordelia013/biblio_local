<?php ob_start()?>

<div>ICI LE CONTENU DE MA PAGE</div>


<table class="table text-center">
<thead>
<tr class="table-dark">
<th scope="col">Image</th>
<th scope="col">Titre</th>
<th scope="col">Nombre de pages</th>
<th colspan="2">Action</th>
</tr>
</thead>


<tbody>
<tr >
<td class="align-middle"><img src="public/image/lux_tome_1_obsidienne-494937-264-432.jpg" width="60px;"/></td>
<td class="align-middle">Lux, Tome 1 : Obsidienne</td>
<td class="align-middle">500</td>
<td class="align-middle">
    <button type="button"class="btn btn-warning">Modifier</button>
    <button type="button"class="btn btn-danger">Supprimer</button>
</td>
</tr>

 <tr >
<td class="align-middle"><img src="public/image/lux-tome-2-onyx-656383.jpg" width="60px;"/></td>
<td class="align-middle">Lux, Tome 2 : Onyx</td>
<td class="align-middle">380</td>
<td class="align-middle">
    <button type="button"class="btn btn-warning">Modifier</button>
    <button type="button"class="btn btn-danger">Supprimer</button>
</td>
</tr> 

</tbody>




</table>
<div class="d-grid gap_2">
<button type="button" class="btn btn-lg btn-success">Ajouter</button>
</div>

<?php
$titre = "Mes lectures";
$content = ob_get_clean();
require "template.php";

?>
