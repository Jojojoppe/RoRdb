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
namespace RoRdb\Google\Service\Connectors;

class ResultMetadata extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $dataType;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $field;
    /**
     * @param string
     */
    public function setDataType($dataType)
    {
        $this->dataType = $dataType;
    }
    /**
     * @return string
     */
    public function getDataType()
    {
        return $this->dataType;
    }
    /**
     * @param string
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * @param string
     */
    public function setField($field)
    {
        $this->field = $field;
    }
    /**
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(ResultMetadata::class, 'RoRdb\\Google_Service_Connectors_ResultMetadata');