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
namespace RoRdb\Google\Service\Compute;

class ExternalVpnGateway extends \RoRdb\Google\Collection
{
    protected $collection_key = 'interfaces';
    /**
     * @var string
     */
    public $creationTimestamp;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $id;
    protected $interfacesType = ExternalVpnGatewayInterface::class;
    protected $interfacesDataType = 'array';
    /**
     * @var string
     */
    public $kind;
    /**
     * @var string
     */
    public $labelFingerprint;
    /**
     * @var string[]
     */
    public $labels;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $redundancyType;
    /**
     * @var string
     */
    public $selfLink;
    /**
     * @param string
     */
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creationTimestamp = $creationTimestamp;
    }
    /**
     * @return string
     */
    public function getCreationTimestamp()
    {
        return $this->creationTimestamp;
    }
    /**
     * @param string
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * @param string
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @param ExternalVpnGatewayInterface[]
     */
    public function setInterfaces($interfaces)
    {
        $this->interfaces = $interfaces;
    }
    /**
     * @return ExternalVpnGatewayInterface[]
     */
    public function getInterfaces()
    {
        return $this->interfaces;
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
    public function setLabelFingerprint($labelFingerprint)
    {
        $this->labelFingerprint = $labelFingerprint;
    }
    /**
     * @return string
     */
    public function getLabelFingerprint()
    {
        return $this->labelFingerprint;
    }
    /**
     * @param string[]
     */
    public function setLabels($labels)
    {
        $this->labels = $labels;
    }
    /**
     * @return string[]
     */
    public function getLabels()
    {
        return $this->labels;
    }
    /**
     * @param string
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @param string
     */
    public function setRedundancyType($redundancyType)
    {
        $this->redundancyType = $redundancyType;
    }
    /**
     * @return string
     */
    public function getRedundancyType()
    {
        return $this->redundancyType;
    }
    /**
     * @param string
     */
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
    /**
     * @return string
     */
    public function getSelfLink()
    {
        return $this->selfLink;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(ExternalVpnGateway::class, 'RoRdb\\Google_Service_Compute_ExternalVpnGateway');
