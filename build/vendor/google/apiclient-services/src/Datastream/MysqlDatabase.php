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
namespace RoRdb\Google\Service\Datastream;

class MysqlDatabase extends \RoRdb\Google\Collection
{
    protected $collection_key = 'mysqlTables';
    /**
     * @var string
     */
    public $database;
    protected $mysqlTablesType = MysqlTable::class;
    protected $mysqlTablesDataType = 'array';
    /**
     * @param string
     */
    public function setDatabase($database)
    {
        $this->database = $database;
    }
    /**
     * @return string
     */
    public function getDatabase()
    {
        return $this->database;
    }
    /**
     * @param MysqlTable[]
     */
    public function setMysqlTables($mysqlTables)
    {
        $this->mysqlTables = $mysqlTables;
    }
    /**
     * @return MysqlTable[]
     */
    public function getMysqlTables()
    {
        return $this->mysqlTables;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(MysqlDatabase::class, 'RoRdb\\Google_Service_Datastream_MysqlDatabase');
