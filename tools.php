<?php 
function getPage() {
    $name = "glowna";
    if(isset($_GET["page"])) {
        $name = $_GET["page"];
    } 
    return $name;
}
?>