<?php
	/**
 * MYSQL Cerendentials Include Page
 *
 * @author Laxmikant Revdikar  <laxmikant.4644@gmail.com>
 */
session_start();
require_once("connect.php");
		$subject=strip_tags($_POST['subject']);
	    $message=strip_tags($_POST['message']);
		$to1="laxmikant.4644@gmail.com";
		$t02="amandeeptheviper@gmail.com";
		$headers="From:".$_SESSION['email'];
		mail($to, $subject, $message,$headers);
?>