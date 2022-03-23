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
namespace RoRdb\Google\Service\Dataflow;

class IntegerMean extends \RoRdb\Google\Model
{
    protected $countType = SplitInt64::class;
    protected $countDataType = '';
    protected $sumType = SplitInt64::class;
    protected $sumDataType = '';
    /**
     * @param SplitInt64
     */
    public function setCount(SplitInt64 $count)
    {
        $this->count = $count;
    }
    /**
     * @return SplitInt64
     */
    public function getCount()
    {
        return $this->count;
    }
    /**
     * @param SplitInt64
     */
    public function setSum(SplitInt64 $sum)
    {
        $this->sum = $sum;
    }
    /**
     * @return SplitInt64
     */
    public function getSum()
    {
        return $this->sum;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(IntegerMean::class, 'RoRdb\\Google_Service_Dataflow_IntegerMean');