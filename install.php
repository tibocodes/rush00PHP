
<?php
function install()
{
	echo "initialisation du site\n<br />";
	$userdb = "./private/userdb";
	$shopbd = "./private/shopdb";
	echo"<br />user init<br />";
	$userinit = array("tibo" => array("login" => "tibo", "passwd" => hash("whirlpool", "moi"), "admin" => 1, "panier" => array()),
					"david" => array("login" => "david", "passwd" => hash("whirlpool", "moi"), "admin" => 1, "panier" => array()),
					"toto" => array("login" => "toto", "passwd" => hash("whirlpool", "moi"), "admin" => 0, "panier" => array()));
	 //var_dump($userinit);
	echo"<br />shop init<br />";
	$shopinit = array("tshirt" => array("name" => "tshirt", "price" => 20, "quantity" => 10,"img" => "./img/tshirt.jpg", "tag" => "vetements"),
						"montre" => array("name" => "montre", "price" => 50, "quantity" => 10,"img" => "./img/montre.jpg", "tag" => "accessoires"));
	// var_dump($shopinit);
	if (!file_exists("./private"))
		mkdir("./private", 0777, true);
	if (!file_exists($userdb))
		file_put_contents($userdb, serialize($userinit));
	if (!file_exists($shopbd))
		file_put_contents($shopbd, serialize($shopinit));
}
?>
