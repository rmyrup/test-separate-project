<html>
<head>
<title>HI!</title>
</head>
<body>
<h1>HI!</h1>
<hr>
<pre><?php

echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? "YAY! SSL!" : "NON-SSL";
echo "\n\n";

?></pre>
<hr />
<?php 
	if(file_exists('newfile.php')) include 'newfile.php';
?>
<hr />
<?php if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') { ?>
	<pre><?php print_r($_SERVER); ?></pre>
<?php } else { ?>
<p>Changing to SSL in 3 seconds...</p>
<script type="text/javascript">
setTimeout(goSSL, 3000);

function goSSL()
{
	window.location.href = 'https://<?php echo $_SERVER['HTTP_HOST']; ?><?php echo $_SERVER['REQUEST_URI']; ?>';
}
</script>
<?php } ?>
<hr />
<p><em>&copy;<?php echo date('Y', strtotime('+2 years')); ?></em></p>
</body>
</html>