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
interface SVGAngle
{
// Angle Unit Types
	/**
	 * @const SVG_ANGLETYPE_UNKNOWN
	 */
	public static final $SVG_ANGLETYPE_UNKNOWN = 0;

	/**
	 * @const SVG_ANGLETYPE_UNSPECIFIED
	 */
	public static final $SVG_ANGLETYPE_UNSPECIFIED = 1;

	/**
	 * @const SVG_ANGLETYPE_DEG
	 */
	public static final $SVG_ANGLETYPE_DEG = 2;

	/**
	 * @const SVG_ANGLETYPE_RAD
	 */
	public static final $SVG_ANGLETYPE_RAD = 3;

	/**
	 * @const SVG_ANGLETYPE_GRAD
	 */
	public static final $SVG_ANGLETYPE_GRAD = 4;

	/**
	 * read-only member
	 * @var unsignedshort unitType
	 */
	public $unitType;
	/**
	 * @var float value
	 * @throws DOMException
	 */
	public $value;
	/**
	 * @var float valueInSpecifiedUnits
	 * @throws DOMException
	 */
	public $valueInSpecifiedUnits;
	/**
	 * @var DOMString valueAsString
	 * @throws DOMException
	 */
	public $valueAsString;
	/**
	 * @param unsigned short $unitType
	 * @param float $valueInSpecifiedUnits
	 * @return void
	 * @throws DOMException
	 */
	public function newValueSpecifiedUnits($unitType, $valueInSpecifiedUnits);

	/**
	 * @param unsigned short $unitType
	 * @return void
	 * @throws DOMException
	 */
	public function convertToSpecifiedUnits($unitType);

}

