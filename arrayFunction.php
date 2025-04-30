<?php
function pre_print_r($array){
    echo "<pre style='background-color: #888; color:#fff; margin: 20px; padding: 30px'>";
    print_r($array);
    echo "</pre>";
}
function pre_var_dump($array){
    echo "<pre style='background-color: #888; color:#fff; margin: 20px; padding: 30px'>";
    var_dump($array);
    echo "</pre>";
}

?>