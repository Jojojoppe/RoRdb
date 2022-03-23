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
namespace RoRdb\Google\Service\Document;

class GoogleCloudDocumentaiV1beta1DocumentProvenanceParent extends \RoRdb\Google\Model
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var int
     */
    public $index;
    /**
     * @var int
     */
    public $revision;
    /**
     * @param int
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @param int
     */
    public function setIndex($index)
    {
        $this->index = $index;
    }
    /**
     * @return int
     */
    public function getIndex()
    {
        return $this->index;
    }
    /**
     * @param int
     */
    public function setRevision($revision)
    {
        $this->revision = $revision;
    }
    /**
     * @return int
     */
    public function getRevision()
    {
        return $this->revision;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(GoogleCloudDocumentaiV1beta1DocumentProvenanceParent::class, 'RoRdb\\Google_Service_Document_GoogleCloudDocumentaiV1beta1DocumentProvenanceParent');