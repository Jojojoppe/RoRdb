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
namespace RoRdb\Google\Service\Docs;

class Bullet extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $listId;
    /**
     * @var int
     */
    public $nestingLevel;
    protected $textStyleType = TextStyle::class;
    protected $textStyleDataType = '';
    /**
     * @param string
     */
    public function setListId($listId)
    {
        $this->listId = $listId;
    }
    /**
     * @return string
     */
    public function getListId()
    {
        return $this->listId;
    }
    /**
     * @param int
     */
    public function setNestingLevel($nestingLevel)
    {
        $this->nestingLevel = $nestingLevel;
    }
    /**
     * @return int
     */
    public function getNestingLevel()
    {
        return $this->nestingLevel;
    }
    /**
     * @param TextStyle
     */
    public function setTextStyle(TextStyle $textStyle)
    {
        $this->textStyle = $textStyle;
    }
    /**
     * @return TextStyle
     */
    public function getTextStyle()
    {
        return $this->textStyle;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(Bullet::class, 'RoRdb\\Google_Service_Docs_Bullet');
