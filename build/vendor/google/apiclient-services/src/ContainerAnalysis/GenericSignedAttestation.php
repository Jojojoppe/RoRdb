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

class GenericSignedAttestation extends \RoRdb\Google\Collection
{
    protected $collection_key = 'signatures';
    public $contentType;
    public $serializedPayload;
    protected $signaturesType = Signature::class;
    protected $signaturesDataType = 'array';
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
    }
    public function getContentType()
    {
        return $this->contentType;
    }
    public function setSerializedPayload($serializedPayload)
    {
        $this->serializedPayload = $serializedPayload;
    }
    public function getSerializedPayload()
    {
        return $this->serializedPayload;
    }
    /**
     * @param Signature[]
     */
    public function setSignatures($signatures)
    {
        $this->signatures = $signatures;
    }
    /**
     * @return Signature[]
     */
    public function getSignatures()
    {
        return $this->signatures;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(GenericSignedAttestation::class, 'RoRdb\\Google_Service_ContainerAnalysis_GenericSignedAttestation');
