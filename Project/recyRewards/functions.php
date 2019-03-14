
<?php
@session_start();
/*
 --------------------------------------------------------------------
            Function to generate Id primary Key to the table
 --------------------------------------------------------------------
*/

function getID(){
    $file_name ='ids';
    if(!file_exists($file_name)){
        touch($file_name);
        $handle = fopen($file_name,'r+');

        $id=202000000;
    }
    else {
        $handle = fopen($file_name, 'r+');
        $id = fread($handle, filesize($file_name));
        settype($id, "integer");
    }
    rewind($handle);
    fwrite($handle,++$id);
    fclose($handle);
    return $id;
}


/*
 --------------------------------------------------------------------
            Function to connect to the database
 --------------------------------------------------------------------
*/

function db_Connect(){
    $link =mysqli_connect(
        "gblearn.com",
        "f7team15",
        "Activate",
        "f7team15_comp1230_recycle_database");
    if(mysqli_connect_errno()){
        print mysqli_connect_error();
        exit;
    }
    return $link;
}

/*
 --------------------------------------------------------------------
           Function to encrypt password. We are using md5 to encrypt
 --------------------------------------------------------------------
*/

function encrypt_password($Pwd){
    return md5($Pwd);
}


/*
 --------------------------------------------------------------------
        This function insert data to the user table based on the type.
        Type here is School
 --------------------------------------------------------------------
*/
function insertIntoTables ($type, $eMl, $adds, $clPhone, $schName, $schContact, $rNum, $prov, $cty, $posCode, $Pard)
{
    $link = db_Connect();
    $str = encrypt_password($Pard);
    $id = getID();
    mysqli_query($link, "INSERT INTO user_table values
    ('$id','$type','$eMl','$adds','$clPhone','$prov','$cty','$posCode','$str',1)");

    mysqli_query($link, "insert into user_school_table values
    ('','$schName', '$schContact','$rNum','$id')");

    return $id;
}

/*
 --------------------------------------------------------------------
       This function insert data to the user table based on the type.
        Type here is Individuals
 --------------------------------------------------------------------
*/

function insert_Into_Individual_Tables ($type, $fN, $lN, $eMl, $adds, $clPhone, $prov, $cty, $posCode, $Prd)
{
    $str = encrypt_password($Prd);
    $id = getID();
    $strId = $id - 101000000;
    $link = db_Connect();
    // Query to insert into the database
    mysqli_query($link, "INSERT INTO user_table values
    ('$strId','$type','$eMl','$adds','$clPhone','$prov','$cty','$posCode','$str',1)");

    $_SESSION['ID'] = $strId;
    mysqli_query($link, "insert into user_individual_table values
    ('','$fN','$lN','$strId')");
    return $strId;
}

/*
 --------------------------------------------------------------------
       Function to to save on dataBase the Contact US
 --------------------------------------------------------------------
*/
function contactUs($name, $email, $message)
{
    $link = db_Connect();
    $d=strtotime("today");
    $date= date('Y/m/d H:i:s');
    $contact_us = "INSERT INTO contact_table
              VALUES ('','$name','$email','$date','$message')";
    mysqli_query($link, $contact_us);
}

/*
 --------------------------------------------------------------------
       Functions to return the points of the user
 --------------------------------------------------------------------
*/

function getPoints(){
    $usId = $_SESSION['user_Id'];
    $link = db_Connect();
    $result = mysqli_query($link, "select * from `point_table` where user_id='$usId'") or
    die ("Imposssible");
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    return $result;
}


    /*
     --------------------------------------------------------------------
           Function to insert Reward on page
     --------------------------------------------------------------------
    */
function insert_Reward()
{
    $link = db_Connect();
    $sqlread = mysqli_query($link, "SELECT * FROM `prize_table` WHERE prize_active=1");
    $reward = mysqli_fetch_row($sqlread);
    return $sqlread;
    mysqli_close($link);
}
    /*
     --------------------------------------------------------------------
           Function to Drop Off Page
     --------------------------------------------------------------------
    */

function insert_DropOofArea()
{
    $link = db_Connect();
    $sqlread = mysqli_query($link, "SELECT * FROM `drop_off_area` WHERE School_active=1");
    $reward = mysqli_fetch_row($sqlread);
    return $sqlread;
    mysqli_close($link);
}

    /*
     --------------------------------------------------------------------
          Function to Write a Review
     --------------------------------------------------------------------
    */


function writeReview($message)
{
    $usId = $_SESSION['user_Id'];
    $link = db_Connect();
    $d = strtotime("today");
    $date = date('Y/m/d H:i:s');
    $write_Review = "INSERT INTO review_table
                    VALUES ('','$message','$date','$usId')";
    mysqli_query($link, $write_Review);
}

    /* --------------------------------------------------------------------
          Function to Insert points to table
     --------------------------------------------------------------------
    */
function insert_Into_point_table($nofBags, $points)
{
    $link = db_Connect();
    $usId = $_SESSION['user_Id'];
    $date = date('Y-m-d');
    $oneYearOn = date('Y-m-d', strtotime(date("Y-m-d", mktime()) . " + 365 day"));
    mysqli_query($link, "INSERT INTO point_table values
    ('',$nofBags,$points,'$date','$oneYearOn','$usId')");
}
/*--------------------------------------------------------------------
      Function to display quote in the Main page page
--------------------------------------------------------------------
*/
function displayQuotes(){
    $link = db_Connect();
    $sqlquotes = mysqli_query($link,"SELECT quote_Content AS quote,quote_author AS author
                            FROM quote_table");
    $quote = mysqli_fetch_row($sqlquotes);
    $arrayquote = array();
    if($sqlquotes->num_rows >0){
        while($row = $sqlquotes->fetch_assoc())
        {
            $arrayquote[] = [
                'quote' => $row["quote"],
                'author' =>$row["author"]];
        }
    }
    $max = count($arrayquote);
    $rnd = rand(0, $max-1);

    $review = mysqli_fetch_row($sqlquotes);
    return $arrayquote[$rnd];
}
/*--------------------------------------------------------------------
      Function to display review in the Main page page
--------------------------------------------------------------------
*/
function displayReview(){

    $reviews = insert_Review();
    $max = count($reviews);
    $rnd = rand(0, $max-1);

    return $reviews[$rnd];
}

/*--------------------------------------------------------------------
      Function to insert review in the page
--------------------------------------------------------------------
*/

function insert_ReviewSchool( )
{
    $link = db_Connect();
    $sqlSchool =mysqli_query($link, "SELECT r.review_Content AS content,r.review_Date AS date,
                    s.user_School_Name AS author
            FROM review_table AS r
            INNER JOIN user_school_table AS s
            ON r.user_Id = s.user_id 
            WHERE review_active = 1");

    $arrayschool = array();

    if($sqlSchool->num_rows > 0){
        while($row = $sqlSchool->fetch_assoc())
        {
            $arrayschool[] = array(
                'content' => $row["content"],
                'date' => $row["date"],
                'author'=> $row["author"]
            );
        }
    }

   $review = mysqli_fetch_row($sqlSchool);
    return $arrayschool;
}

function insert_ReviewIndividual( )
{
    $link = db_Connect();
    $sqlIndividual= mysqli_query($link,"SELECT r.review_Content AS content, r.review_Date AS date,
                        i.user_Fname AS author1, i.user_Lname AS author2
        FROM review_table r 
        INNER JOIN user_individual_table AS i
        ON r.user_Id = i.user_id
        WHERE review_active = 1");
    $arrayindiv = array();
    if($sqlIndividual->num_rows > 0){
        while($row = $sqlIndividual->fetch_assoc())
        {
            $arrayindiv[] = array(
                'content' => $row["content"],
                'date' => $row["date"],
                'author'=> $row["author1"]." ".$row["author2"]
            );
        }
    }
    $review = mysqli_fetch_row($sqlIndividual);
    return $arrayindiv;
}

function insert_Review()
{
    $sqlIndividual = insert_ReviewIndividual();
    $sqlSchool = insert_ReviewSchool();
    $reviewarray = array_merge($sqlIndividual,$sqlSchool);
    usort($reviewarray,"sortFunction");
    return $reviewarray;
}

function sortFunction($a,$b)
{return strtotime($b["date"])-strtotime(($a["date"]));

}


/*--------------------------------------------------------------------
      Function to return the point of the user
--------------------------------------------------------------------
*/
function user_Profile()
{
    $link = db_Connect();
    $usId = $_SESSION['user_Id'];
    $d = 0;
    $sqlIndividual = mysqli_query($link, "SELECT * from point_table where user_Id ='$usId'");
    $row = mysqli_fetch_array($sqlIndividual, MYSQLI_ASSOC);
    foreach($sqlIndividual as $s ) {
        $d+= $s['user_Points'];// variable $d is adding all the points of the user
    }
    return $d;
}
function user_ProfileName()
{
    $link = db_Connect();
    $usId = $_SESSION['user_Id'];
    $sqlIndividual = mysqli_query($link, "SELECT * from user_table where user_Id ='$usId'");
    $row = mysqli_fetch_array($sqlIndividual, MYSQLI_ASSOC);
}