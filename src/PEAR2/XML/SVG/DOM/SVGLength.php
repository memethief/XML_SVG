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
interface SVGLength
{
// Length Unit Types
	/**
	 * @const SVG_LENGTHTYPE_UNKNOWN
	 */
	public static final $SVG_LENGTHTYPE_UNKNOWN = 0;

	/**
	 * @const SVG_LENGTHTYPE_NUMBER
	 */
	public static final $SVG_LENGTHTYPE_NUMBER = 1;

	/**
	 * @const SVG_LENGTHTYPE_PERCENTAGE
	 */
	public static final $SVG_LENGTHTYPE_PERCENTAGE = 2;

	/**
	 * @const SVG_LENGTHTYPE_EMS
	 */
	public static final $SVG_LENGTHTYPE_EMS = 3;

	/**
	 * @const SVG_LENGTHTYPE_EXS
	 */
	public static final $SVG_LENGTHTYPE_EXS = 4;

	/**
	 * @const SVG_LENGTHTYPE_PX
	 */
	public static final $SVG_LENGTHTYPE_PX = 5;

	/**
	 * @const SVG_LENGTHTYPE_CM
	 */
	public static final $SVG_LENGTHTYPE_CM = 6;

	/**
	 * @const SVG_LENGTHTYPE_MM
	 */
	public static final $SVG_LENGTHTYPE_MM = 7;

	/**
	 * @const SVG_LENGTHTYPE_IN
	 */
	public static final $SVG_LENGTHTYPE_IN = 8;

	/**
	 * @const SVG_LENGTHTYPE_PT
	 */
	public static final $SVG_LENGTHTYPE_PT = 9;

	/**
	 * @const SVG_LENGTHTYPE_PC
	 */
	public static final $SVG_LENGTHTYPE_PC = 10;

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

