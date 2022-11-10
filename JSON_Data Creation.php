<?php
// Declare two dimensional associative
// array and initialize it
$arr = array (
	"first"=>array(
		"id"=>1,
		"Name"=>"Doorbell",
		"Reg_No"=>209309011,
		"Phone_Number"=>"9828440000"
	),
	"second"=>array(
		"id"=>1,
		"Name"=>"Doorbell",
		"Reg_No"=>209309011,
		"Phone_Number"=>"9828440000"
	),
	"third"=>array(
		"id"=>1,
		"Name"=>"Doorbell",
		"Reg_No"=>209309011,
		"Phone_Number"=>"9828440000"
	),
	"forth"=>array(
		"id"=>1,
		"Name"=>"Doorbell",
		"Reg_No"=>209309011,
		"Phone_Number"=>"9828440000"
	),
	"fifth"=>array(
		"id"=>1,
		"Name"=>"Doorbell",
		"Reg_No"=>209309011,
		"Phone_Number"=>"9828440000"
	),
	"sixth"=>array(
		"id"=>1,
		"Name"=>"Doorbell",
		"Reg_No"=>209309011,
		"Phone_Number"=>"9828440000"
	),
	"seventh"=>array(
		"id"=>1,
		"Name"=>"Doorbell",
		"Reg_No"=>209309011,
		"Phone_Number"=>"9828440000"
	),
	"eighth"=>array(
		"id"=>1,
		"Name"=>"Doorbell",
		"Reg_No"=>209309011,
		"Phone_Number"=>"9828440000"
	),
	"ninth"=>array(
		"id"=>1,
		"Name"=>"Doorbell",
		"Reg_No"=>209309011,
		"Phone_Number"=>"9828440000"
	),
	"tenth"=>array(
		"id"=>1,
		"Name"=>"Doorbell",
		"Reg_No"=>209309011,
		"Phone_Number"=>"9828440000"
	)

);

// Function to convert array into JSON
$json =  json_encode($arr);

file_put_contents("data.json", $json);

$json_data = json_decode($json,true);
print_r($json_data)

?>

