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
 * @extends SVGColor
 */
interface SVGPaint
	extends SVGColor
{
// Paint Types
	/**
	 * @const SVG_PAINTTYPE_UNKNOWN
	 */
	public static final $SVG_PAINTTYPE_UNKNOWN = 0;

	/**
	 * @const SVG_PAINTTYPE_RGBCOLOR
	 */
	public static final $SVG_PAINTTYPE_RGBCOLOR = 1;

	/**
	 * @const SVG_PAINTTYPE_RGBCOLOR_ICCCOLOR
	 */
	public static final $SVG_PAINTTYPE_RGBCOLOR_ICCCOLOR = 2;

	/**
	 * @const SVG_PAINTTYPE_NONE
	 */
	public static final $SVG_PAINTTYPE_NONE = 101;

	/**
	 * @const SVG_PAINTTYPE_CURRENTCOLOR
	 */
	public static final $SVG_PAINTTYPE_CURRENTCOLOR = 102;

	/**
	 * @const SVG_PAINTTYPE_URI_NONE
	 */
	public static final $SVG_PAINTTYPE_URI_NONE = 103;

	/**
	 * @const SVG_PAINTTYPE_URI_CURRENTCOLOR
	 */
	public static final $SVG_PAINTTYPE_URI_CURRENTCOLOR = 104;

	/**
	 * @const SVG_PAINTTYPE_URI_RGBCOLOR
	 */
	public static final $SVG_PAINTTYPE_URI_RGBCOLOR = 105;

	/**
	 * @const SVG_PAINTTYPE_URI_RGBCOLOR_ICCCOLOR
	 */
	public static final $SVG_PAINTTYPE_URI_RGBCOLOR_ICCCOLOR = 106;

	/**
	 * @const SVG_PAINTTYPE_URI
	 */
	public static final $SVG_PAINTTYPE_URI = 107;

	/**
	 * read-only member
	 * @var unsignedshort paintType
	 */
	public $paintType;
	/**
	 * read-only member
	 * @var DOMString uri
	 */
	public $uri;
	/**
	 * @param DOMString $uri
	 * @return void
	 */
	public function setUri(DOMString $uri);

	/**
	 * @param DOMString $iccColor
	 * @param unsigned short $paintType
	 * @param DOMString $uri
	 * @param DOMString $rgbColor
	 * @return void
	 * @throws SVGException
	 */
	public function setPaint(DOMString $iccColor, $paintType, DOMString $uri, DOMString $rgbColor);

}

