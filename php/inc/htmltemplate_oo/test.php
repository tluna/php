<?php
$val=array(
	"one"=>"firstvalue",
	"two"=>"secondvalue",
	"three"=>array(
		"child_a",
		"child_b",
		"child_c",
	),
	"address"=>array(
		array(
			"zip"=>"1112222",
			"pref"=>"Tokyo"
		),
		array(
			"zip"=>"333666",
			"pref"=>"Osaka"
		)
	),
	"nl2brtest"=>"aaaaaaaaaaaaaaaaaaaa
	bbbbbbbbbbbbbbbbbbb
	ccccccccccccccccccc"
);

include_once("htmltemplate.inc");
htmltemplate::t_include("test.html",$val);
?>