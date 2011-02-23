<?php
require_once(dirname(__FILE__) . '/php/Page_YOURSITE.php'); 

$page = new Page_YOURSITE();

$page->setTitle('Phoocs (PHP + Object Oriented Cascading Style Sheets (OOCSS)');

$page->addToMain('<h1>Phoocs (PHP + OOCSS)</h1>');
$page->addToMain('<h2>Hides the complexity, reveals the simplicity</h2>');

$page->addToMain('
	<p>"Phoocs" comes from PHP + OOCSS. It is a very lightweight framework that 
	wraps two of the coolest features of OOCSS -- templates and modules -- into 
	three simple, clean, object-oriented PHP classes.</p>
');

$page->addToMain('<h3>Modules</h3>');

$page->addToMain('<p>
	OOCSS modules require you to buy in to some fairly complex and specific HTML 
	structures. You don\'t want to memorize those structures; you just want to 
	specify what goes in the head, body, and foot of your current module. 
	PHOOCS hides the complexity and reveals the simplicity.
</p>');

$page->addToMain('<p>Here is an OOCSS module written in HTML:</p>');

$page->addToMain('<pre>
&lt;div class="mod grab"&gt;
	&lt;b class="top"&gt;&lt;b class="tl"&gt;&lt;/b&gt;&lt;b class="tr"&gt;&lt;/b&gt;&lt;/b&gt;
	&lt;div class="inner"&gt;
		&lt;div class="hd"&gt;
			<strong>&lt;h3&gt;grab&lt;/h3&gt;</strong>
		&lt;/div&gt;
		&lt;div class="bd"&gt;
			<strong>&lt;p&gt;Body&lt;/p&gt;</strong>
		&lt;/div&gt;
	&lt;/div&gt;
	&lt;b class="bottom"&gt;&lt;b class="bl"&gt;&lt;/b&gt;&lt;b class="br"&gt;&lt;/b&gt;&lt;/b&gt; 
&lt;/div&gt;
</pre>');

$page->addToMain('<p>Here is an OOCSS module written in PHPOOCSS:</p>');

$page->addToMain('<pre>
$grab = new Module("<strong>&lt;h3&gt;grab&lt;/h3&gt;</strong>", <strong>"&lt;p&gt;Body&lt;/p&gt;</strong>", "grab")
</pre>');

$page->addToMain('<h3>Templates</h3>');

$page->addToMain('<p>
	OOCSS templates aren\'t quite as complex as modules, but they do require a 
	specific HTML structure that gets repeated on every page of your site.
	With PHOOCS you just add content (HTML or modules) to the head, foot, left 
	column, right column, or center column. And while you\'re at it, add your 
	repeated disclaimers, meta tags, and script tags, too.
</p>');

$page->addToMain('<p>Here is how you would add the "grab" module (from 
above) to your left column:</p>');

$page->addToMain('<pre>
$page = new Page();
$page->addToLeftCol($grab);
</pre>');



$page->addToMain('<h3>Other conventions</h3>');

$page->addToMain('<p>We could add support for  
	other OOCSS conventions like lines and units, but those are already 
	relatively simple and do not benefit as much from PHP suport.</p>
');

$page->addToMain('<h3>Sample pages</h3><p>These sample pages are built 
on Phoocs. </p>');

$page->addToMain('
	<ul>
		<li><a href="template.php">Templates</a></li>
		<li><a href="mod_doc.php">Modules</a></li>
	</ul>');

$page->draw();

?>
