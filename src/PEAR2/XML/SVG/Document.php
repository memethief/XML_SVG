<?php
/**
 * W3C DOM-compliant SVG package
 *
 * DOM compliance is currently in progress. For details on the SVG DOM see:
 * @link{http://www.w3.org/TR/SVG/svgdom.html}
 *
 * @category XML
 * @author  David Leaman <david@davidleaman.ca>
 * @package PEAR2_XML_SVG
 * @license http://www.fsf.org/copyleft/lgpl.html
 */

namespace PEAR2\XML\SVG;

/**
 * XML_SVG_Document
 *
 * This extends the DOMDocument class. It wraps the XML_SVG_Element output
 * with a content header, xml definition and doctype.
 *
 * @package XML_SVG
 */
class XML_SVG_Document extends \DOMDocument
{
	private static $singleton;

	private $_version  = '1.0';
	private $_encoding = 'iso-8859-1';

	public static function getInstance() {
		if (empty(self::$singleton)) {
			self::$singleton = new self();
		}
		return self::$singleton;
	}

	function __construct() {
		parent::__construct($this->_version, $this->_encoding);
		$this->formatOutput = true;
	}

}
