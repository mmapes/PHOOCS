<?php 
require_once(dirname(__FILE__) . '/Html.php');

/**
 * A "module" as defined by OOCSS
 * @link http://oocss.org/module.html
 * @example $M = new Module('Hello', 'Hello, world.');
 * $M->addClass('simpleExt');
 * $M->draw();
 */
Class Module extends Html
{
	protected $head; // = "<h3>HEADER</h3>";
	protected $body; //  = "<p>BODY</p>";
	protected $foot;
	protected $classes = Array("mod");
	protected $classes_hd = Array("hd");
	protected $classes_bd = Array("bd");
	protected $classes_ft = Array("ft");
	protected $moduleTemplate = 
		'<div class="%s">
			<b class="top"><b class="tl"></b><b class="tr"></b></b>
			<div class="inner">
				%s
				%s
				%s
			</div>
			<b class="bottom"><b class="bl"></b><b class="br"></b></b> 
		</div>';
	
	public function __construct($head = NULL, $body = NULL, $class = NULL)
	{
		if (isset($head))
		{
			$this->head = $head;
		}
		if (isset($body))
		{
			$this->body = $body;
		}
		if (isset($class) && is_string($class))
		{
			$this->classes[] = $class;
		}
	}
	
	public function setHead($head)
	{
		$this->head = $head;
	}
	
	public function setBody($body)
	{
		$this->body = $body;
	}
	
	public function setFoot($foot)
	{
		$this->foot = $foot;
	}

	public function addClass($class)
	{
		$this->classes[] = $class;
	}

	public function addHeadClass($class)
	{
		$this->classes_hd[] = $class;
	}

	public function addBodyClass($class)
	{
		$this->classes_bd[] = $class;
	}

	public function addFootClass($class)
	{
		$this->classes_ft[] = $class;
	}

	protected function hasContent()
	{
		return (isset($this->head) || isset($this->body) || isset($this->foot));
	}

	protected function getHead()
	{
		if (isset($this->head) && $this->head != '')
		{
			return sprintf(
				'<div class="%s">
					%s
				</div>',
				implode(' ', $this->classes_hd),
				$this->head
			);
		}
		return '';
	}
	
	protected function getBody()
	{
		if (isset($this->body) && $this->body != '')
		{
			return sprintf(
				'<div class="%s">
					%s
				</div>',
				implode(' ', $this->classes_bd),
				$this->body
			);
		}
		return '';
	}
	
	protected function getFoot()
	{
		if (isset($this->foot) && $this->foot != '')
		{
			return sprintf(
				'<div class="%s">
					%s
				</div>',
				implode(' ', $this->classes_ft),
				$this->foot
			);
		}
		return '';
	}
	
	public function getHtml()
	{
		if ($this->hasContent())
		{
			return sprintf(
				$this->moduleTemplate,
				implode(" ", $this->classes),
				$this->getHead(),
				$this->getBody(),
				$this->getFoot()
			);
		}
		return '';
	}
}
?>