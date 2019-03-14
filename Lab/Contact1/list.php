<?php
/**
 * Created by PhpStorm.
 * User: ABDAL
 * Date: 10/14/2017
 * Time: 12:07 PM
 */

function printList($arrayList)
{
    for ($i = 1; $i < count($arrayList); $i++) {
        echo '<tr>';
        for ($j = 0; $j < count($arrayList[$i]); $j++)
            echo '<td>' . $arrayList[i][j] . '<a href="">Delete</a>' . '<a href="">Modify</a>' . '</td>';
        echo '</tr>';
    }
}
