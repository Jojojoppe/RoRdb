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

class CreateTableRequest extends \RoRdb\Google\Model
{
    /**
     * @var int
     */
    public $columns;
    protected $elementPropertiesType = PageElementProperties::class;
    protected $elementPropertiesDataType = '';
    /**
     * @var string
     */
    public $objectId;
    /**
     * @var int
     */
    public $rows;
    /**
     * @param int
     */
    public function setColumns($columns)
    {
        $this->columns = $columns;
    }
    /**
     * @return int
     */
    public function getColumns()
    {
        return $this->columns;
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
     * @param int
     */
    public function setRows($rows)
    {
        $this->rows = $rows;
    }
    /**
     * @return int
     */
    public function getRows()
    {
        return $this->rows;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(CreateTableRequest::class, 'RoRdb\\Google_Service_Slides_CreateTableRequest');
