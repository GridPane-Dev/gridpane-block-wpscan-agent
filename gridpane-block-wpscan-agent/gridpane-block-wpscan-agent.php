<?php
if (!empty($_SERVER['HTTP_USER_AGENT']) && preg_match('/WPScan/i', $_SERVER['HTTP_USER_AGENT'])) {
	die('Buh Bye WPScan!');
}
