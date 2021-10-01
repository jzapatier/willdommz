<?php

require_once '../model/scroll.php';

if(isset($_GET['action'])){
    //call function here
    crud($_GET['action'], $_GET['idscroll']);
}

function crud($act, $idscroll) {
    $scr = new Scroll();
    $scrollmodel = new Scroll();
    $action = $act;
    if(isset($idscroll)) {
        $scr = $scrollmodel->obtener($idscroll);
    }

    require_once "../header.php";
    require_once "../view/scroll-edit.php";
    require_once "../footer.php";
}
?>