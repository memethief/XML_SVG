<?php
/**
 * W3C DOM-compliant SVG package
 * 
 * DOM compliance is currently in progress.
 * For details on the SVG DOM see:
 * @link{http://www.w3.org/TR/SVG/svgdom.html}
 * 
 * @category XML
 * @author  David Leaman <david@davidleaman.ca>
 * @package PEAR2_XML_SVG
 * @license http://www.fsf.org/copyleft/lgpl.html
 */
namespace PEAR2\XML\SVG\DOM;

/**
 * @extends EventTarget
 */
interface SVGElementInstance
	extends EventTarget
{
	/**
	 * read-only member
	 * @var SVGElement correspondingElement
	 */
	public $correspondingElement;
	/**
	 * read-only member
	 * @var SVGUseElement correspondingUseElement
	 */
	public $correspondingUseElement;
	/**
	 * read-only member
	 * @var SVGElementInstance parentNode
	 */
	public $parentNode;
	/**
	 * read-only member
	 * @var SVGElementInstanceList childNodes
	 */
	public $childNodes;
	/**
	 * read-only member
	 * @var SVGElementInstance firstChild
	 */
	public $firstChild;
	/**
	 * read-only member
	 * @var SVGElementInstance lastChild
	 */
	public $lastChild;
	/**
	 * read-only member
	 * @var SVGElementInstance previousSibling
	 */
	public $previousSibling;
	/**
	 * read-only member
	 * @var SVGElementInstance nextSibling
	 */
	public $nextSibling;
}

