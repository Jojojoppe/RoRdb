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
namespace RoRdb\Google\Service\SemanticTile;

class Geometry extends \RoRdb\Google\Collection
{
    protected $collection_key = 'modeledVolumes';
    protected $areasType = Area::class;
    protected $areasDataType = 'array';
    protected $extrudedAreasType = ExtrudedArea::class;
    protected $extrudedAreasDataType = 'array';
    protected $linesType = Line::class;
    protected $linesDataType = 'array';
    protected $modeledVolumesType = ModeledVolume::class;
    protected $modeledVolumesDataType = 'array';
    /**
     * @param Area[]
     */
    public function setAreas($areas)
    {
        $this->areas = $areas;
    }
    /**
     * @return Area[]
     */
    public function getAreas()
    {
        return $this->areas;
    }
    /**
     * @param ExtrudedArea[]
     */
    public function setExtrudedAreas($extrudedAreas)
    {
        $this->extrudedAreas = $extrudedAreas;
    }
    /**
     * @return ExtrudedArea[]
     */
    public function getExtrudedAreas()
    {
        return $this->extrudedAreas;
    }
    /**
     * @param Line[]
     */
    public function setLines($lines)
    {
        $this->lines = $lines;
    }
    /**
     * @return Line[]
     */
    public function getLines()
    {
        return $this->lines;
    }
    /**
     * @param ModeledVolume[]
     */
    public function setModeledVolumes($modeledVolumes)
    {
        $this->modeledVolumes = $modeledVolumes;
    }
    /**
     * @return ModeledVolume[]
     */
    public function getModeledVolumes()
    {
        return $this->modeledVolumes;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(Geometry::class, 'RoRdb\\Google_Service_SemanticTile_Geometry');
