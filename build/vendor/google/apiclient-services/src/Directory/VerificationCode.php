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
namespace RoRdb\Google\Service\Directory;

class VerificationCode extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $etag;
    /**
     * @var string
     */
    public $kind;
    /**
     * @var string
     */
    public $userId;
    /**
     * @var string
     */
    public $verificationCode;
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
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }
    /**
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }
    /**
     * @param string
     */
    public function setVerificationCode($verificationCode)
    {
        $this->verificationCode = $verificationCode;
    }
    /**
     * @return string
     */
    public function getVerificationCode()
    {
        return $this->verificationCode;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(VerificationCode::class, 'RoRdb\\Google_Service_Directory_VerificationCode');
