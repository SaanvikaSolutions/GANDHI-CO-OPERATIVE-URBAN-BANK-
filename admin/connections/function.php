<?php
function executeSelect($table,$var) {
    global $con;

    $query = "SELECT * FROM $table WHERE program_title='$var'";

    $report = mysqli_query($con, $query);
    $result = array(); //array declaration
    while($queryreturn = mysqli_fetch_assoc($report)){
        $result[] = $queryreturn;
    }

    return $result;
}

?>