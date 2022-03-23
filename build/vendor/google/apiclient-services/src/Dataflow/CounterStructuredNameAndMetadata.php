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
namespace RoRdb\Google\Service\Dataflow;

class CounterStructuredNameAndMetadata extends \RoRdb\Google\Model
{
    protected $metadataType = CounterMetadata::class;
    protected $metadataDataType = '';
    protected $nameType = CounterStructuredName::class;
    protected $nameDataType = '';
    /**
     * @param CounterMetadata
     */
    public function setMetadata(CounterMetadata $metadata)
    {
        $this->metadata = $metadata;
    }
    /**
     * @return CounterMetadata
     */
    public function getMetadata()
    {
        return $this->metadata;
    }
    /**
     * @param CounterStructuredName
     */
    public function setName(CounterStructuredName $name)
    {
        $this->name = $name;
    }
    /**
     * @return CounterStructuredName
     */
    public function getName()
    {
        return $this->name;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(CounterStructuredNameAndMetadata::class, 'RoRdb\\Google_Service_Dataflow_CounterStructuredNameAndMetadata');
