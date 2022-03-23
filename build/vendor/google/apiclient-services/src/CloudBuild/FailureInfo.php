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
namespace RoRdb\Google\Service\CloudBuild;

class FailureInfo extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $detail;
    /**
     * @var string
     */
    public $type;
    /**
     * @param string
     */
    public function setDetail($detail)
    {
        $this->detail = $detail;
    }
    /**
     * @return string
     */
    public function getDetail()
    {
        return $this->detail;
    }
    /**
     * @param string
     */
    public function setType($type)
    {
        $this->type = $type;
    }
    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(FailureInfo::class, 'RoRdb\\Google_Service_CloudBuild_FailureInfo');