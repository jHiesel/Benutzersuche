<?php
if (isset($_GET['currentSearch']) ){
    $searchBuffer = htmlspecialchars($_GET['currentSearch']);
}

require "View/details.views.php";