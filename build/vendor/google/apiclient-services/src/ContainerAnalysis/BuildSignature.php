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
namespace RoRdb\Google\Service\ContainerAnalysis;

class BuildSignature extends \RoRdb\Google\Model
{
    public $keyId;
    public $keyType;
    public $publicKey;
    public $signature;
    public function setKeyId($keyId)
    {
        $this->keyId = $keyId;
    }
    public function getKeyId()
    {
        return $this->keyId;
    }
    public function setKeyType($keyType)
    {
        $this->keyType = $keyType;
    }
    public function getKeyType()
    {
        return $this->keyType;
    }
    public function setPublicKey($publicKey)
    {
        $this->publicKey = $publicKey;
    }
    public function getPublicKey()
    {
        return $this->publicKey;
    }
    public function setSignature($signature)
    {
        $this->signature = $signature;
    }
    public function getSignature()
    {
        return $this->signature;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(BuildSignature::class, 'RoRdb\\Google_Service_ContainerAnalysis_BuildSignature');
