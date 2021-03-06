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
namespace RoRdb\Google\Service\Games;

class SnapshotImage extends \RoRdb\Google\Model
{
    protected $internal_gapi_mappings = ["mimeType" => "mime_type"];
    /**
     * @var int
     */
    public $height;
    /**
     * @var string
     */
    public $kind;
    /**
     * @var string
     */
    public $mimeType;
    /**
     * @var string
     */
    public $url;
    /**
     * @var int
     */
    public $width;
    /**
     * @param int
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }
    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
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
    public function setMimeType($mimeType)
    {
        $this->mimeType = $mimeType;
    }
    /**
     * @return string
     */
    public function getMimeType()
    {
        return $this->mimeType;
    }
    /**
     * @param string
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }
    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
    /**
     * @param int
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }
    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(SnapshotImage::class, 'RoRdb\\Google_Service_Games_SnapshotImage');
