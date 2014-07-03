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
interface SVGMatrix
{
	/**
	 * @var float a
	 * @throws DOMException
	 */
	public $a;
	/**
	 * @var float b
	 * @throws DOMException
	 */
	public $b;
	/**
	 * @var float c
	 * @throws DOMException
	 */
	public $c;
	/**
	 * @var float d
	 * @throws DOMException
	 */
	public $d;
	/**
	 * @var float e
	 * @throws DOMException
	 */
	public $e;
	/**
	 * @var float f
	 * @throws DOMException
	 */
	public $f;
	/**
	 * @param SVGMatrix $secondMatrix
	 * @return SVGMatrix
	 */
	public function multiply(SVGMatrix $secondMatrix);

	/**
	 * @return SVGMatrix
	 * @throws SVGException
	 */
	public function inverse();

	/**
	 * @param float $x
	 * @param float $y
	 * @return SVGMatrix
	 */
	public function translate($x, $y);

	/**
	 * @param float $scaleFactor
	 * @return SVGMatrix
	 */
	public function scale($scaleFactor);

	/**
	 * @param float $scaleFactorX
	 * @param float $scaleFactorY
	 * @return SVGMatrix
	 */
	public function scaleNonUniform($scaleFactorX, $scaleFactorY);

	/**
	 * @param float $angle
	 * @return SVGMatrix
	 */
	public function rotate($angle);

	/**
	 * @param float $x
	 * @param float $y
	 * @return SVGMatrix
	 * @throws SVGException
	 */
	public function rotateFromVector($x, $y);

	/**
	 * @return SVGMatrix
	 */
	public function flipX();

	/**
	 * @return SVGMatrix
	 */
	public function flipY();

	/**
	 * @param float $angle
	 * @return SVGMatrix
	 */
	public function skewX($angle);

	/**
	 * @param float $angle
	 * @return SVGMatrix
	 */
	public function skewY($angle);

}

