<?php
/*
 * This function will print a table for the SQL 1 assignment.
 * It expects an associative array that is obtained through the use of PDO.
 */
function print_table_PDO($result)
{
    echo "<table border='1' bgcolor='#cccccc'>";
    foreach ($result as $row) {
        $keys = array_keys($row);
        echo "<tr>";
        foreach ($keys as $key) {
            echo "<th>$key</th>";
        }
        echo "</tr>";
        break;
    }
    foreach ($result as $row) {
        echo "<tr>";
        foreach ($row as $item) {
            echo "<td>$item</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
/*
 * This function was made to replace print_r which can print out arrays.
 * All it does is surround an array with <pre> tags which causes HTML to format the array in a more readable format.
 */
function print_array($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}