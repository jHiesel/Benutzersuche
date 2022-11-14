<?php

class tableController
{
static function  tableFromArray($value, $search){
    echo "<tr>";
    echo "<td class='table-hover'>";
    echo "<a href=\"/info?userId=".$value['id']."&currentSearch=".$search. "\">". $value['firstname']." ".$value['lastname'] ."</a> </td>";
    echo "<td>". $value['email']."</td>";
    echo "<td>". $value['birthdate']."</td>";
    echo "</tr>";
}
}