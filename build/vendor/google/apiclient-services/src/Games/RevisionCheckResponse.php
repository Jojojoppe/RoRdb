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
namespace RoRdb\Google\Service\Games;

class RevisionCheckResponse extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $apiVersion;
    /**
     * @var string
     */
    public $kind;
    /**
     * @var string
     */
    public $revisionStatus;
    /**
     * @param string
     */
    public function setApiVersion($apiVersion)
    {
        $this->apiVersion = $apiVersion;
    }
    /**
     * @return string
     */
    public function getApiVersion()
    {
        return $this->apiVersion;
    }
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
    public function setRevisionStatus($revisionStatus)
    {
        $this->revisionStatus = $revisionStatus;
    }
    /**
     * @return string
     */
    public function getRevisionStatus()
    {
        return $this->revisionStatus;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(RevisionCheckResponse::class, 'RoRdb\\Google_Service_Games_RevisionCheckResponse');
