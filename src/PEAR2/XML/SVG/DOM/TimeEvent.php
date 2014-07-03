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
 * @extends Event
 */
interface TimeEvent
	extends Event
{
	/**
	 * read-only member
	 * @var AbstractView view
	 */
	public $view;
	/**
	 * read-only member
	 * @var long detail
	 */
	public $detail;
	/**
	 * @param DOMString $typeArg
	 * @param AbstractView $viewArg
	 * @param long $detailArg
	 * @return void
	 */
	public function initTimeEvent(DOMString $typeArg, AbstractView $viewArg, $detailArg);

}

