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
 * @extends SVGRenderingIntent
 */
interface SVGColorProfileElement
	extends SVGElement,  SVGURIReference,  SVGRenderingIntent
{
	/**
	 * @var DOMString local
	 */
	public $local;
	/**
	 * @var DOMString name
	 */
	public $name;
	/**
	 * @var unsignedshort renderingIntent
	 */
	public $renderingIntent;
}

