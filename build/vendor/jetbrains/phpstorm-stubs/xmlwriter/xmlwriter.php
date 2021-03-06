<?php

namespace RoRdb;

// Start of xmlwriter v.0.1
use RoRdb\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware;
use RoRdb\JetBrains\PhpStorm\Internal\PhpStormStubsElementAvailable;
use RoRdb\JetBrains\PhpStorm\Internal\TentativeType;
class XMLWriter
{
    /**
     * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
     * Create new xmlwriter using source uri for output
     * @link https://php.net/manual/en/function.xmlwriter-openuri.php
     * @param string $uri <p>
     * The URI of the resource for the output.
     * </p>
     * @return bool Object oriented style: Returns <b>TRUE</b> on success or <b>FALSE</b> on failure.
     * </p>
     * <p>
     * Procedural style: Returns a new xmlwriter resource for later use with the
     * xmlwriter functions on success, <b>FALSE</b> on error.
     */
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function openUri(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $uri) : bool
    {
    }
    /**
     * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
     * Create new xmlwriter using memory for string output
     * @link https://php.net/manual/en/function.xmlwriter-openmemory.php
     * @return bool Object oriented style: Returns <b>TRUE</b> on success or <b>FALSE</b> on failure.
     * </p>
     * <p>
     * Procedural style: Returns a new xmlwriter resource for later use with the
     * xmlwriter functions on success, <b>FALSE</b> on error.
     */
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function openMemory() : bool
    {
    }
    /**
     * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
     * Toggle indentation on/off.
     * @link https://www.php.net/manual/en/xmlwriter.setindent.php
     * @param bool|int $enable <p>
     * Whether indentation is enabled or number of indent strings
     * </p>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function setIndent(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'bool'], default: '')] $enable) : bool
    {
    }
    /**
     * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
     * Set string used for indenting.
     * @link https://www.php.net/manual/en/xmlwriter.setindentstring.php
     * @param string $indentation <p>
     * The indentation string.
     * </p>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function setIndentString(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $indentation) : bool
    {
    }
    /**
     * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 1.0.0)<br/>
     * Create start comment
     * @link https://php.net/manual/en/function.xmlwriter-startcomment.php
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function startComment() : bool
    {
    }
    /**
     * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 1.0.0)<br/>
     * Create end comment
     * @link https://php.net/manual/en/function.xmlwriter-endcomment.php
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function endComment() : bool
    {
    }
    /**
     * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
     * Create start attribute
     * @link https://php.net/manual/en/function.xmlwriter-startattribute.php
     * @param string $name <p>
     * The attribute name.
     * </p>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function startAttribute(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $name) : bool
    {
    }
    /**
     * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
     * End attribute
     * @link https://php.net/manual/en/function.xmlwriter-endattribute.php
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function endAttribute() : bool
    {
    }
    /**
     * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
     * Write full attribute
     * @link https://php.net/manual/en/function.xmlwriter-writeattribute.php
     * @param string $name <p>
     * The name of the attribute.
     * </p>
     * @param string $value <p>
     * The value of the attribute.
     * </p>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function writeAttribute(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $name, #[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $value) : bool
    {
    }
    /**
     * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
     * Create start namespaced attribute
     * @link https://php.net/manual/en/function.xmlwriter-startattributens.php
     * @param string|null $prefix <p>
     * The namespace prefix.
     * </p>
     * @param string $name <p>
     * The attribute name.
     * </p>
     * @param string $namespace <p>
     * The namespace URI.
     * </p>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function startAttributeNs(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'string|null'], default: '')] $prefix, #[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $name, #[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'string|null'], default: '')] $namespace) : bool
    {
    }
    /**
     * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
     * Write full namespaced attribute
     * @link https://php.net/manual/en/function.xmlwriter-writeattributens.php
     * @param string|null $prefix <p>
     * The namespace prefix.
     * </p>
     * @param string $name <p>
     * The attribute name.
     * </p>
     * @param string $namespace <p>
     * The namespace URI.
     * </p>
     * @param string $value <p>
     * The attribute value.
     * </p>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function writeAttributeNs(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'string|null'], default: '')] $prefix, #[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $name, #[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'string|null'], default: '')] $namespace, #[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $value) : bool
    {
    }
    /**
     * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
     * Create start element tag
     * @link https://php.net/manual/en/function.xmlwriter-startelement.php
     * @param string $name <p>
     * The element name.
     * </p>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function startElement(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $name) : bool
    {
    }
    /**
     * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
     * End current element
     * @link https://php.net/manual/en/function.xmlwriter-endelement.php
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function endElement() : bool
    {
    }
    /**
     * (PHP 5 &gt;= 5.2.0, PECL xmlwriter &gt;= 2.0.4)<br/>
     * End current element
     * @link https://php.net/manual/en/function.xmlwriter-fullendelement.php
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function fullEndElement() : bool
    {
    }
    /**
     * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
     * Create start namespaced element tag
     * @link https://php.net/manual/en/function.xmlwriter-startelementns.php
     * @param string|null $prefix <p>
     * The namespace prefix.
     * </p>
     * @param string $name <p>
     * The element name.
     * </p>
     * @param string $namespace <p>
     * The namespace URI.
     * </p>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function startElementNs(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'string|null'], default: '')] $prefix, #[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $name, #[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'string|null'], default: '')] $namespace) : bool
    {
    }
    /**
     * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
     * Write full element tag
     * @link https://php.net/manual/en/function.xmlwriter-writeelement.php
     * @param string $name <p>
     * The element name.
     * </p>
     * @param string $content [optional] <p>
     * The element contents.
     * </p>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function writeElement(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $name, #[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'string|null'], default: '')] $content = null) : bool
    {
    }
    /**
     * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
     * Write full namespaced element tag
     * @link https://php.net/manual/en/function.xmlwriter-writeelementns.php
     * @param string|null $prefix <p>
     * The namespace prefix.
     * </p>
     * @param string $name <p>
     * The element name.
     * </p>
     * @param string $namespace <p>
     * The namespace URI.
     * </p>
     * @param string $content [optional] <p>
     * The element contents.
     * </p>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function writeElementNs(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'string|null'], default: '')] $prefix, #[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $name, #[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'string|null'], default: '')] $namespace, #[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'string|null'], default: '')] $content = null) : bool
    {
    }
    /**
     * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
     * Create start PI tag
     * @link https://php.net/manual/en/function.xmlwriter-startpi.php
     * @param string $target <p>
     * The target of the processing instruction.
     * </p>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function startPi(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $target) : bool
    {
    }
    /**
     * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
     * End current PI
     * @link https://php.net/manual/en/function.xmlwriter-endpi.php
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function endPi() : bool
    {
    }
    /**
     * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
     * Writes a PI
     * @link https://php.net/manual/en/function.xmlwriter-writepi.php
     * @param string $target <p>
     * The target of the processing instruction.
     * </p>
     * @param string $content <p>
     * The content of the processing instruction.
     * </p>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function writePi(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $target, #[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $content) : bool
    {
    }
    /**
     * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
     * Create start CDATA tag
     * @link https://php.net/manual/en/function.xmlwriter-startcdata.php
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function startCdata() : bool
    {
    }
    /**
     * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
     * End current CDATA
     * @link https://php.net/manual/en/function.xmlwriter-endcdata.php
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function endCdata() : bool
    {
    }
    /**
     * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
     * Write full CDATA tag
     * @link https://php.net/manual/en/function.xmlwriter-writecdata.php
     * @param string $content <p>
     * The contents of the CDATA.
     * </p>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function writeCdata(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $content) : bool
    {
    }
    /**
     * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
     * Write text
     * @link https://php.net/manual/en/function.xmlwriter-text.php
     * @param string $content <p>
     * The contents of the text.
     * </p>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function text(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $content) : bool
    {
    }
    /**
     * (PHP 5 &gt;= 5.2.0, PECL xmlwriter &gt;= 2.0.4)<br/>
     * Write a raw XML text
     * @link https://php.net/manual/en/function.xmlwriter-writeraw.php
     * @param string $content <p>
     * The text string to write.
     * </p>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function writeRaw(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $content) : bool
    {
    }
    /**
     * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
     * Create document tag
     * @link https://php.net/manual/en/function.xmlwriter-startdocument.php
     * @param string $version [optional] <p>
     * The version number of the document as part of the XML declaration.
     * </p>
     * @param string $encoding [optional] <p>
     * The encoding of the document as part of the XML declaration.
     * </p>
     * @param string $standalone [optional] <p>
     * yes or no.
     * </p>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function startDocument(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'string|null'], default: '')] $version = '1.0', #[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'string|null'], default: '')] $encoding = null, #[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'string|null'], default: '')] $standalone = null) : bool
    {
    }
    /**
     * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
     * End current document
     * @link https://php.net/manual/en/function.xmlwriter-enddocument.php
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function endDocument() : bool
    {
    }
    /**
     * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
     * Write full comment tag
     * @link https://php.net/manual/en/function.xmlwriter-writecomment.php
     * @param string $content <p>
     * The contents of the comment.
     * </p>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function writeComment(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $content) : bool
    {
    }
    /**
     * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
     * Create start DTD tag
     * @link https://php.net/manual/en/function.xmlwriter-startdtd.php
     * @param string $qualifiedName <p>
     * The qualified name of the document type to create.
     * </p>
     * @param string $publicId [optional] <p>
     * The external subset public identifier.
     * </p>
     * @param string $systemId [optional] <p>
     * The external subset system identifier.
     * </p>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function startDtd(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $qualifiedName, #[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'string|null'], default: '')] $publicId = null, #[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'string|null'], default: '')] $systemId = null) : bool
    {
    }
    /**
     * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
     * End current DTD
     * @link https://php.net/manual/en/function.xmlwriter-enddtd.php
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function endDtd() : bool
    {
    }
    /**
     * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
     * Write full DTD tag
     * @link https://php.net/manual/en/function.xmlwriter-writedtd.php
     * @param string $name <p>
     * The DTD name.
     * </p>
     * @param string $publicId [optional] <p>
     * The external subset public identifier.
     * </p>
     * @param string $systemId [optional] <p>
     * The external subset system identifier.
     * </p>
     * @param string $content [optional] <p>
     * The content of the DTD.
     * </p>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function writeDtd(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $name, #[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'string|null'], default: '')] $publicId = null, #[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'string|null'], default: '')] $systemId = null, #[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'string|null'], default: '')] $content = null) : bool
    {
    }
    /**
     * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
     * Create start DTD element
     * @link https://php.net/manual/en/function.xmlwriter-startdtdelement.php
     * @param string $qualifiedName <p>
     * The qualified name of the document type to create.
     * </p>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function startDtdElement(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $qualifiedName) : bool
    {
    }
    /**
     * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
     * End current DTD element
     * @link https://php.net/manual/en/function.xmlwriter-enddtdelement.php
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function endDtdElement() : bool
    {
    }
    /**
     * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
     * Write full DTD element tag
     * @link https://php.net/manual/en/function.xmlwriter-writedtdelement.php
     * @param string $name <p>
     * The name of the DTD element.
     * </p>
     * @param string $content <p>
     * The content of the element.
     * </p>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function writeDtdElement(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $name, #[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $content) : bool
    {
    }
    /**
     * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
     * Create start DTD AttList
     * @link https://php.net/manual/en/function.xmlwriter-startdtdattlist.php
     * @param string $name <p>
     * The attribute list name.
     * </p>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function startDtdAttlist(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $name) : bool
    {
    }
    /**
     * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
     * End current DTD AttList
     * @link https://php.net/manual/en/function.xmlwriter-enddtdattlist.php
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function endDtdAttlist() : bool
    {
    }
    /**
     * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
     * Write full DTD AttList tag
     * @link https://php.net/manual/en/function.xmlwriter-writedtdattlist.php
     * @param string $name <p>
     * The name of the DTD attribute list.
     * </p>
     * @param string $content <p>
     * The content of the DTD attribute list.
     * </p>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function writeDtdAttlist(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $name, #[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $content) : bool
    {
    }
    /**
     * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
     * Create start DTD Entity
     * @link https://php.net/manual/en/function.xmlwriter-startdtdentity.php
     * @param string $name <p>
     * The name of the entity.
     * </p>
     * @param bool $isParam
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function startDtdEntity(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $name, #[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'bool'], default: '')] $isParam) : bool
    {
    }
    /**
     * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
     * End current DTD Entity
     * @link https://php.net/manual/en/function.xmlwriter-enddtdentity.php
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function endDtdEntity() : bool
    {
    }
    /**
     * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
     * Write full DTD Entity tag
     * @link https://php.net/manual/en/function.xmlwriter-writedtdentity.php
     * @param string $name <p>
     * The name of the entity.
     * </p>
     * @param string $content <p>
     * The content of the entity.
     * </p>
     * @param bool $pe
     * @param string $pubid
     * @param string $sysid
     * @param string $ndataid
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    public function writeDtdEntity(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $name, #[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $content, $pe, $pubid, $sysid, $ndataid)
    {
    }
    /**
     * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
     * Returns current buffer
     * @link https://php.net/manual/en/function.xmlwriter-outputmemory.php
     * @param bool $flush [optional] <p>
     * Whether to flush the output buffer or not. Default is <b>TRUE</b>.
     * </p>
     * @return string the current buffer as a string.
     */
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function outputMemory(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'bool'], default: '')] $flush = \true) : string
    {
    }
    /**
     * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 1.0.0)<br/>
     * Flush current buffer
     * @link https://php.net/manual/en/function.xmlwriter-flush.php
     * @param bool $empty [optional] <p>
     * Whether to empty the buffer or not. Default is <b>TRUE</b>.
     * </p>
     * @return string|int If you opened the writer in memory, this function returns the generated XML buffer,
     * Else, if using URI, this function will write the buffer and return the number of
     * written bytes.
     */
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function flush(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(['8.0' => 'bool'], default: '')] $empty = \true) : string|int
    {
    }
}
/**
 * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Create new xmlwriter using source uri for output
 * @link https://php.net/manual/en/function.xmlwriter-openuri.php
 * @param string $uri <p>
 * The URI of the resource for the output.
 * </p>
 * @return false|resource|XMLWriter Object oriented style: Returns <b>TRUE</b> on success or <b>FALSE</b> on failure.
 * <p>
 * Procedural style: Returns a new xmlwriter resource for later use with the
 * xmlwriter functions on success, <b>FALSE</b> on error.
 * </p>
 */
