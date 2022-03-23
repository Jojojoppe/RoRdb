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
namespace RoRdb\Google\Service\Compute;

class HttpQueryParameterMatch extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $exactMatch;
    /**
     * @var string
     */
    public $name;
    /**
     * @var bool
     */
    public $presentMatch;
    /**
     * @var string
     */
    public $regexMatch;
    /**
     * @param string
     */
    public function setExactMatch($exactMatch)
    {
        $this->exactMatch = $exactMatch;
    }
    /**
     * @return string
     */
    public function getExactMatch()
    {
        return $this->exactMatch;
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
     * @param bool
     */
    public function setPresentMatch($presentMatch)
    {
        $this->presentMatch = $presentMatch;
    }
    /**
     * @return bool
     */
    public function getPresentMatch()
    {
        return $this->presentMatch;
    }
    /**
     * @param string
     */
    public function setRegexMatch($regexMatch)
    {
        $this->regexMatch = $regexMatch;
    }
    /**
     * @return string
     */
    public function getRegexMatch()
    {
        return $this->regexMatch;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(HttpQueryParameterMatch::class, 'RoRdb\\Google_Service_Compute_HttpQueryParameterMatch');