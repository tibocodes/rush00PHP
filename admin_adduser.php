<?php

function admin_adduser($login, $mdp, $admin)
{
	$filename = "./private/userdb";
	$data = file_get_contents($filename);
	$data = unserialize($data);
	$data["login"] = array("login" => $login, "passwd" => hash(whirlpool, $mdp), "admin" => $admin);
	$data = serialize($data);
	file_put_contents($filename, $data);
}

?>