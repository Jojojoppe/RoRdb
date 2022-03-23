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
namespace RoRdb\Google\Service\Datastream;

class ValidationResult extends \RoRdb\Google\Collection
{
    protected $collection_key = 'validations';
    protected $validationsType = Validation::class;
    protected $validationsDataType = 'array';
    /**
     * @param Validation[]
     */
    public function setValidations($validations)
    {
        $this->validations = $validations;
    }
    /**
     * @return Validation[]
     */
    public function getValidations()
    {
        return $this->validations;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(ValidationResult::class, 'RoRdb\\Google_Service_Datastream_ValidationResult');
