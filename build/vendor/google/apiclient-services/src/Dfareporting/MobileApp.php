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
namespace RoRdb\Google\Service\Dfareporting;

class MobileApp extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $directory;
    /**
     * @var string
     */
    public $id;
    /**
     * @var string
     */
    public $kind;
    /**
     * @var string
     */
    public $publisherName;
    /**
     * @var string
     */
    public $title;
    /**
     * @param string
     */
    public function setDirectory($directory)
    {
        $this->directory = $directory;
    }
    /**
     * @return string
     */
    public function getDirectory()
    {
        return $this->directory;
    }
    /**
     * @param string
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
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
    public function setPublisherName($publisherName)
    {
        $this->publisherName = $publisherName;
    }
    /**
     * @return string
     */
    public function getPublisherName()
    {
        return $this->publisherName;
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
\class_alias(MobileApp::class, 'RoRdb\\Google_Service_Dfareporting_MobileApp');
