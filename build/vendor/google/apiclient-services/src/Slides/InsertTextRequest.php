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

class InsertTextRequest extends \RoRdb\Google\Model
{
    protected $cellLocationType = TableCellLocation::class;
    protected $cellLocationDataType = '';
    /**
     * @var int
     */
    public $insertionIndex;
    /**
     * @var string
     */
    public $objectId;
    /**
     * @var string
     */
    public $text;
    /**
     * @param TableCellLocation
     */
    public function setCellLocation(TableCellLocation $cellLocation)
    {
        $this->cellLocation = $cellLocation;
    }
    /**
     * @return TableCellLocation
     */
    public function getCellLocation()
    {
        return $this->cellLocation;
    }
    /**
     * @param int
     */
    public function setInsertionIndex($insertionIndex)
    {
        $this->insertionIndex = $insertionIndex;
    }
    /**
     * @return int
     */
    public function getInsertionIndex()
    {
        return $this->insertionIndex;
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
    public function setText($text)
    {
        $this->text = $text;
    }
    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(InsertTextRequest::class, 'RoRdb\\Google_Service_Slides_InsertTextRequest');