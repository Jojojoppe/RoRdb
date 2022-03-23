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
namespace RoRdb\Google\Service\Slides;

class CreateSheetsChartRequest extends \RoRdb\Google\Model
{
    /**
     * @var int
     */
    public $chartId;
    protected $elementPropertiesType = PageElementProperties::class;
    protected $elementPropertiesDataType = '';
    /**
     * @var string
     */
    public $linkingMode;
    /**
     * @var string
     */
    public $objectId;
    /**
     * @var string
     */
    public $spreadsheetId;
    /**
     * @param int
     */
    public function setChartId($chartId)
    {
        $this->chartId = $chartId;
    }
    /**
     * @return int
     */
    public function getChartId()
    {
        return $this->chartId;
    }
    /**
     * @param PageElementProperties
     */
    public function setElementProperties(PageElementProperties $elementProperties)
    {
        $this->elementProperties = $elementProperties;
    }
    /**
     * @return PageElementProperties
     */
    public function getElementProperties()
    {
        return $this->elementProperties;
    }
    /**
     * @param string
     */
    public function setLinkingMode($linkingMode)
    {
        $this->linkingMode = $linkingMode;
    }
    /**
     * @return string
     */
    public function getLinkingMode()
    {
        return $this->linkingMode;
    }
    /**
     * @param string
     */
    public function setObjectId($objectId)
    {
        $this->objectId = $objectId;
    }
    /**
     * @return string
     */
    public function getObjectId()
    {
        return $this->objectId;
    }
    /**
     * @param string
     */
    public function setSpreadsheetId($spreadsheetId)
    {
        $this->spreadsheetId = $spreadsheetId;
    }
    /**
     * @return string
     */
    public function getSpreadsheetId()
    {
        return $this->spreadsheetId;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(CreateSheetsChartRequest::class, 'RoRdb\\Google_Service_Slides_CreateSheetsChartRequest');