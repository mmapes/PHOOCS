Phoocs is PHP + OOCSS. It is a very lightweight framework that wraps two of the coolest features of OOCSS -- templates and modules -- into simple, clean, object-oriented PHP classes.


INSTALLATION

Download Phoocs and copy it to your project. It consists of two folders:

/oocss/ - you can replace this entire folder with the latest version of OOCSS from the github repository at https://github.com/stubbornella/oocss/

/php/


SAMPLE USAGE

(optional) - we recommend modifying the class in Page_YOURSITE.php with details specific to your site such as charsets, meta tags, footers, script includes, and the like. Make sure you've included the link to /oocss/!

Then, create a page based on the OOCSS template (see components at http://oocss.org/template.html):

<?php
// if you performed step 1...
require_once('/your_path_to_phoocs/php/Page_YOURSITE.php');
$page = new Page_YOURSITE(); 

// or, if you skipped step 1...
require_once('/your_path_to_phoocs/php/Page.php');
$page = new Page(); 

// then, 
$page->addToMain('<p>Hello, world</p>');

// look in Page.php for other public methods, including
// setHead();
// addToLeftCol();
// addToRightCol();
// setFoot();

// finally, don't forget...
$page->draw();

?>