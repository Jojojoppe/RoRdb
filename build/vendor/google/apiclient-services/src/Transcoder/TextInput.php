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
namespace RoRdb\Google\Service\Transcoder;

class TextInput extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $key;
    /**
     * @var int
     */
    public $track;
    /**
     * @param string
     */
    public function setKey($key)
    {
        $this->key = $key;
    }
    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }
    /**
     * @param int
     */
    public function setTrack($track)
    {
        $this->track = $track;
    }
    /**
     * @return int
     */
    public function getTrack()
    {
        return $this->track;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(TextInput::class, 'RoRdb\\Google_Service_Transcoder_TextInput');
