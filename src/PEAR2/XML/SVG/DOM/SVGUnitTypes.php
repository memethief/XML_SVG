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
 */
interface SVGUnitTypes
{
// Unit Types
	/**
	 * @const SVG_UNIT_TYPE_UNKNOWN
	 */
	public static final $SVG_UNIT_TYPE_UNKNOWN = 0;

	/**
	 * @const SVG_UNIT_TYPE_USERSPACEONUSE
	 */
	public static final $SVG_UNIT_TYPE_USERSPACEONUSE = 1;

	/**
	 * @const SVG_UNIT_TYPE_OBJECTBOUNDINGBOX
	 */
	public static final $SVG_UNIT_TYPE_OBJECTBOUNDINGBOX = 2;

}

