<?php
/////////////////////////
// N:B: remember to
// Set youre private key. 
/////////////////////////

if(isset($_GET['YOURESECUREKEY'])){



	$commands = array(
		'echo $PWD',
		'whoami',
		'git pull',
		'git status',
	);
 
	// Run the commands for output
	$output = '';
	foreach($commands AS $command){
		// Run it
		$tmp = shell_exec($command);
		// Output
		$output .= "<span style=\"color: #6BE234;\">\$</span> <span style=\"color: #729FCF;\">{$command}\n</span>";
		$output .= htmlentities(trim($tmp)) . "\n";
	}
} else {

	$failed = "Aw, snap.. You're not allowed to mess with my hooks.";
	$output .= "<span style=\"color: #6BE234;\">\$</span> <span style=\"color: #729FCF;\">{$failed}\n</span>";

}

?>



<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>GIT DEPLOYMENT SCRIPT</title>
</head>
<body style="background-color: #000000; color: #FFFFFF; font-weight: bold; padding: 0 10px;">
<pre> 
<?php echo $output; ?>
</pre>
</body>
</html>