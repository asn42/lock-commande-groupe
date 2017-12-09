<?php
/**
 * Created by PhpStorm.
 * User: dbourdon
 * Date: 09/12/17
 * Time: 14:18
 */

require_once "config.php";

include "site/head.php";

if ($_POST) {
    include "save.php";
} else {
    include "form.php";
}