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
 * @extends SVGExternalResourcesRequired
 * @extends SVGStylable
 * @extends SVGElement
 * @extends SVGTests
 * @extends SVGLangSpace
 */
interface SVGTextContentElement
	extends SVGExternalResourcesRequired,  SVGStylable,  SVGElement,  SVGTests,  SVGLangSpace
{
// lengthAdjust Types
	/**
	 * @const LENGTHADJUST_UNKNOWN
	 */
	public static final $LENGTHADJUST_UNKNOWN = 0;

	/**
	 * @const LENGTHADJUST_SPACING
	 */
	public static final $LENGTHADJUST_SPACING = 1;

	/**
	 * @const LENGTHADJUST_SPACINGANDGLYPHS
	 */
	public static final $LENGTHADJUST_SPACINGANDGLYPHS = 2;

	/**
	 * read-only member
	 * @var SVGAnimatedLength textLength
	 */
	public $textLength;
	/**
	 * read-only member
	 * @var SVGAnimatedEnumeration lengthAdjust
	 */
	public $lengthAdjust;
	/**
	 * @return long
	 */
	public function getNumberOfChars();

	/**
	 * @return float
	 */
	public function getComputedTextLength();

	/**
	 * @param unsigned long $charnum
	 * @param unsigned long $nchars
	 * @return float
	 * @throws DOMException
	 */
	public function getSubStringLength($charnum, $nchars);

	/**
	 * @param unsigned long $charnum
	 * @return SVGPoint
	 * @throws DOMException
	 */
	public function getStartPositionOfChar($charnum);

	/**
	 * @param unsigned long $charnum
	 * @return SVGPoint
	 * @throws DOMException
	 */
	public function getEndPositionOfChar($charnum);

	/**
	 * @param unsigned long $charnum
	 * @return SVGRect
	 * @throws DOMException
	 */
	public function getExtentOfChar($charnum);

	/**
	 * @param unsigned long $charnum
	 * @return float
	 * @throws DOMException
	 */
	public function getRotationOfChar($charnum);

	/**
	 * @param SVGPoint $point
	 * @return long
	 */
	public function getCharNumAtPosition(SVGPoint $point);

	/**
	 * @param unsigned long $charnum
	 * @param unsigned long $nchars
	 * @return void
	 * @throws DOMException
	 */
	public function selectSubString($charnum, $nchars);

}

