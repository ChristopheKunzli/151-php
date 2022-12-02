<?php
/**
 * @file     home.php
 * @brief    File description
 * @author   Created by Christophe.KUNZLI
 * @version  02.12.2022
 */
$title = "snows - home";
ob_start();
?>





<?php
$content = ob_get_clean();
require 'gabarit.php';
?>