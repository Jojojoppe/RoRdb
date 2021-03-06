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

class ModeledVolume extends \RoRdb\Google\Collection
{
    protected $collection_key = 'strips';
    protected $stripsType = TriangleStrip::class;
    protected $stripsDataType = 'array';
    protected $vertexOffsetsType = Vertex3DList::class;
    protected $vertexOffsetsDataType = '';
    /**
     * @param TriangleStrip[]
     */
    public function setStrips($strips)
    {
        $this->strips = $strips;
    }
    /**
     * @return TriangleStrip[]
     */
    public function getStrips()
    {
        return $this->strips;
    }
    /**
     * @param Vertex3DList
     */
    public function setVertexOffsets(Vertex3DList $vertexOffsets)
    {
        $this->vertexOffsets = $vertexOffsets;
    }
    /**
     * @return Vertex3DList
     */
    public function getVertexOffsets()
    {
        return $this->vertexOffsets;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(ModeledVolume::class, 'RoRdb\\Google_Service_SemanticTile_ModeledVolume');
