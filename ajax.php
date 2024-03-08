<?php
    require_once("action/AjaxAction.php");

    $action = new AjaxAction();
    $data = $action->execute();

    //on recoit deja en json encoded, donc on le reencode pas
    echo $data["result"];