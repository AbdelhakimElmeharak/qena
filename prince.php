<?php

session_start();

function redirect($dir) {
	header("Location: {$dir}");
	exit();
}

