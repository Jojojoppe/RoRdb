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
namespace RoRdb\Google\Service\Firestore;

class DocumentRemove extends \RoRdb\Google\Collection
{
    protected $collection_key = 'removedTargetIds';
    /**
     * @var string
     */
    public $document;
    /**
     * @var string
     */
    public $readTime;
    /**
     * @var int[]
     */
    public $removedTargetIds;
    /**
     * @param string
     */
    public function setDocument($document)
    {
        $this->document = $document;
    }
    /**
     * @return string
     */
    public function getDocument()
    {
        return $this->document;
    }
    /**
     * @param string
     */
    public function setReadTime($readTime)
    {
        $this->readTime = $readTime;
    }
    /**
     * @return string
     */
    public function getReadTime()
    {
        return $this->readTime;
    }
    /**
     * @param int[]
     */
    public function setRemovedTargetIds($removedTargetIds)
    {
        $this->removedTargetIds = $removedTargetIds;
    }
    /**
     * @return int[]
     */
    public function getRemovedTargetIds()
    {
        return $this->removedTargetIds;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(DocumentRemove::class, 'RoRdb\\Google_Service_Firestore_DocumentRemove');
