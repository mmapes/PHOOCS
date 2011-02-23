<?php
require_once(dirname(__FILE__) . '/php/Page_YOURSITE.php'); 

$page = new Page_YOURSITE();

$page->setTitle('Template Documentation');

$page->setBeforePage('<h1>Template</h1>');

$page->setHead('
	<h2>Head</h2>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
');

$page->addToLeftCol('<h2>Left Column</h2>
	<p>Left column is 250px by default. It can be extended by several classes to allow for additional layouts.</p>
	<ul>
		<li>.gMail = 160px</li>
		<li>.gCal = 180px</li>
		<li>.yahoo = 240px</li>
		<li>.myYahoo = 300px</li>
	</ul>');

$page->addToRightCol('<h2>Right Column</h2>
	<p>The right column is by default 300px wide. It can be extended via all the same classes that are available to right column.</p>
	<ul>
		<li>.gMail = 160px</li>
		<li>.gCal = 180px</li>
		<li>.yahoo = 240px</li>
		<li>.myYahoo = 300px</li>
	</ul>');

$page->addToMain('<h2>Main Content</h2>
	<p>Main Content is fully liquid. It takes all the remaining space on the line after the widths of “leftCol” and “rightCol” are taken into account. Alternatively, grids can be used to break up the main content area for fully fluid layouts.</p>'
);

$page->setFooter('<h2>Foot</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'
);

$page->draw();

?>
