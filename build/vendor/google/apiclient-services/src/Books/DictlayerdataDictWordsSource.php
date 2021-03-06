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

class DictlayerdataDictWordsSource extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $attribution;
    /**
     * @var string
     */
    public $url;
    /**
     * @param string
     */
    public function setAttribution($attribution)
    {
        $this->attribution = $attribution;
    }
    /**
     * @return string
     */
    public function getAttribution()
    {
        return $this->attribution;
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
\class_alias(DictlayerdataDictWordsSource::class, 'RoRdb\\Google_Service_Books_DictlayerdataDictWordsSource');
