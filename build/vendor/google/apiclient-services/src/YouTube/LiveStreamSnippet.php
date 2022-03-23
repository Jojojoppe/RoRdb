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
namespace RoRdb\Google\Service\YouTube;

class LiveStreamSnippet extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $channelId;
    /**
     * @var string
     */
    public $description;
    /**
     * @var bool
     */
    public $isDefaultStream;
    /**
     * @var string
     */
    public $publishedAt;
    /**
     * @var string
     */
    public $title;
    /**
     * @param string
     */
    public function setChannelId($channelId)
    {
        $this->channelId = $channelId;
    }
    /**
     * @return string
     */
    public function getChannelId()
    {
        return $this->channelId;
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
     * @param bool
     */
    public function setIsDefaultStream($isDefaultStream)
    {
        $this->isDefaultStream = $isDefaultStream;
    }
    /**
     * @return bool
     */
    public function getIsDefaultStream()
    {
        return $this->isDefaultStream;
    }
    /**
     * @param string
     */
    public function setPublishedAt($publishedAt)
    {
        $this->publishedAt = $publishedAt;
    }
    /**
     * @return string
     */
    public function getPublishedAt()
    {
        return $this->publishedAt;
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
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(LiveStreamSnippet::class, 'RoRdb\\Google_Service_YouTube_LiveStreamSnippet');
