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
namespace RoRdb\Google\Service\Libraryagent;

class GoogleExampleLibraryagentV1Book extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $author;
    /**
     * @var string
     */
    public $name;
    /**
     * @var bool
     */
    public $read;
    /**
     * @var string
     */
    public $title;
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
    public function setName($name)
    {
        $this->name = $name;
    }
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @param bool
     */
    public function setRead($read)
    {
        $this->read = $read;
    }
    /**
     * @return bool
     */
    public function getRead()
    {
        return $this->read;
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
\class_alias(GoogleExampleLibraryagentV1Book::class, 'RoRdb\\Google_Service_Libraryagent_GoogleExampleLibraryagentV1Book');
