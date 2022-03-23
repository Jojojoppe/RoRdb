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
namespace RoRdb\Google\Service\CivicInfo;

class DivisionSearchResult extends \RoRdb\Google\Collection
{
    protected $collection_key = 'aliases';
    /**
     * @var string[]
     */
    public $aliases;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $ocdId;
    /**
     * @param string[]
     */
    public function setAliases($aliases)
    {
        $this->aliases = $aliases;
    }
    /**
     * @return string[]
     */
    public function getAliases()
    {
        return $this->aliases;
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
     * @param string
     */
    public function setOcdId($ocdId)
    {
        $this->ocdId = $ocdId;
    }
    /**
     * @return string
     */
    public function getOcdId()
    {
        return $this->ocdId;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(DivisionSearchResult::class, 'RoRdb\\Google_Service_CivicInfo_DivisionSearchResult');