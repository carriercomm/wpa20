<?php 

function _HomeController() {
	make_view("home");
}

function _PageController() {
	$data = [
		'title'	=> 'Myanmar Links',
		'username'	=> "Soe Thiha",
		"address"	=> 'Hledan'
	];
	make_view("page", $data);
}

function _BlogController($category, $id) {
	echo $category . " in " . $id;
	make_view("blog");
}

function _AboutController() {
	make_view("about");
}

function _FoobarController() {
	make_view("foobar");
}


 ?>