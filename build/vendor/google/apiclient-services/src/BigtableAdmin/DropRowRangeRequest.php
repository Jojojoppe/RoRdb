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
namespace RoRdb\Google\Service\BigtableAdmin;

class DropRowRangeRequest extends \RoRdb\Google\Model
{
    /**
     * @var bool
     */
    public $deleteAllDataFromTable;
    /**
     * @var string
     */
    public $rowKeyPrefix;
    /**
     * @param bool
     */
    public function setDeleteAllDataFromTable($deleteAllDataFromTable)
    {
        $this->deleteAllDataFromTable = $deleteAllDataFromTable;
    }
    /**
     * @return bool
     */
    public function getDeleteAllDataFromTable()
    {
        return $this->deleteAllDataFromTable;
    }
    /**
     * @param string
     */
    public function setRowKeyPrefix($rowKeyPrefix)
    {
        $this->rowKeyPrefix = $rowKeyPrefix;
    }
    /**
     * @return string
     */
    public function getRowKeyPrefix()
    {
        return $this->rowKeyPrefix;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(DropRowRangeRequest::class, 'RoRdb\\Google_Service_BigtableAdmin_DropRowRangeRequest');
