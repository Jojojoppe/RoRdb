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
namespace RoRdb\Google\Service\GroupsMigration;

class Groups extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $kind;
    /**
     * @var string
     */
    public $responseCode;
    /**
     * @param string
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    /**
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }
    /**
     * @param string
     */
    public function setResponseCode($responseCode)
    {
        $this->responseCode = $responseCode;
    }
    /**
     * @return string
     */
    public function getResponseCode()
    {
        return $this->responseCode;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(Groups::class, 'RoRdb\\Google_Service_GroupsMigration_Groups');
