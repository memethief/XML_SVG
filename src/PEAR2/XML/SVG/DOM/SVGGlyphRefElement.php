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
 * @extends SVGElement
 * @extends SVGURIReference
 * @extends SVGStylable
 */
interface SVGGlyphRefElement
	extends SVGElement,  SVGURIReference,  SVGStylable
{
	/**
	 * @var DOMString glyphRef
	 * @throws DOMException
	 */
	public $glyphRef;
	/**
	 * @var DOMString format
	 * @throws DOMException
	 */
	public $format;
	/**
	 * @var float x
	 * @throws DOMException
	 */
	public $x;
	/**
	 * @var float y
	 * @throws DOMException
	 */
	public $y;
	/**
	 * @var float dx
	 * @throws DOMException
	 */
	public $dx;
	/**
	 * @var float dy
	 * @throws DOMException
	 */
	public $dy;
}

