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
namespace RoRdb\Google\Service\CloudIot;

class DeviceCredential extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $expirationTime;
    protected $publicKeyType = PublicKeyCredential::class;
    protected $publicKeyDataType = '';
    /**
     * @param string
     */
    public function setExpirationTime($expirationTime)
    {
        $this->expirationTime = $expirationTime;
    }
    /**
     * @return string
     */
    public function getExpirationTime()
    {
        return $this->expirationTime;
    }
    /**
     * @param PublicKeyCredential
     */
    public function setPublicKey(PublicKeyCredential $publicKey)
    {
        $this->publicKey = $publicKey;
    }
    /**
     * @return PublicKeyCredential
     */
    public function getPublicKey()
    {
        return $this->publicKey;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(DeviceCredential::class, 'RoRdb\\Google_Service_CloudIot_DeviceCredential');
