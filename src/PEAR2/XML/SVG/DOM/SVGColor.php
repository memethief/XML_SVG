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
 * @extends CSSValue
 */
interface SVGColor
	extends CSSValue
{
// Color Types
	/**
	 * @const SVG_COLORTYPE_UNKNOWN
	 */
	public static final $SVG_COLORTYPE_UNKNOWN = 0;

	/**
	 * @const SVG_COLORTYPE_RGBCOLOR
	 */
	public static final $SVG_COLORTYPE_RGBCOLOR = 1;

	/**
	 * @const SVG_COLORTYPE_RGBCOLOR_ICCCOLOR
	 */
	public static final $SVG_COLORTYPE_RGBCOLOR_ICCCOLOR = 2;

	/**
	 * @const SVG_COLORTYPE_CURRENTCOLOR
	 */
	public static final $SVG_COLORTYPE_CURRENTCOLOR = 3;

	/**
	 * read-only member
	 * @var unsignedshort colorType
	 */
	public $colorType;
	/**
	 * read-only member
	 * @var RGBColor rgbColor
	 */
	public $rgbColor;
	/**
	 * read-only member
	 * @var SVGICCColor iccColor
	 */
	public $iccColor;
	/**
	 * @param DOMString $rgbColor
	 * @return void
	 * @throws SVGException
	 */
	public function setRGBColor(DOMString $rgbColor);

	/**
	 * @param DOMString $rgbColor
	 * @param DOMString $iccColor
	 * @return void
	 * @throws SVGException
	 */
	public function setRGBColorICCColor(DOMString $rgbColor, DOMString $iccColor);

	/**
	 * @param unsigned short $colorType
	 * @param DOMString $rgbColor
	 * @param DOMString $iccColor
	 * @return void
	 * @throws SVGException
	 */
	public function setColor($colorType, DOMString $rgbColor, DOMString $iccColor);

}

