<?php
if (isset($_SESSION['errors'])) {
	echo '<div class="alert alert-danger">';
	foreach ($_SESSION['errors'] as $error) {
		echo "<div>{$error}</div>";
	}
	echo '</div>';
	unset($_SESSION['errors']);
}

if (isset($_SESSION['error'])) {
	echo "<div class='alert alert-danger'>{$_SESSION['error']}</div>";
	unset($_SESSION['error']);
}

if (isset($_SESSION['success'])) {
	echo "<div class='alert alert-success'>{$_SESSION['success']}</div>";
	unset($_SESSION['success']);
}
