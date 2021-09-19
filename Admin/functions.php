<?php
    require 'config.php';
    
    function setTitle(){
        if(isset($_GET['page'])){
            $title = $_GET['page'];
            switch($title){
                case 'create_user':echo 'create New User';break;
                case 'manage_user':echo 'Control Users';break;
                case 'freelancers':echo 'Show Freelancers';break;
            }
        }
    }

function getTotals($tbl){
    global $connection ;
    $sql = "SELECT COUNT(*) as 'Total' From $tbl";
    $result = mysqli_query($connection,$sql);
    $COUNT = mysqli_fetch_array($result);
    return $COUNT['Total'];

}
/*
function chechUser($col1,$col2,$tbl,$where =''){
    $sql = "SELECT $col1 , $col2 FROM $tbl "
}
*/

function getMessage($text,$fontColor='black'){

    echo "
    <div class=\"alert alert-success\">
        <span style='color:$fontColor'>$text</span>
    </div> ";

}