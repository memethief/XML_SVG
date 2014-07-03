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
interface SVGTransform
{
// Transform Types
	/**
	 * @const SVG_TRANSFORM_UNKNOWN
	 */
	public static final $SVG_TRANSFORM_UNKNOWN = 0;

	/**
	 * @const SVG_TRANSFORM_MATRIX
	 */
	public static final $SVG_TRANSFORM_MATRIX = 1;

	/**
	 * @const SVG_TRANSFORM_TRANSLATE
	 */
	public static final $SVG_TRANSFORM_TRANSLATE = 2;

	/**
	 * @const SVG_TRANSFORM_SCALE
	 */
	public static final $SVG_TRANSFORM_SCALE = 3;

	/**
	 * @const SVG_TRANSFORM_ROTATE
	 */
	public static final $SVG_TRANSFORM_ROTATE = 4;

	/**
	 * @const SVG_TRANSFORM_SKEWX
	 */
	public static final $SVG_TRANSFORM_SKEWX = 5;

	/**
	 * @const SVG_TRANSFORM_SKEWY
	 */
	public static final $SVG_TRANSFORM_SKEWY = 6;

	/**
	 * read-only member
	 * @var unsignedshort type
	 */
	public $type;
	/**
	 * read-only member
	 * @var SVGMatrix matrix
	 */
	public $matrix;
	/**
	 * read-only member
	 * @var float angle
	 */
	public $angle;
	/**
	 * @param SVGMatrix $matrix
	 * @return void
	 * @throws DOMException
	 */
	public function setMatrix(SVGMatrix $matrix);

	/**
	 * @param float $tx
	 * @param float $ty
	 * @return void
	 * @throws DOMException
	 */
	public function setTranslate($tx, $ty);

	/**
	 * @param float $sx
	 * @param float $sy
	 * @return void
	 * @throws DOMException
	 */
	public function setScale($sx, $sy);

	/**
	 * @param float $angle
	 * @param float $cx
	 * @param float $cy
	 * @return void
	 * @throws DOMException
	 */
	public function setRotate($angle, $cx, $cy);

	/**
	 * @param float $angle
	 * @return void
	 * @throws DOMException
	 */
	public function setSkewX($angle);

	/**
	 * @param float $angle
	 * @return void
	 * @throws DOMException
	 */
	public function setSkewY($angle);

}

