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
namespace RoRdb\Google\Service\Slides;

class ReplaceImageRequest extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $imageObjectId;
    /**
     * @var string
     */
    public $imageReplaceMethod;
    /**
     * @var string
     */
    public $url;
    /**
     * @param string
     */
    public function setImageObjectId($imageObjectId)
    {
        $this->imageObjectId = $imageObjectId;
    }
    /**
     * @return string
     */
    public function getImageObjectId()
    {
        return $this->imageObjectId;
    }
    /**
     * @param string
     */
    public function setImageReplaceMethod($imageReplaceMethod)
    {
        $this->imageReplaceMethod = $imageReplaceMethod;
    }
    /**
     * @return string
     */
    public function getImageReplaceMethod()
    {
        return $this->imageReplaceMethod;
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
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(ReplaceImageRequest::class, 'RoRdb\\Google_Service_Slides_ReplaceImageRequest');
