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
namespace RoRdb\Google\Service\Books;

class OffersItemsItems extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $author;
    /**
     * @var string
     */
    public $canonicalVolumeLink;
    /**
     * @var string
     */
    public $coverUrl;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $title;
    /**
     * @var string
     */
    public $volumeId;
    /**
     * @param string
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }
    /**
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }
    /**
     * @param string
     */
    public function setCanonicalVolumeLink($canonicalVolumeLink)
    {
        $this->canonicalVolumeLink = $canonicalVolumeLink;
    }
    /**
     * @return string
     */
    public function getCanonicalVolumeLink()
    {
        return $this->canonicalVolumeLink;
    }
    /**
     * @param string
     */
    public function setCoverUrl($coverUrl)
    {
        $this->coverUrl = $coverUrl;
    }
    /**
     * @return string
     */
    public function getCoverUrl()
    {
        return $this->coverUrl;
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
    public function setTitle($title)
    {
        $this->title = $title;
    }
    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
    /**
     * @param string
     */
    public function setVolumeId($volumeId)
    {
        $this->volumeId = $volumeId;
    }
    /**
     * @return string
     */
    public function getVolumeId()
    {
        return $this->volumeId;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(OffersItemsItems::class, 'RoRdb\\Google_Service_Books_OffersItemsItems');
