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

class SuperStickerMetadata extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $altText;
    /**
     * @var string
     */
    public $altTextLanguage;
    /**
     * @var string
     */
    public $stickerId;
    /**
     * @param string
     */
    public function setAltText($altText)
    {
        $this->altText = $altText;
    }
    /**
     * @return string
     */
    public function getAltText()
    {
        return $this->altText;
    }
    /**
     * @param string
     */
    public function setAltTextLanguage($altTextLanguage)
    {
        $this->altTextLanguage = $altTextLanguage;
    }
    /**
     * @return string
     */
    public function getAltTextLanguage()
    {
        return $this->altTextLanguage;
    }
    /**
     * @param string
     */
    public function setStickerId($stickerId)
    {
        $this->stickerId = $stickerId;
    }
    /**
     * @return string
     */
    public function getStickerId()
    {
        return $this->stickerId;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(SuperStickerMetadata::class, 'RoRdb\\Google_Service_YouTube_SuperStickerMetadata');
