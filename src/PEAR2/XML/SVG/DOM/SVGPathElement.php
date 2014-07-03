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
 * @extends SVGTransformable
 * @extends SVGAnimatedPathData
 * @extends SVGElement
 * @extends SVGTests
 * @extends SVGLangSpace
 */
interface SVGPathElement
	extends SVGExternalResourcesRequired,  SVGStylable,  SVGTransformable,  SVGAnimatedPathData,  SVGElement,  SVGTests,  SVGLangSpace
{
	/**
	 * read-only member
	 * @var SVGAnimatedNumber pathLength
	 */
	public $pathLength;
	/**
	 * @return float
	 */
	public function getTotalLength();

	/**
	 * @param float $distance
	 * @return SVGPoint
	 */
	public function getPointAtLength($distance);

	/**
	 * @param float $distance
	 * @return unsignedlong
	 */
	public function getPathSegAtLength($distance);

	/**
	 * @return SVGPathSegClosePath
	 */
	public function createSVGPathSegClosePath();

	/**
	 * @param float $x
	 * @param float $y
	 * @return SVGPathSegMovetoAbs
	 */
	public function createSVGPathSegMovetoAbs($x, $y);

	/**
	 * @param float $x
	 * @param float $y
	 * @return SVGPathSegMovetoRel
	 */
	public function createSVGPathSegMovetoRel($x, $y);

	/**
	 * @param float $x
	 * @param float $y
	 * @return SVGPathSegLinetoAbs
	 */
	public function createSVGPathSegLinetoAbs($x, $y);

	/**
	 * @param float $x
	 * @param float $y
	 * @return SVGPathSegLinetoRel
	 */
	public function createSVGPathSegLinetoRel($x, $y);

	/**
	 * @param float $y1
	 * @param float $x2
	 * @param float $y2
	 * @param float $x
	 * @param float $y
	 * @param float $x1
	 * @return SVGPathSegCurvetoCubicAbs
	 */
	public function createSVGPathSegCurvetoCubicAbs($y1, $x2, $y2, $x, $y, $x1);

	/**
	 * @param float $y1
	 * @param float $x2
	 * @param float $y2
	 * @param float $x
	 * @param float $y
	 * @param float $x1
	 * @return SVGPathSegCurvetoCubicRel
	 */
	public function createSVGPathSegCurvetoCubicRel($y1, $x2, $y2, $x, $y, $x1);

	/**
	 * @param float $y1
	 * @param float $x
	 * @param float $y
	 * @param float $x1
	 * @return SVGPathSegCurvetoQuadraticAbs
	 */
	public function createSVGPathSegCurvetoQuadraticAbs($y1, $x, $y, $x1);

	/**
	 * @param float $y1
	 * @param float $x
	 * @param float $y
	 * @param float $x1
	 * @return SVGPathSegCurvetoQuadraticRel
	 */
	public function createSVGPathSegCurvetoQuadraticRel($y1, $x, $y, $x1);

	/**
	 * @param float $r2
	 * @param float $angle
	 * @param boolean $largeArcFlag
	 * @param boolean $sweepFlag
	 * @param float $x
	 * @param float $y
	 * @param float $r1
	 * @return SVGPathSegArcAbs
	 */
	public function createSVGPathSegArcAbs($r2, $angle, $largeArcFlag, $sweepFlag, $x, $y, $r1);

	/**
	 * @param float $r2
	 * @param float $angle
	 * @param boolean $largeArcFlag
	 * @param boolean $sweepFlag
	 * @param float $x
	 * @param float $y
	 * @param float $r1
	 * @return SVGPathSegArcRel
	 */
	public function createSVGPathSegArcRel($r2, $angle, $largeArcFlag, $sweepFlag, $x, $y, $r1);

	/**
	 * @param float $x
	 * @return SVGPathSegLinetoHorizontalAbs
	 */
	public function createSVGPathSegLinetoHorizontalAbs($x);

	/**
	 * @param float $x
	 * @return SVGPathSegLinetoHorizontalRel
	 */
	public function createSVGPathSegLinetoHorizontalRel($x);

	/**
	 * @param float $y
	 * @return SVGPathSegLinetoVerticalAbs
	 */
	public function createSVGPathSegLinetoVerticalAbs($y);

	/**
	 * @param float $y
	 * @return SVGPathSegLinetoVerticalRel
	 */
	public function createSVGPathSegLinetoVerticalRel($y);

	/**
	 * @param float $y2
	 * @param float $x
	 * @param float $y
	 * @param float $x2
	 * @return SVGPathSegCurvetoCubicSmoothAbs
	 */
	public function createSVGPathSegCurvetoCubicSmoothAbs($y2, $x, $y, $x2);

	/**
	 * @param float $y2
	 * @param float $x
	 * @param float $y
	 * @param float $x2
	 * @return SVGPathSegCurvetoCubicSmoothRel
	 */
	public function createSVGPathSegCurvetoCubicSmoothRel($y2, $x, $y, $x2);

	/**
	 * @param float $x
	 * @param float $y
	 * @return SVGPathSegCurvetoQuadraticSmoothAbs
	 */
	public function createSVGPathSegCurvetoQuadraticSmoothAbs($x, $y);

	/**
	 * @param float $x
	 * @param float $y
	 * @return SVGPathSegCurvetoQuadraticSmoothRel
	 */
	public function createSVGPathSegCurvetoQuadraticSmoothRel($x, $y);

}

