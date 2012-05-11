<?php 
require_once(dirname(__FILE__) . '/Html.php');

/**
 * An HTML page using the template and grids defined by OOCSS
 * @link http://oocss.org/template.html
 */
class Page extends Html
{
	protected $beforePage;
	protected $main;
	protected $foot;
	protected $footScripts;
	protected $head;
	protected $leftCol;
	protected $pageClasses = array('');
	protected $rightCol;
	protected $title;

	protected $headContent = '
		<link type="text/css" rel="stylesheet" media="screen" href="/resources/styles/all.css" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
	protected $pageTemplate = '
		<!DOCTYPE html>
		<html lang="en">
		<head>
		<meta charset="utf-8">
			<title>%s</title>
			%s
		</head>
		<body>
		%s
		<div class="page %s">
			%s
			<div class="body">
				%s
				%s
				<div class="main">
					%s
				</div>
			</div>
			<div class="foot">
				%s
				%s
			</div>
		</div>
		</body></html>';
	
	public function setTitle($t)
	{
		$this->title = $t;
	}

	/**
	 * Sets the head content, e.g., meta tags, link tags. See also addToHeadTagContent() 
	 * to add to the content that is there already.
	 * @param head_content string 
	 */
	public function setHeadTagContent($h)
	{
		$this->headContent = $h;
	}
	
	/**
	 * Adds head_content to what's there already. See also setHeadTagContent().
	 * @param head_content string 
	 */
	public function addToHeadTagContent($h)
	{
		$this->headContent .= $h;
	}
	
	/**
	 * Add a single class to the list of page classes, e.g., "liquid"
	 * @param class_name string
	 */
	public function addToPageClass($s)
	{
		$this->pageClasses[] = $s;
	}
	
	/**
	 * Set the class name(s) for the page. See also addToPageClass()
	 * @param class_name(s) string or array
	 */
	public function setPageClasses($rs)
	{
		if (is_string($rs))
		{
			$this->pageClasses = array($rs);
		}
		if (is_array($rs))
		{
			$this->pageClasses = $rs;
		}
	}
	
	public function setBeforePage($h)
	{
		if (is_string($h))
		{
			$this->beforePage = $h;
		}
		if (is_a($h, 'Html'))
		{
			$this->beforePage = $h->getHtml();
		}
	}

	public function setHead($h)
	{
		if (is_a($h, 'Html'))
		{
			$this->head = $h->getHtml();
		}
		if (is_string($h))
		{
			$this->head = $h;
		}
	}
	
	public function addToHead($h)
	{
		if (is_a($h, 'Html'))
		{
			$this->head .= $h->getHtml();
		}
		if (is_string($h))
		{
			$this->head .= $h;
		}
	}
	
	public function addToLeftCol($h)
	{
		if (is_a($h, 'Html'))
		{
			$this->leftCol .= $h->getHtml();
		}
		if (is_string($h))
		{
			$this->leftCol .= $h;
		}
	}

	public function addToRightCol($h)
	{
	if (is_a($h, 'Html'))
		{
			$this->rightCol .= $h->getHtml();
		}
		if (is_string($h))
		{
			$this->rightCol .= $h;
		}
	}

	public function addToMain($h)
	{
		if (is_string($h))
		{
			$this->main .= $h;
		}
		if (is_a($h, 'Html'))
		{
			$this->main .= $h->getHtml();
		}
	}

	public function setFoot($h)
	{
		if (is_a($h, 'Html'))
		{
			$this->foot = $h->getHtml();
		}
		if (is_string($h))
		{
			$this->foot = $h;
		}
	}
	
	public function addToFootScripts($s)
	{
		if (is_string($s))
		{
			$this->footScripts .= $s;
		}
	}
	
	protected function getPageClasses()
	{
		return implode(' ', $this->pageClasses);
	}

	protected function getHead()
	{
		if (isset($this->head))
		{
			return sprintf(
				'<div class="head">
					%s
				</div>',
				$this->head
			);
		}
	}
	
	protected function getLeftCol()
	{
		if (isset($this->leftCol))
		{
			return sprintf(
				'<div class="leftCol">
					%s
				</div>',
				$this->leftCol
			);
		}
		return '';
	}
	
	protected function getRightCol()
	{
		if (isset($this->rightCol))
		{
			return sprintf(
				'<div class="rightCol">
					%s
				</div>',
				$this->rightCol
			);
		}
		return '';
	}

	public function getHtml() 
	{
		return sprintf(
			$this->pageTemplate,
			$this->title,
			$this->headContent,
			$this->beforePage,
			$this->getPageClasses(),
			$this->getHead(),
			$this->getLeftCol(),
			$this->getRightCol(),
			$this->main,
			$this->foot,
			$this->footScripts
		);
	}
}
?>