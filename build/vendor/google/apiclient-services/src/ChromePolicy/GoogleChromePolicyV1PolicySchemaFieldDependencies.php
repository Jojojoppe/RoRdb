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
namespace RoRdb\Google\Service\ChromePolicy;

class GoogleChromePolicyV1PolicySchemaFieldDependencies extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $sourceField;
    /**
     * @var string
     */
    public $sourceFieldValue;
    /**
     * @param string
     */
    public function setSourceField($sourceField)
    {
        $this->sourceField = $sourceField;
    }
    /**
     * @return string
     */
    public function getSourceField()
    {
        return $this->sourceField;
    }
    /**
     * @param string
     */
    public function setSourceFieldValue($sourceFieldValue)
    {
        $this->sourceFieldValue = $sourceFieldValue;
    }
    /**
     * @return string
     */
    public function getSourceFieldValue()
    {
        return $this->sourceFieldValue;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(GoogleChromePolicyV1PolicySchemaFieldDependencies::class, 'RoRdb\\Google_Service_ChromePolicy_GoogleChromePolicyV1PolicySchemaFieldDependencies');