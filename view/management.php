<?php
/**
 * @file     management.php
 * @brief    File description
 * @author   Created by Christophe.KUNZLI
 * @version  15.12.2022
 */
$title = "snows - gestion";
ob_start();

function console_log($output, $with_script_tags = true): void
{
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) .
        ');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}

console_log($articles);

?>

<table>
    <tr>
        <th>Article</th>
        <th>Photo</th>
        <th>Modèle</th>
        <th>Longueur</th>
        <th>Prix à l'unité</th>
        <th>Quantité</th>
        <th>Ajouter</th>
    </tr>
</table>

<?php
$content = ob_get_clean();
require 'gabarit.php';
?>

