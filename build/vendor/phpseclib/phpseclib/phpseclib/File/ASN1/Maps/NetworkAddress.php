<?php

/**
 * NetworkAddress
 *
 * PHP version 5
 *
 * @category  File
 * @package   ASN1
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2016 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://phpseclib.sourceforge.net
 */
namespace RoRdb\phpseclib3\File\ASN1\Maps;

use RoRdb\phpseclib3\File\ASN1;
/**
 * NetworkAddress
 *
 * @package ASN1
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */
abstract class NetworkAddress
{
    const MAP = ['type' => ASN1::TYPE_NUMERIC_STRING];
}
