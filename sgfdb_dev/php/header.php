<?php
//file ensures all pages in the project has access to the same set of features.  see lpmj pg 607.
//using to call html tag files for now.  will see how this works calling php/db files
//will use thsi for login calls once setup- have basic template below from lpmj; commented out for now
session_start();

require_once 'functions.php'; //generic app functions
// require_once 'html/headTag.html';

//login call; lpmj 608.  activate security after tabs setup
/* $userStr = '(Guest)';

if (isset($_SESSION['user'])) {
	$user = $_SESSION['user'];
	$loggedIn = TRUE;
	$userStr = ' ($user)';
} else {
	$loggedIn = FALSE;
} */

//html links; wrap an if/then conditional around this for meeting login criteria- see pg 608 of lpmj
echo 	"<div class='appname'>$appName</div>";
// 		.	"<script src='webroot/js/app.js></script>";

require_once 'html/bodyHeaderTag.html';

//login conditional
/* 		if ($loggedIn)
			echo	"<br><ul class='menu'>"
			.	"<li><a href='xx.php'>Main Page</a></li>"
			.	"<li><a href='xx.php'>XX</a></li></ul><br>"; 
		else  */

require_once 'bodyMainTags.php';

echo <<<_END
				</div>				
		</div>

</main>
_END;

require_once 'html/bodyFooterTag.html';

?>