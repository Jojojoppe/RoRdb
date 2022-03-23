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
namespace RoRdb\Google\Service\AdExchangeBuyerII;

class SecurityContext extends \RoRdb\Google\Collection
{
    protected $collection_key = 'securities';
    /**
     * @var string[]
     */
    public $securities;
    /**
     * @param string[]
     */
    public function setSecurities($securities)
    {
        $this->securities = $securities;
    }
    /**
     * @return string[]
     */
    public function getSecurities()
    {
        return $this->securities;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(SecurityContext::class, 'RoRdb\\Google_Service_AdExchangeBuyerII_SecurityContext');