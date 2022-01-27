<?php 
 include("../../../conn.php");


extract($_POST);

$deleteStudent = $conn->query("DELETE  FROM examinee_tbl WHERE exmne_id='$id'  ");
if($deleteStudent)
{
    $res = array("res" => "success");
}
else
{
    $res = array("res" => "failed");
}



    echo json_encode($res);
 ?>