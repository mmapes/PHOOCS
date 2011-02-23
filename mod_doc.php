<?php
require_once(dirname(__FILE__) . '/php/Page_YOURSITE.php'); 
require_once(dirname(__FILE__) . '/php/Module.php'); 

// We recommend you extend Page with a class called Page_YOURSITE and assign 
// site-wide head and foot content within your class.
$page = new Page_YOURSITE();

$page->setTitle('Standard Module Format');

$page->setBeforePage('<h1>Modules</h1>');

$page->setHead('<h2>Block Structures</h2>
	<p>There are three basic block structures that you can build from. Examine how the structures work in Firebug, Dragonfly, WebKit Inspector or by applying the stylesheet mod_debug.css</p>'
);

$mod = new Module();
$mod->setHead('<h3>mod </h3>');
$mod->setBody('<p>Mod is the basic container, all other containers inherit from this one. This is the high performance container that should be used unless you specifically need another type of container.</p>
	<ul class="simpleList">
		<li>One tiny image</li>
		<li>Expands to any height or width</li>
		<li>Compatible with any content</li>
		<li>Choose for any container object that doesn\'t require outside transparency or complex borders.</li>
	</ul>');

$pop = new Module();
$pop->setHead('<h3>pop</h3>');
$pop->setBody('
	<p>Use for popups and other containers that need outside transparency.</p>
	<ul class="simpleList">
		<li>One image</li>
		<li>Height and width limited by image size</li>
		<li>Compatible with any container, but not any content</li>
		<li>Choose when you require outside transparency which cannot be simulated. (do i need to make this work with clip rather than bkg position?)</li>
	</ul>
	<p>Inspired by Leslie Sommers mojo blocks.</p>
');

$complex = new Module();
$complex->setHead('<h3>complex</h3>');
$complex->setBody('
	<p>complex should be used in cases where you require images for borders because borders or drop shadows are too complex to be simulated via borders on mod and/or inner. </p>
	<ul class="simpleList">
		<li>One image</li>
		<li>Height and width limited by image size</li>
		<li>Compatible with any content</li>
		<li>Choose when you require complex borders which cannot be simulated via css borders on mod and inner.</li>
	</ul>
	<p>Inspired by a conversation with Arnaud.</p>
');


$excerpt = new Module('<h3>excerpt</h3>', '<p>Body</p>');
$excerpt->setFoot('<p>Foot</p>');
$excerpt->addClass('complex excerpt');
$excerpt->addHeadClass('section');
$excerpt->addFootClass('act');

$page->addToLeftCol($mod);
$page->addToLeftCol(new Module('<h3>grab</h3>',      '<p>Body</p>', 'grab'));
$page->addToLeftCol(new Module('<h3>simpleExt</h3>', '<p>Body</p>', 'simpleExt'));
$page->addToLeftCol(new Module('<h3>simple</h3>',    '<p>Body</p>', 'simple'));
$page->addToLeftCol(new Module('<h3>noted</h3>',     '<p>Body</p>', 'noted'));
$page->addToLeftCol(new Module('<h3>talk</h3>',      '<p>Body</p>', 'talk'));
$page->addToLeftCol(new Module('<h3>me</h3>',        '<p>Body</p>', 'me'));
$page->addToLeftCol(new Module('<h3>highlight</h3>', '<p>Body</p>', 'highlight'));
$page->addToLeftCol(new Module('<h3>login</h3>',     '<p>Body</p>', 'login'));

$page->addToMain($complex);
$page->addToMain($excerpt);
$page->addToMain(new Module('<h3>flow</h3>', '<p>Body</p>', 'complex flow'));
$page->addToMain(new Module('',              'photo', 'complex photo'));

$page->addToRightCol($pop);
$page->addToRightCol(new Module('<h3>sommers</h3>', '<p>Body</p>', 'pop sommers'));

$page->draw();

?>
