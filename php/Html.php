<?php 
/**
 * Abstract class allows us to assume getHtml() and draw() methods
 */
abstract class Html 
{
	abstract public function getHtml();  /* return your HTML string */ 
	public function draw() {echo $this->getHtml();}
}
?>