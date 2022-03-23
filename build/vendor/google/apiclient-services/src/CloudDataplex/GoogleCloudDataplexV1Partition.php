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
namespace RoRdb\Google\Service\CloudDataplex;

class GoogleCloudDataplexV1Partition extends \RoRdb\Google\Collection
{
    protected $collection_key = 'values';
    /**
     * @var string
     */
    public $etag;
    /**
     * @var string
     */
    public $location;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string[]
     */
    public $values;
    /**
     * @param string
     */
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }
    /**
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }
    /**
     * @param string
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }
    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
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
     * @param string[]
     */
    public function setValues($values)
    {
        $this->values = $values;
    }
    /**
     * @return string[]
     */
    public function getValues()
    {
        return $this->values;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(GoogleCloudDataplexV1Partition::class, 'RoRdb\\Google_Service_CloudDataplex_GoogleCloudDataplexV1Partition');