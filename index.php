<?php
/*
 *      index.php
 * 		Website plugins.geany.org
 *
 *      (C) Copyright 2009 by Dominic Hopf <dmaphy@googlemail.com>
 *      Version: 1.0.0
 *      Last Change: 2009-12-20
 */

define('CONTENTPATH','./content/');

if (isset($_GET['site']))
{
	if (file_exists(CONTENTPATH . $_GET['site'] . '.html'))
	{
		define('CONTENTFILE', CONTENTPATH . $_GET['site'] . '.html');
	}

	else
	{
		define('CONTENTFILE', CONTENTPATH . '404.html');
	}
}

else
{
	define('CONTENTFILE', CONTENTPATH . 'start.html');
}



print '<?xml version="1.0"?>';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
	"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
	<title>Plugins for Geany</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="./stylesheets/mainstyle.css" />
</head>
<body>
	<div id="header">
		<a href="./">
		<img src="./images/geany.png" alt="Geany Logo" style="width: 48px; height: 48px; float: left; margin-right: 5%;" /></a>
		<h1>Plugins for Geany</h1>
	</div>

	<div id="navigation">
		<h1>Geany Plugins project</h1>
		<ul>
			<?php
			include_once './content/geany-plugins-listing.html';
			?>
		</ul>

		<hr />

		<h1>Other Third-Party plugins</h1>
		<ul>
			<li><a href="index.php?site=externdbg">externdbg</a></li>
			<li><a href="index.php?site=geanyembrace">geanyembrace</a></li>
			<li><a href="index.php?site=geany-mini-script">Geany Mini Script</a></li>
		</ul>

		<hr />

		<ul>
			<li><a href="index.php?site=licensing">Licensing</a></li>
			<li><a href="index.php?site=about">About</a></li>
		</ul>

		<hr />

		<a href="http://geany.org/">Geany</a>

		<hr />

		<a href="index.php?site=README">List or update a plugin</a>
	</div>

	<div id="content">
		<?php include_once CONTENTFILE; ?>
	</div>

	<div id="footer">
		&copy; SweetGeany. The sweetest, fastest, leightweight integrated
		development environment ever seen.<br />
		Contact <a href="http://dominichopf.de/">Dominic Hopf</a> or the
		<a href="http://www.geany.org/Support/MailingList">Geany Team</a>
		for questions.
	</div>
</body>
</html>