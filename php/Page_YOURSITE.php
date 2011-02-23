<?php
require_once(dirname(__FILE__) . '/Page.php');

/**
 * We recommend you extend Page with a class called Page_YOURSITE where you can 
 * hard-code site-wide defaults such as style sheets, meta tags, and disclaimers.
 * This is one example.
 */
class Page_YOURSITE extends Page
{
	protected $pageClasses = array('liquid');
	protected $headContent = '
		<link type="text/css" rel="stylesheet" media="screen" href="/oocss/all.css" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
	protected $footer = '<div id="footer">Your site\'s disclaimers and Copyright &copy; statements</div>';
	protected $footScripts = '<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>';	
}

?>