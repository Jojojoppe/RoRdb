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

class Secrets extends \RoRdb\Google\Collection
{
    protected $collection_key = 'secretManager';
    protected $inlineType = InlineSecret::class;
    protected $inlineDataType = 'array';
    protected $secretManagerType = SecretManagerSecret::class;
    protected $secretManagerDataType = 'array';
    /**
     * @param InlineSecret[]
     */
    public function setInline($inline)
    {
        $this->inline = $inline;
    }
    /**
     * @return InlineSecret[]
     */
    public function getInline()
    {
        return $this->inline;
    }
    /**
     * @param SecretManagerSecret[]
     */
    public function setSecretManager($secretManager)
    {
        $this->secretManager = $secretManager;
    }
    /**
     * @return SecretManagerSecret[]
     */
    public function getSecretManager()
    {
        return $this->secretManager;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(Secrets::class, 'RoRdb\\Google_Service_CloudBuild_Secrets');
