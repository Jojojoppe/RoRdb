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
namespace RoRdb\Google\Service\NetworkSecurity;

class MTLSPolicy extends \RoRdb\Google\Collection
{
    protected $collection_key = 'clientValidationCa';
    protected $clientValidationCaType = ValidationCA::class;
    protected $clientValidationCaDataType = 'array';
    /**
     * @param ValidationCA[]
     */
    public function setClientValidationCa($clientValidationCa)
    {
        $this->clientValidationCa = $clientValidationCa;
    }
    /**
     * @return ValidationCA[]
     */
    public function getClientValidationCa()
    {
        return $this->clientValidationCa;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(MTLSPolicy::class, 'RoRdb\\Google_Service_NetworkSecurity_MTLSPolicy');