#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(["8.0" => "XMLWriter|false"], default: "resource|false")]
function xmlwriter_open_uri(string $uri)
{
}
/**
 * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Create new xmlwriter using memory for string output
 * @link https://php.net/manual/en/function.xmlwriter-openmemory.php
 * @return XMLWriter|false|resource Object oriented style: Returns <b>TRUE</b> on success or <b>FALSE</b> on failure.
 * <p>
 * Procedural style: Returns a new xmlwriter resource for later use with the
 * xmlwriter functions on success, <b>FALSE</b> on error.
 * </p>
 */
#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(["8.0" => "XMLWriter|false"], default: "resource|false")]
function xmlwriter_open_memory()
{
}
/**
 * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Toggle indentation on/off
 * @link https://php.net/manual/en/function.xmlwriter-setindent.php
 * @param resource|XMLWriter $writer
 * <p>Only for procedural calls.
 * The XMLWriter {@link https://php.net/manual/en/language.types.resource.php" resource} that is being modified.
 * This resource comes from a call to {@link https://php.net/manual/en/function.xmlwriter-openuri.php" xmlwriter_open_uri()}
 * or {@link https://php.net/manual/en/function.xmlwriter-openmemory.php" xmlwriter_open_memory()}.</p>
 * @param bool $enable <p>
 * Whether indentation is enabled.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_set_indent(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(["8.0" => "XMLWriter"], default: "resource")] $writer, bool $enable) : bool
{
}
/**
 * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Set string used for indenting
 * @link https://php.net/manual/en/function.xmlwriter-setindentstring.php
 * @param resource|XMLWriter $writer
 * <p>Only for procedural calls.
 * The XMLWriter {@link https://php.net/manual/en/language.types.resource.php" resource} that is being modified.
 * This resource comes from a call to {@link https://php.net/manual/en/function.xmlwriter-openuri.php" xmlwriter_open_uri()}
 * or {@link https://php.net/manual/en/function.xmlwriter-openmemory.php" xmlwriter_open_memory()}.</p>
 * @param string $indentation <p>
 * The indentation string.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_set_indent_string(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(["8.0" => "XMLWriter"], default: "resource")] $writer, string $indentation) : bool
{
}
/**
 * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 1.0.0)<br/>
 * Create start comment
 * @link https://php.net/manual/en/function.xmlwriter-startcomment.php
 * @param resource|XMLWriter $writer
 * <p>Only for procedural calls.
 * The XMLWriter {@link https://php.net/manual/en/language.types.resource.php" resource} that is being modified.
 * This resource comes from a call to {@link https://php.net/manual/en/function.xmlwriter-openuri.php" xmlwriter_open_uri()}
 * or {@link https://php.net/manual/en/function.xmlwriter-openmemory.php" xmlwriter_open_memory()}.</p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_start_comment(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(["8.0" => "XMLWriter"], default: "resource")] $writer) : bool
{
}
/**
 * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 1.0.0)<br/>
 * Create end comment
 * @link https://php.net/manual/en/function.xmlwriter-endcomment.php
 * @param resource|XMLWriter $writer
 * <p>Only for procedural calls.
 * The XMLWriter {@link https://php.net/manual/en/language.types.resource.php" resource} that is being modified.
 * This resource comes from a call to {@link https://php.net/manual/en/function.xmlwriter-openuri.php" xmlwriter_open_uri()}
 * or {@link https://php.net/manual/en/function.xmlwriter-openmemory.php" xmlwriter_open_memory()}.</p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_end_comment(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(["8.0" => "XMLWriter"], default: "resource")] $writer) : bool
{
}
/**
 * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Create start attribute
 * @link https://php.net/manual/en/function.xmlwriter-startattribute.php
 * @param resource|XMLWriter $writer
 * <p>Only for procedural calls.
 * The XMLWriter {@link https://php.net/manual/en/language.types.resource.php" resource} that is being modified.
 * This resource comes from a call to {@link https://php.net/manual/en/function.xmlwriter-openuri.php" xmlwriter_open_uri()}
 * or {@link https://php.net/manual/en/function.xmlwriter-openmemory.php" xmlwriter_open_memory()}.</p>
 * @param string $name <p>
 * The attribute name.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_start_attribute(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(["8.0" => "XMLWriter"], default: "resource")] $writer, string $name) : bool
{
}
/**
 * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
 * End attribute
 * @link https://php.net/manual/en/function.xmlwriter-endattribute.php
 * @param resource|XMLWriter $writer
 * <p>Only for procedural calls.
 * The XMLWriter {@link https://php.net/manual/en/language.types.resource.php" resource} that is being modified.
 * This resource comes from a call to {@link https://php.net/manual/en/function.xmlwriter-openuri.php" xmlwriter_open_uri()}
 * or {@link https://php.net/manual/en/function.xmlwriter-openmemory.php" xmlwriter_open_memory()}.</p> * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_end_attribute(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(["8.0" => "XMLWriter"], default: "resource")] $writer) : bool
{
}
/**
 * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Write full attribute
 * @link https://php.net/manual/en/function.xmlwriter-writeattribute.php
 * @param resource|XMLWriter $writer
 * <p>Only for procedural calls.
 * The XMLWriter {@link https://php.net/manual/en/language.types.resource.php" resource} that is being modified.
 * This resource comes from a call to {@link https://php.net/manual/en/function.xmlwriter-openuri.php" xmlwriter_open_uri()}
 * or {@link https://php.net/manual/en/function.xmlwriter-openmemory.php" xmlwriter_open_memory()}.</p>
 * @param string $name <p>
 * The name of the attribute.
 * </p>
 * @param string $value <p>
 * The value of the attribute.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_write_attribute(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(["8.0" => "XMLWriter"], default: "resource")] $writer, string $name, string $value) : bool
{
}
/**
 * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Create start namespaced attribute
 * @link https://php.net/manual/en/function.xmlwriter-startattributens.php
 * @param resource|XMLWriter $writer
 * <p>Only for procedural calls.
 * The XMLWriter {@link https://php.net/manual/en/language.types.resource.php" resource} that is being modified.
 * This resource comes from a call to {@link https://php.net/manual/en/function.xmlwriter-openuri.php" xmlwriter_open_uri()}
 * or {@link https://php.net/manual/en/function.xmlwriter-openmemory.php" xmlwriter_open_memory()}.</p>
 * @param string|null $prefix <p>
 * The namespace prefix.
 * </p>
 * @param string $name <p>
 * The attribute name.
 * </p>
 * @param string|null $namespace <p>
 * The namespace URI.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_start_attribute_ns(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(["8.0" => "XMLWriter"], default: "resource")] $writer, ?string $prefix, string $name, ?string $namespace) : bool
{
}
/**
 * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Write full namespaced attribute
 * @link https://php.net/manual/en/function.xmlwriter-writeattributens.php
 * @param resource|XMLWriter $writer
 * <p>Only for procedural calls.
 * The XMLWriter {@link https://php.net/manual/en/language.types.resource.php" resource} that is being modified.
 * This resource comes from a call to {@link https://php.net/manual/en/function.xmlwriter-openuri.php" xmlwriter_open_uri()}
 * or {@link https://php.net/manual/en/function.xmlwriter-openmemory.php" xmlwriter_open_memory()}.</p>
 * @param string|null $prefix <p>
 * The namespace prefix.
 * </p>
 * @param string $name <p>
 * The attribute name.
 * </p>
 * @param string|null $namespace <p>
 * The namespace URI.
 * </p>
 * @param string $value <p>
 * The attribute value.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_write_attribute_ns(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(["8.0" => "XMLWriter"], default: "resource")] $writer, ?string $prefix, string $name, ?string $namespace, string $value) : bool
{
}
/**
 * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Create start element tag
 * @link https://php.net/manual/en/function.xmlwriter-startelement.php
 * @param resource|XMLWriter $writer
 * <p>Only for procedural calls.
 * The XMLWriter {@link https://php.net/manual/en/language.types.resource.php" resource} that is being modified.
 * This resource comes from a call to {@link https://php.net/manual/en/function.xmlwriter-openuri.php" xmlwriter_open_uri()}
 * or {@link https://php.net/manual/en/function.xmlwriter-openmemory.php" xmlwriter_open_memory()}.</p>
 * @param string $name <p>
 * The element name.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_start_element(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(["8.0" => "XMLWriter"], default: "resource")] $writer, string $name) : bool
{
}
/**
 * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
 * End current element
 * @link https://php.net/manual/en/function.xmlwriter-endelement.php
 * @param resource|XMLWriter $writer
 * <p>Only for procedural calls.
 * The XMLWriter {@link https://php.net/manual/en/language.types.resource.php" resource} that is being modified.
 * This resource comes from a call to {@link https://php.net/manual/en/function.xmlwriter-openuri.php" xmlwriter_open_uri()}
 * or {@link https://php.net/manual/en/function.xmlwriter-openmemory.php" xmlwriter_open_memory()}.</p> * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_end_element(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(["8.0" => "XMLWriter"], default: "resource")] $writer) : bool
{
}
/**
 * (PHP 5 &gt;= 5.2.0, PECL xmlwriter &gt;= 2.0.4)<br/>
 * End current element
 * @link https://php.net/manual/en/function.xmlwriter-fullendelement.php
 * @param resource|XMLWriter $writer
 * <p>Only for procedural calls.
 * The XMLWriter {@link https://php.net/manual/en/language.types.resource.php" resource} that is being modified.
 * This resource comes from a call to {@link https://php.net/manual/en/function.xmlwriter-openuri.php" xmlwriter_open_uri()}
 * or {@link https://php.net/manual/en/function.xmlwriter-openmemory.php" xmlwriter_open_memory()}.</p> * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_full_end_element(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(["8.0" => "XMLWriter"], default: "resource")] $writer) : bool
{
}
/**
 * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Create start namespaced element tag
 * @link https://php.net/manual/en/function.xmlwriter-startelementns.php
 * @param resource|XMLWriter $writer
 * <p>Only for procedural calls.
 * The XMLWriter {@link https://php.net/manual/en/language.types.resource.php" resource} that is being modified.
 * This resource comes from a call to {@link https://php.net/manual/en/function.xmlwriter-openuri.php" xmlwriter_open_uri()}
 * or {@link https://php.net/manual/en/function.xmlwriter-openmemory.php" xmlwriter_open_memory()}.</p>
 * @param string|null $prefix <p>
 * The namespace prefix.
 * </p>
 * @param string $name <p>
 * The element name.
 * </p>
 * @param string|null $namespace <p>
 * The namespace URI.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_start_element_ns(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(["8.0" => "XMLWriter"], default: "resource")] $writer, ?string $prefix, string $name, ?string $namespace) : bool
{
}
/**
 * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Write full element tag
 * @link https://php.net/manual/en/function.xmlwriter-writeelement.php
 * @param resource|XMLWriter $writer
 * <p>Only for procedural calls.
 * The XMLWriter {@link https://php.net/manual/en/language.types.resource.php" resource} that is being modified.
 * This resource comes from a call to {@link https://php.net/manual/en/function.xmlwriter-openuri.php" xmlwriter_open_uri()}
 * or {@link https://php.net/manual/en/function.xmlwriter-openmemory.php" xmlwriter_open_memory()}.</p>
 * @param string $name <p>
 * The element name.
 * </p>
 * @param string|null $content [optional] <p>
 * The element contents.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_write_element(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(["8.0" => "XMLWriter"], default: "resource")] $writer, string $name, ?string $content) : bool
{
}
/**
 * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Write full namespaced element tag
 * @link https://php.net/manual/en/function.xmlwriter-writeelementns.php
 * @param resource|XMLWriter $writer
 * <p>Only for procedural calls.
 * The XMLWriter {@link https://php.net/manual/en/language.types.resource.php" resource} that is being modified.
 * This resource comes from a call to {@link https://php.net/manual/en/function.xmlwriter-openuri.php" xmlwriter_open_uri()}
 * or {@link https://php.net/manual/en/function.xmlwriter-openmemory.php" xmlwriter_open_memory()}.</p>
 * @param string|null $prefix <p>
 * The namespace prefix.
 * </p>
 * @param string $name <p>
 * The element name.
 * </p>
 * @param string|null $namespace <p>
 * The namespace URI.
 * </p>
 * @param string|null $content [optional] <p>
 * The element contents.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_write_element_ns(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(["8.0" => "XMLWriter"], default: "resource")] $writer, ?string $prefix, string $name, ?string $namespace, ?string $content) : bool
{
}
/**
 * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Create start PI tag
 * @link https://php.net/manual/en/function.xmlwriter-startpi.php
 * @param resource|XMLWriter $writer
 * <p>Only for procedural calls.
 * The XMLWriter {@link https://php.net/manual/en/language.types.resource.php" resource} that is being modified.
 * This resource comes from a call to {@link https://php.net/manual/en/function.xmlwriter-openuri.php" xmlwriter_open_uri()}
 * or {@link https://php.net/manual/en/function.xmlwriter-openmemory.php" xmlwriter_open_memory()}.</p>
 * @param string $target <p>
 * The target of the processing instruction.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_start_pi(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(["8.0" => "XMLWriter"], default: "resource")] $writer, string $target) : bool
{
}
/**
 * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
 * End current PI
 * @link https://php.net/manual/en/function.xmlwriter-endpi.php
 * @param resource|XMLWriter $writer
 * <p>Only for procedural calls.
 * The XMLWriter {@link https://php.net/manual/en/language.types.resource.php" resource} that is being modified.
 * This resource comes from a call to {@link https://php.net/manual/en/function.xmlwriter-openuri.php" xmlwriter_open_uri()}
 * or {@link https://php.net/manual/en/function.xmlwriter-openmemory.php" xmlwriter_open_memory()}.</p> * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_end_pi(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(["8.0" => "XMLWriter"], default: "resource")] $writer) : bool
{
}
/**
 * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Writes a PI
 * @link https://php.net/manual/en/function.xmlwriter-writepi.php
 * @param resource|XMLWriter $writer
 * <p>Only for procedural calls.
 * The XMLWriter {@link https://php.net/manual/en/language.types.resource.php" resource} that is being modified.
 * This resource comes from a call to {@link https://php.net/manual/en/function.xmlwriter-openuri.php" xmlwriter_open_uri()}
 * or {@link https://php.net/manual/en/function.xmlwriter-openmemory.php" xmlwriter_open_memory()}.</p>
 * @param string $target <p>
 * The target of the processing instruction.
 * </p>
 * @param string $content <p>
 * The content of the processing instruction.
 * </p>
 *
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_write_pi(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(["8.0" => "XMLWriter"], default: "resource")] $writer, string $target, string $content) : bool
{
}
/**
 * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Create start CDATA tag
 * @link https://php.net/manual/en/function.xmlwriter-startcdata.php
 * @param resource|XMLWriter $writer
 * <p>Only for procedural calls.
 * The XMLWriter {@link https://php.net/manual/en/language.types.resource.php" resource} that is being modified.
 * This resource comes from a call to {@link https://php.net/manual/en/function.xmlwriter-openuri.php" xmlwriter_open_uri()}
 * or {@link https://php.net/manual/en/function.xmlwriter-openmemory.php" xmlwriter_open_memory()}.</p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_start_cdata(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(["8.0" => "XMLWriter"], default: "resource")] $writer) : bool
{
}
/**
 * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
 * End current CDATA
 * @link https://php.net/manual/en/function.xmlwriter-endcdata.php
 * @param resource|XMLWriter $writer
 * <p>Only for procedural calls.
 * The XMLWriter {@link https://php.net/manual/en/language.types.resource.php" resource} that is being modified.
 * This resource comes from a call to {@link https://php.net/manual/en/function.xmlwriter-openuri.php" xmlwriter_open_uri()}
 * or {@link https://php.net/manual/en/function.xmlwriter-openmemory.php" xmlwriter_open_memory()}.</p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_end_cdata(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(["8.0" => "XMLWriter"], default: "resource")] $writer) : bool
{
}
/**
 * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Write full CDATA tag
 * @link https://php.net/manual/en/function.xmlwriter-writecdata.php
 * @param resource|XMLWriter $writer
 * <p>Only for procedural calls.
 * The XMLWriter {@link https://php.net/manual/en/language.types.resource.php" resource} that is being modified.
 * This resource comes from a call to {@link https://php.net/manual/en/function.xmlwriter-openuri.php" xmlwriter_open_uri()}
 * or {@link https://php.net/manual/en/function.xmlwriter-openmemory.php" xmlwriter_open_memory()}.</p>
 * @param string $content <p>
 * The contents of the CDATA.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_write_cdata(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(["8.0" => "XMLWriter"], default: "resource")] $writer, string $content) : bool
{
}
/**
 * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Write text
 * @link https://php.net/manual/en/function.xmlwriter-text.php
 * @param resource|XMLWriter $writer
 * <p>Only for procedural calls.
 * The XMLWriter {@link https://php.net/manual/en/language.types.resource.php" resource} that is being modified.
 * This resource comes from a call to {@link https://php.net/manual/en/function.xmlwriter-openuri.php" xmlwriter_open_uri()}
 * or {@link https://php.net/manual/en/function.xmlwriter-openmemory.php" xmlwriter_open_memory()}.</p>
 * @param string $content <p>
 * The contents of the text.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_text(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(["8.0" => "XMLWriter"], default: "resource")] $writer, string $content) : bool
{
}
/**
 * (PHP 5 &gt;= 5.2.0, PECL xmlwriter &gt;= 2.0.4)<br/>
 * Write a raw XML text
 * @link https://php.net/manual/en/function.xmlwriter-writeraw.php
 * @param resource|XMLWriter $writer
 * <p>Only for procedural calls.
 * The XMLWriter {@link https://php.net/manual/en/language.types.resource.php" resource} that is being modified.
 * This resource comes from a call to {@link https://php.net/manual/en/function.xmlwriter-openuri.php" xmlwriter_open_uri()}
 * or {@link https://php.net/manual/en/function.xmlwriter-openmemory.php" xmlwriter_open_memory()}.</p>
 * @param string $content <p>
 * The text string to write.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_write_raw(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(["8.0" => "XMLWriter"], default: "resource")] $writer, string $content) : bool
{
}
/**
 * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Create document tag
 * @link https://php.net/manual/en/function.xmlwriter-startdocument.php
 * @param resource|XMLWriter $writer
 * <p>Only for procedural calls.
 * The XMLWriter {@link https://php.net/manual/en/language.types.resource.php" resource} that is being modified.
 * This resource comes from a call to {@link https://php.net/manual/en/function.xmlwriter-openuri.php" xmlwriter_open_uri()}
 * or {@link https://php.net/manual/en/function.xmlwriter-openmemory.php" xmlwriter_open_memory()}.</p>
 * @param string|null $version [optional] <p>
 * The version number of the document as part of the XML declaration.
 * </p>
 * @param string|null $encoding [optional] <p>
 * The encoding of the document as part of the XML declaration.
 * </p>
 * @param string|null $standalone [optional] <p>
 * yes or no.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_start_document(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(["8.0" => "XMLWriter"], default: "resource")] $writer, ?string $version = '1.0', ?string $encoding, ?string $standalone) : bool
{
}
/**
 * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
 * End current document
 * @link https://php.net/manual/en/function.xmlwriter-enddocument.php
 * @param resource|XMLWriter $writer
 * <p>Only for procedural calls.
 * The XMLWriter {@link https://php.net/manual/en/language.types.resource.php" resource} that is being modified.
 * This resource comes from a call to {@link https://php.net/manual/en/function.xmlwriter-openuri.php" xmlwriter_open_uri()}
 * or {@link https://php.net/manual/en/function.xmlwriter-openmemory.php" xmlwriter_open_memory()}.</p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_end_document(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(["8.0" => "XMLWriter"], default: "resource")] $writer) : bool
{
}
/**
 * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Write full comment tag
 * @link https://php.net/manual/en/function.xmlwriter-writecomment.php
 * @param resource|XMLWriter $writer
 * <p>Only for procedural calls.
 * The XMLWriter {@link https://php.net/manual/en/language.types.resource.php" resource} that is being modified.
 * This resource comes from a call to {@link https://php.net/manual/en/function.xmlwriter-openuri.php" xmlwriter_open_uri()}
 * or {@link https://php.net/manual/en/function.xmlwriter-openmemory.php" xmlwriter_open_memory()}.</p>
 * @param string $content <p>
 * The contents of the comment.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_write_comment(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(["8.0" => "XMLWriter"], default: "resource")] $writer, string $content) : bool
{
}
/**
 * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Create start DTD tag
 * @link https://php.net/manual/en/function.xmlwriter-startdtd.php
 * @param resource|XMLWriter $writer
 * <p>Only for procedural calls.
 * The XMLWriter {@link https://php.net/manual/en/language.types.resource.php" resource} that is being modified.
 * This resource comes from a call to {@link https://php.net/manual/en/function.xmlwriter-openuri.php" xmlwriter_open_uri()}
 * or {@link https://php.net/manual/en/function.xmlwriter-openmemory.php" xmlwriter_open_memory()}.</p>
 * @param string $qualifiedName <p>
 * The qualified name of the document type to create.
 * </p>
 * @param string|null $publicId [optional] <p>
 * The external subset public identifier.
 * </p>
 * @param string|null $systemId [optional] <p>
 * The external subset system identifier.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_start_dtd(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(["8.0" => "XMLWriter"], default: "resource")] $writer, string $qualifiedName, ?string $publicId, ?string $systemId) : bool
{
}
/**
 * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
 * End current DTD
 * @link https://php.net/manual/en/function.xmlwriter-enddtd.php
 * @param resource|XMLWriter $writer
 * <p>Only for procedural calls.
 * The XMLWriter {@link https://php.net/manual/en/language.types.resource.php" resource} that is being modified.
 * This resource comes from a call to {@link https://php.net/manual/en/function.xmlwriter-openuri.php" xmlwriter_open_uri()}
 * or {@link https://php.net/manual/en/function.xmlwriter-openmemory.php" xmlwriter_open_memory()}.</p> * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_end_dtd(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(["8.0" => "XMLWriter"], default: "resource")] $writer) : bool
{
}
/**
 * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Write full DTD tag
 * @link https://php.net/manual/en/function.xmlwriter-writedtd.php
 * @param resource|XMLWriter $writer
 * <p>Only for procedural calls.
 * The XMLWriter {@link https://php.net/manual/en/language.types.resource.php" resource} that is being modified.
 * This resource comes from a call to {@link https://php.net/manual/en/function.xmlwriter-openuri.php" xmlwriter_open_uri()}
 * or {@link https://php.net/manual/en/function.xmlwriter-openmemory.php" xmlwriter_open_memory()}.</p>
 * @param string $name <p>
 * The DTD name.
 * </p>
 * @param string|null $publicId [optional] <p>
 * The external subset public identifier.
 * </p>
 * @param string|null $systemId [optional] <p>
 * The external subset system identifier.
 * </p>
 * @param string|null $content [optional] <p>
 * The content of the DTD.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_write_dtd(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(["8.0" => "XMLWriter"], default: "resource")] $writer, string $name, ?string $publicId, ?string $systemId, ?string $content) : bool
{
}
/**
 * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Create start DTD element
 * @link https://php.net/manual/en/function.xmlwriter-startdtdelement.php
 * @param resource|XMLWriter $writer
 * <p>Only for procedural calls.
 * The XMLWriter {@link https://php.net/manual/en/language.types.resource.php" resource} that is being modified.
 * This resource comes from a call to {@link https://php.net/manual/en/function.xmlwriter-openuri.php" xmlwriter_open_uri()}
 * or {@link https://php.net/manual/en/function.xmlwriter-openmemory.php" xmlwriter_open_memory()}.</p>
 * @param string $qualifiedName <p>
 * The qualified name of the document type to create.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_start_dtd_element(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(["8.0" => "XMLWriter"], default: "resource")] $writer, string $qualifiedName) : bool
{
}
/**
 * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
 * End current DTD element
 * @link https://php.net/manual/en/function.xmlwriter-enddtdelement.php
 * @param $writer
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_end_dtd_element(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(["8.0" => "XMLWriter"], default: "resource")] $writer) : bool
{
}
/**
 * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Write full DTD element tag
 * @link https://php.net/manual/en/function.xmlwriter-writedtdelement.php
 * @param resource|XMLWriter $writer
 * <p>Only for procedural calls.
 * The XMLWriter {@link https://php.net/manual/en/language.types.resource.php" resource} that is being modified.
 * This resource comes from a call to {@link https://php.net/manual/en/function.xmlwriter-openuri.php" xmlwriter_open_uri()}
 * or {@link https://php.net/manual/en/function.xmlwriter-openmemory.php" xmlwriter_open_memory()}.</p>
 * @param string $name <p>
 * The name of the DTD element.
 * </p>
 * @param string $content <p>
 * The content of the element.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_write_dtd_element(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(["8.0" => "XMLWriter"], default: "resource")] $writer, string $name, string $content) : bool
{
}
/**
 * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Create start DTD AttList
 * @link https://php.net/manual/en/function.xmlwriter-startdtdattlist.php
 * @param resource|XMLWriter $writer
 * <p>Only for procedural calls.
 * The XMLWriter {@link https://php.net/manual/en/language.types.resource.php" resource} that is being modified.
 * This resource comes from a call to {@link https://php.net/manual/en/function.xmlwriter-openuri.php" xmlwriter_open_uri()}
 * or {@link https://php.net/manual/en/function.xmlwriter-openmemory.php" xmlwriter_open_memory()}.</p>
 * @param string $name <p>
 * The attribute list name.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_start_dtd_attlist(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(["8.0" => "XMLWriter"], default: "resource")] $writer, string $name) : bool
{
}
/**
 * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
 * End current DTD AttList
 * @link https://php.net/manual/en/function.xmlwriter-enddtdattlist.php
 * @param resource|XMLWriter $writer
 * <p>Only for procedural calls.
 * The XMLWriter {@link https://php.net/manual/en/language.types.resource.php" resource} that is being modified.
 * This resource comes from a call to {@link https://php.net/manual/en/function.xmlwriter-openuri.php" xmlwriter_open_uri()}
 * or {@link https://php.net/manual/en/function.xmlwriter-openmemory.php" xmlwriter_open_memory()}.</p> * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_end_dtd_attlist(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(["8.0" => "XMLWriter"], default: "resource")] $writer) : bool
{
}
/**
 * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Write full DTD AttList tag
 * @link https://php.net/manual/en/function.xmlwriter-writedtdattlist.php
 * @param resource|XMLWriter $writer
 * <p>Only for procedural calls.
 * The XMLWriter {@link https://php.net/manual/en/language.types.resource.php" resource} that is being modified.
 * This resource comes from a call to {@link https://php.net/manual/en/function.xmlwriter-openuri.php" xmlwriter_open_uri()}
 * or {@link https://php.net/manual/en/function.xmlwriter-openmemory.php" xmlwriter_open_memory()}.</p>
 * @param string $name <p>
 * The name of the DTD attribute list.
 * </p>
 * @param string $content <p>
 * The content of the DTD attribute list.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_write_dtd_attlist(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(["8.0" => "XMLWriter"], default: "resource")] $writer, string $name, string $content) : bool
{
}
/**
 * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Create start DTD Entity
 * @link https://php.net/manual/en/function.xmlwriter-startdtdentity.php
 * @param resource|XMLWriter $writer
 * <p>Only for procedural calls.
 * The XMLWriter {@link https://php.net/manual/en/language.types.resource.php" resource} that is being modified.
 * This resource comes from a call to {@link https://php.net/manual/en/function.xmlwriter-openuri.php" xmlwriter_open_uri()}
 * or {@link https://php.net/manual/en/function.xmlwriter-openmemory.php" xmlwriter_open_memory()}.</p>
 * @param string $name <p>
 * The name of the entity.
 * </p>
 * @param bool $isParam
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_start_dtd_entity(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(["8.0" => "XMLWriter"], default: "resource")] $writer, string $name, bool $isParam) : bool
{
}
/**
 * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
 * End current DTD Entity
 * @link https://php.net/manual/en/function.xmlwriter-enddtdentity.php
 * @param resource|XMLWriter $writer
 * <p>Only for procedural calls.
 * The XMLWriter {@link https://php.net/manual/en/language.types.resource.php" resource} that is being modified.
 * This resource comes from a call to {@link https://php.net/manual/en/function.xmlwriter-openuri.php" xmlwriter_open_uri()}
 * or {@link https://php.net/manual/en/function.xmlwriter-openmemory.php" xmlwriter_open_memory()}.</p> * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_end_dtd_entity(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(["8.0" => "XMLWriter"], default: "resource")] $writer) : bool
{
}
/**
 * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Write full DTD Entity tag
 * @link https://php.net/manual/en/function.xmlwriter-writedtdentity.php
 * @param resource|XMLWriter $writer
 * <p>Only for procedural calls.
 * The XMLWriter {@link https://php.net/manual/en/language.types.resource.php" resource} that is being modified.
 * This resource comes from a call to {@link https://php.net/manual/en/function.xmlwriter-openuri.php" xmlwriter_open_uri()}
 * or {@link https://php.net/manual/en/function.xmlwriter-openmemory.php" xmlwriter_open_memory()}.</p>
 * @param string $name <p>
 * The name of the entity.
 * </p>
 * @param string $content <p>
 * The content of the entity.
 * </p>
 * @param bool $isParam
 * @param string $publicId
 * @param string $systemId
 * @param string $notationData
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_write_dtd_entity(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(["8.0" => "XMLWriter"], default: "resource")] $writer, string $name, string $content, #[\JetBrains\PhpStorm\Internal\PhpStormStubsElementAvailable(from: '8.0')] bool $isParam = \false, #[\JetBrains\PhpStorm\Internal\PhpStormStubsElementAvailable(from: '8.0')] ?string $publicId = null, #[\JetBrains\PhpStorm\Internal\PhpStormStubsElementAvailable(from: '8.0')] ?string $systemId = null, #[\JetBrains\PhpStorm\Internal\PhpStormStubsElementAvailable(from: '8.0')] ?string $notationData = null) : bool
{
}
/**
 * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Returns current buffer
 * @link https://php.net/manual/en/function.xmlwriter-outputmemory.php
 * @param resource|XMLWriter $writer
 * <p>Only for procedural calls.
 * The XMLWriter {@link https://php.net/manual/en/language.types.resource.php" resource} that is being modified.
 * This resource comes from a call to {@link https://php.net/manual/en/function.xmlwriter-openuri.php" xmlwriter_open_uri()}
 * or {@link https://php.net/manual/en/function.xmlwriter-openmemory.php" xmlwriter_open_memory()}.</p>
 * @param bool $flush [optional] <p>
 * Whether to flush the output buffer or not. Default is <b>TRUE</b>.
 * </p>
 * @return string the current buffer as a string.
 */
function xmlwriter_output_memory(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(["8.0" => "XMLWriter"], default: "resource")] $writer, bool $flush = \true) : string
{
}
/**
 * (PHP 5 &gt;= 5.1.2, PECL xmlwriter &gt;= 1.0.0)<br/>
 * Flush current buffer
 * @link https://php.net/manual/en/function.xmlwriter-flush.php
 * @param resource|XMLWriter $writer
 * <p>Only for procedural calls.
 * The XMLWriter {@link https://php.net/manual/en/language.types.resource.php" resource} that is being modified.
 * This resource comes from a call to {@link https://php.net/manual/en/function.xmlwriter-openuri.php" xmlwriter_open_uri()}
 * or {@link https://php.net/manual/en/function.xmlwriter-openmemory.php" xmlwriter_open_memory()}.</p>
 * @param bool $empty [optional] <p>
 * Whether to empty the buffer or not. Default is <b>TRUE</b>.
 * </p>
 * @return string|int If you opened the writer in memory, this function returns the generated XML buffer,
 * Else, if using URI, this function will write the buffer and return the number of
 * written bytes.
 */
function xmlwriter_flush(#[\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware(["8.0" => "XMLWriter"], default: "resource")] $writer, bool $empty = \true) : string|int
{
}
