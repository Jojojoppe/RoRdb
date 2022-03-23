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
namespace RoRdb\Google\Service\TrafficDirectorService;

class ClientConfig extends \RoRdb\Google\Collection
{
    protected $collection_key = 'xdsConfig';
    protected $nodeType = Node::class;
    protected $nodeDataType = '';
    protected $xdsConfigType = PerXdsConfig::class;
    protected $xdsConfigDataType = 'array';
    /**
     * @param Node
     */
    public function setNode(Node $node)
    {
        $this->node = $node;
    }
    /**
     * @return Node
     */
    public function getNode()
    {
        return $this->node;
    }
    /**
     * @param PerXdsConfig[]
     */
    public function setXdsConfig($xdsConfig)
    {
        $this->xdsConfig = $xdsConfig;
    }
    /**
     * @return PerXdsConfig[]
     */
    public function getXdsConfig()
    {
        return $this->xdsConfig;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(ClientConfig::class, 'RoRdb\\Google_Service_TrafficDirectorService_ClientConfig');
