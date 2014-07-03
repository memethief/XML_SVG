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
 * @extends Document
 * @extends DocumentEvent
 */
interface SVGDocument
	extends Document,  DocumentEvent
{
	/**
	 * read-only member
	 * @var DOMString title
	 */
	public $title;
	/**
	 * read-only member
	 * @var DOMString referrer
	 */
	public $referrer;
	/**
	 * read-only member
	 * @var DOMString domain
	 */
	public $domain;
	/**
	 * read-only member
	 * @var DOMString URL
	 */
	public $URL;
	/**
	 * read-only member
	 * @var SVGSVGElement rootElement
	 */
	public $rootElement;
}

