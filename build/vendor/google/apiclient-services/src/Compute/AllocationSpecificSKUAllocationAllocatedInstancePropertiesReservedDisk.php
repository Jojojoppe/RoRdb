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
namespace RoRdb\Google\Service\Compute;

class AllocationSpecificSKUAllocationAllocatedInstancePropertiesReservedDisk extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $diskSizeGb;
    /**
     * @var string
     */
    public $interface;
    /**
     * @param string
     */
    public function setDiskSizeGb($diskSizeGb)
    {
        $this->diskSizeGb = $diskSizeGb;
    }
    /**
     * @return string
     */
    public function getDiskSizeGb()
    {
        return $this->diskSizeGb;
    }
    /**
     * @param string
     */
    public function setInterface($interface)
    {
        $this->interface = $interface;
    }
    /**
     * @return string
     */
    public function getInterface()
    {
        return $this->interface;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(AllocationSpecificSKUAllocationAllocatedInstancePropertiesReservedDisk::class, 'RoRdb\\Google_Service_Compute_AllocationSpecificSKUAllocationAllocatedInstancePropertiesReservedDisk');
