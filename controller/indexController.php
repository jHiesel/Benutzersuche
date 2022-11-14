<?php

$filter = "";
if (isset($_POST['submit']) && isset($_POST['filter'])){
    $filter = $_POST['filter'];
    echo "filter set";
}

if (isset($_GET['currentSearch']) ){
    $filter = htmlspecialchars($_GET['currentSearch']);
}

require "View/index.view.php";

