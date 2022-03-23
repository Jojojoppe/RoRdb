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
namespace RoRdb\Google\Service\Dataproc;

class TemplateParameter extends \RoRdb\Google\Collection
{
    protected $collection_key = 'fields';
    /**
     * @var string
     */
    public $description;
    /**
     * @var string[]
     */
    public $fields;
    /**
     * @var string
     */
    public $name;
    protected $validationType = ParameterValidation::class;
    protected $validationDataType = '';
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
     * @param string[]
     */
    public function setFields($fields)
    {
        $this->fields = $fields;
    }
    /**
     * @return string[]
     */
    public function getFields()
    {
        return $this->fields;
    }
    /**
     * @param string
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @param ParameterValidation
     */
    public function setValidation(ParameterValidation $validation)
    {
        $this->validation = $validation;
    }
    /**
     * @return ParameterValidation
     */
    public function getValidation()
    {
        return $this->validation;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(TemplateParameter::class, 'RoRdb\\Google_Service_Dataproc_TemplateParameter');
