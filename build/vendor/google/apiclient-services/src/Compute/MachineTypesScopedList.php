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

class MachineTypesScopedList extends \RoRdb\Google\Collection
{
    protected $collection_key = 'machineTypes';
    protected $machineTypesType = MachineType::class;
    protected $machineTypesDataType = 'array';
    protected $warningType = MachineTypesScopedListWarning::class;
    protected $warningDataType = '';
    /**
     * @param MachineType[]
     */
    public function setMachineTypes($machineTypes)
    {
        $this->machineTypes = $machineTypes;
    }
    /**
     * @return MachineType[]
     */
    public function getMachineTypes()
    {
        return $this->machineTypes;
    }
    /**
     * @param MachineTypesScopedListWarning
     */
    public function setWarning(MachineTypesScopedListWarning $warning)
    {
        $this->warning = $warning;
    }
    /**
     * @return MachineTypesScopedListWarning
     */
    public function getWarning()
    {
        return $this->warning;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(MachineTypesScopedList::class, 'RoRdb\\Google_Service_Compute_MachineTypesScopedList');