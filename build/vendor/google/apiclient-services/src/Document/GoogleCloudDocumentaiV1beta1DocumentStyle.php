<?php

/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */
namespace RoRdb\Google\Service\Document;

class GoogleCloudDocumentaiV1beta1DocumentStyle extends \RoRdb\Google\Model
{
    protected $backgroundColorType = GoogleTypeColor::class;
    protected $backgroundColorDataType = '';
    protected $colorType = GoogleTypeColor::class;
    protected $colorDataType = '';
    protected $fontSizeType = GoogleCloudDocumentaiV1beta1DocumentStyleFontSize::class;
    protected $fontSizeDataType = '';
    /**
     * @var string
     */
    public $fontWeight;
    protected $textAnchorType = GoogleCloudDocumentaiV1beta1DocumentTextAnchor::class;
    protected $textAnchorDataType = '';
    /**
     * @var string
     */
    public $textDecoration;
    /**
     * @var string
     */
    public $textStyle;
    /**
     * @param GoogleTypeColor
     */
    public function setBackgroundColor(GoogleTypeColor $backgroundColor)
    {
        $this->backgroundColor = $backgroundColor;
    }
    /**
     * @return GoogleTypeColor
     */
    public function getBackgroundColor()
    {
        return $this->backgroundColor;
    }
    /**
     * @param GoogleTypeColor
     */
    public function setColor(GoogleTypeColor $color)
    {
        $this->color = $color;
    }
    /**
     * @return GoogleTypeColor
     */
    public function getColor()
    {
        return $this->color;
    }
    /**
     * @param GoogleCloudDocumentaiV1beta1DocumentStyleFontSize
     */
    public function setFontSize(GoogleCloudDocumentaiV1beta1DocumentStyleFontSize $fontSize)
    {
        $this->fontSize = $fontSize;
    }
    /**
     * @return GoogleCloudDocumentaiV1beta1DocumentStyleFontSize
     */
    public function getFontSize()
    {
        return $this->fontSize;
    }
    /**
     * @param string
     */
    public function setFontWeight($fontWeight)
    {
        $this->fontWeight = $fontWeight;
    }
    /**
     * @return string
     */
    public function getFontWeight()
    {
        return $this->fontWeight;
    }
    /**
     * @param GoogleCloudDocumentaiV1beta1DocumentTextAnchor
     */
    public function setTextAnchor(GoogleCloudDocumentaiV1beta1DocumentTextAnchor $textAnchor)
    {
        $this->textAnchor = $textAnchor;
    }
    /**
     * @return GoogleCloudDocumentaiV1beta1DocumentTextAnchor
     */
    public function getTextAnchor()
    {
        return $this->textAnchor;
    }
    /**
     * @param string
     */
    public function setTextDecoration($textDecoration)
    {
        $this->textDecoration = $textDecoration;
    }
    /**
     * @return string
     */
    public function getTextDecoration()
    {
        return $this->textDecoration;
    }
    /**
     * @param string
     */
    public function setTextStyle($textStyle)
    {
        $this->textStyle = $textStyle;
    }
    /**
     * @return string
     */
    public function getTextStyle()
    {
        return $this->textStyle;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(GoogleCloudDocumentaiV1beta1DocumentStyle::class, 'RoRdb\\Google_Service_Document_GoogleCloudDocumentaiV1beta1DocumentStyle');
