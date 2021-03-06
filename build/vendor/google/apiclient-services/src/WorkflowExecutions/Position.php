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
namespace RoRdb\Google\Service\WorkflowExecutions;

class Position extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $column;
    /**
     * @var string
     */
    public $length;
    /**
     * @var string
     */
    public $line;
    /**
     * @param string
     */
    public function setColumn($column)
    {
        $this->column = $column;
    }
    /**
     * @return string
     */
    public function getColumn()
    {
        return $this->column;
    }
    /**
     * @param string
     */
    public function setLength($length)
    {
        $this->length = $length;
    }
    /**
     * @return string
     */
    public function getLength()
    {
        return $this->length;
    }
    /**
     * @param string
     */
    public function setLine($line)
    {
        $this->line = $line;
    }
    /**
     * @return string
     */
    public function getLine()
    {
        return $this->line;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(Position::class, 'RoRdb\\Google_Service_WorkflowExecutions_Position');
