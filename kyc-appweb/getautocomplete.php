<?php
session_start();

$db = pg_pconnect("host=ec2-54-243-252-91.compute-1.amazonaws.com port=5432 dbname=d9nk0o0a44u59m user=iqoiktexvcnwkp password=dcaaf938958ac73448ca87856def466bb40e37047113e8191dacb20f8d87b21d");
 pg_select($db, 'post_log', $_POST);
 	
 $term=$_GET["term"];
 
 $query=pg_query("SELECT name FROM organization_organization 
 	UNION 
 	SELECT name FROM users_users where name ilike '%".$term."%' AND account_token == ".$_SESSION['account_token']." order by name ");
 $json=array();
 
    while($student=pg_fetch_array($query)){
         $json[]=array(
                    'value'=> $student["name"],
                    'label'=>$student["name"]);
    }
 

$textval = json_encode($json);
file_put_contents('textvalues.txt', $textval);
 // echo json_encode($json);
 
?>