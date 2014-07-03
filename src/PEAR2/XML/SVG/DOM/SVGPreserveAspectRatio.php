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
interface SVGPreserveAspectRatio
{
// Alignment Types
	/**
	 * @const SVG_PRESERVEASPECTRATIO_UNKNOWN
	 */
	public static final $SVG_PRESERVEASPECTRATIO_UNKNOWN = 0;

	/**
	 * @const SVG_PRESERVEASPECTRATIO_NONE
	 */
	public static final $SVG_PRESERVEASPECTRATIO_NONE = 1;

	/**
	 * @const SVG_PRESERVEASPECTRATIO_XMINYMIN
	 */
	public static final $SVG_PRESERVEASPECTRATIO_XMINYMIN = 2;

	/**
	 * @const SVG_PRESERVEASPECTRATIO_XMIDYMIN
	 */
	public static final $SVG_PRESERVEASPECTRATIO_XMIDYMIN = 3;

	/**
	 * @const SVG_PRESERVEASPECTRATIO_XMAXYMIN
	 */
	public static final $SVG_PRESERVEASPECTRATIO_XMAXYMIN = 4;

	/**
	 * @const SVG_PRESERVEASPECTRATIO_XMINYMID
	 */
	public static final $SVG_PRESERVEASPECTRATIO_XMINYMID = 5;

	/**
	 * @const SVG_PRESERVEASPECTRATIO_XMIDYMID
	 */
	public static final $SVG_PRESERVEASPECTRATIO_XMIDYMID = 6;

	/**
	 * @const SVG_PRESERVEASPECTRATIO_XMAXYMID
	 */
	public static final $SVG_PRESERVEASPECTRATIO_XMAXYMID = 7;

	/**
	 * @const SVG_PRESERVEASPECTRATIO_XMINYMAX
	 */
	public static final $SVG_PRESERVEASPECTRATIO_XMINYMAX = 8;

	/**
	 * @const SVG_PRESERVEASPECTRATIO_XMIDYMAX
	 */
	public static final $SVG_PRESERVEASPECTRATIO_XMIDYMAX = 9;

	/**
	 * @const SVG_PRESERVEASPECTRATIO_XMAXYMAX
	 */
	public static final $SVG_PRESERVEASPECTRATIO_XMAXYMAX = 10;

// Meet-or-slice Types
	/**
	 * @const SVG_MEETORSLICE_UNKNOWN
	 */
	public static final $SVG_MEETORSLICE_UNKNOWN = 0;

	/**
	 * @const SVG_MEETORSLICE_MEET
	 */
	public static final $SVG_MEETORSLICE_MEET = 1;

	/**
	 * @const SVG_MEETORSLICE_SLICE
	 */
	public static final $SVG_MEETORSLICE_SLICE = 2;

	/**
	 * @var unsignedshort align
	 * @throws DOMException
	 */
	public $align;
	/**
	 * @var unsignedshort meetOrSlice
	 * @throws DOMException
	 */
	public $meetOrSlice;
}

