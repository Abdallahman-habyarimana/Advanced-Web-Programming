<?php
/*
 --------------------------------------------------------------------
            Function to connect to the database
 --------------------------------------------------------------------
*/
function db_Connect(){
    $link =mysqli_connect(
        "localhost",
        "root",
        "",
        "comp1230_recycle_database");
    if(mysqli_connect_errno()){
        print mysqli_connect_error();
        exit;
    }
    return $link;
}

function displayQuotes(){
    $link = db_Connect();
    $sqlquotes = mysqli_query($link,"SELECT quote_Content AS quote
                            FROM quote_table");
    $quote = mysqli_fetch_row($sqlquotes);
    $max = count($sqlquotes);
    $rnd = rand(0, $max);
    $arrayquote = array();
    if($sqlquotes->num_rows >0){
        while($row = $sqlquotes->fetch_assoc())
        {
            $arrayquote[] = array(
                'quote' => $row["quote"]);
        }
    }

    $review = mysqli_fetch_row($sqlquotes);
    return $arrayquote[$rnd];
}
$a=displayQuotes();
print_r($a);