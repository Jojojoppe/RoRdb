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

class RuntimeEntitySchema extends \RoRdb\Google\Collection
{
    protected $collection_key = 'fields';
    /**
     * @var string
     */
    public $entity;
    protected $fieldsType = Field::class;
    protected $fieldsDataType = 'array';
    /**
     * @param string
     */
    public function setEntity($entity)
    {
        $this->entity = $entity;
    }
    /**
     * @return string
     */
    public function getEntity()
    {
        return $this->entity;
    }
    /**
     * @param Field[]
     */
    public function setFields($fields)
    {
        $this->fields = $fields;
    }
    /**
     * @return Field[]
     */
    public function getFields()
    {
        return $this->fields;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(RuntimeEntitySchema::class, 'RoRdb\\Google_Service_Connectors_RuntimeEntitySchema');
