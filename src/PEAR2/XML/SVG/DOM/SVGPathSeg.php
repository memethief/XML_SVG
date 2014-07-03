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
interface SVGPathSeg
{
// Path Segment Types
	/**
	 * @const PATHSEG_UNKNOWN
	 */
	public static final $PATHSEG_UNKNOWN = 0;

	/**
	 * @const PATHSEG_CLOSEPATH
	 */
	public static final $PATHSEG_CLOSEPATH = 1;

	/**
	 * @const PATHSEG_MOVETO_ABS
	 */
	public static final $PATHSEG_MOVETO_ABS = 2;

	/**
	 * @const PATHSEG_MOVETO_REL
	 */
	public static final $PATHSEG_MOVETO_REL = 3;

	/**
	 * @const PATHSEG_LINETO_ABS
	 */
	public static final $PATHSEG_LINETO_ABS = 4;

	/**
	 * @const PATHSEG_LINETO_REL
	 */
	public static final $PATHSEG_LINETO_REL = 5;

	/**
	 * @const PATHSEG_CURVETO_CUBIC_ABS
	 */
	public static final $PATHSEG_CURVETO_CUBIC_ABS = 6;

	/**
	 * @const PATHSEG_CURVETO_CUBIC_REL
	 */
	public static final $PATHSEG_CURVETO_CUBIC_REL = 7;

	/**
	 * @const PATHSEG_CURVETO_QUADRATIC_ABS
	 */
	public static final $PATHSEG_CURVETO_QUADRATIC_ABS = 8;

	/**
	 * @const PATHSEG_CURVETO_QUADRATIC_REL
	 */
	public static final $PATHSEG_CURVETO_QUADRATIC_REL = 9;

	/**
	 * @const PATHSEG_ARC_ABS
	 */
	public static final $PATHSEG_ARC_ABS = 10;

	/**
	 * @const PATHSEG_ARC_REL
	 */
	public static final $PATHSEG_ARC_REL = 11;

	/**
	 * @const PATHSEG_LINETO_HORIZONTAL_ABS
	 */
	public static final $PATHSEG_LINETO_HORIZONTAL_ABS = 12;

	/**
	 * @const PATHSEG_LINETO_HORIZONTAL_REL
	 */
	public static final $PATHSEG_LINETO_HORIZONTAL_REL = 13;

	/**
	 * @const PATHSEG_LINETO_VERTICAL_ABS
	 */
	public static final $PATHSEG_LINETO_VERTICAL_ABS = 14;

	/**
	 * @const PATHSEG_LINETO_VERTICAL_REL
	 */
	public static final $PATHSEG_LINETO_VERTICAL_REL = 15;

	/**
	 * @const PATHSEG_CURVETO_CUBIC_SMOOTH_ABS
	 */
	public static final $PATHSEG_CURVETO_CUBIC_SMOOTH_ABS = 16;

	/**
	 * @const PATHSEG_CURVETO_CUBIC_SMOOTH_REL
	 */
	public static final $PATHSEG_CURVETO_CUBIC_SMOOTH_REL = 17;

	/**
	 * @const PATHSEG_CURVETO_QUADRATIC_SMOOTH_ABS
	 */
	public static final $PATHSEG_CURVETO_QUADRATIC_SMOOTH_ABS = 18;

	/**
	 * @const PATHSEG_CURVETO_QUADRATIC_SMOOTH_REL
	 */
	public static final $PATHSEG_CURVETO_QUADRATIC_SMOOTH_REL = 19;

	/**
	 * read-only member
	 * @var unsignedshort pathSegType
	 */
	public $pathSegType;
	/**
	 * read-only member
	 * @var DOMString pathSegTypeAsLetter
	 */
	public $pathSegTypeAsLetter;
}

