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
namespace RoRdb\Google\Service\ArtifactRegistry;

class ImportAptArtifactsResponse extends \RoRdb\Google\Collection
{
    protected $collection_key = 'errors';
    protected $aptArtifactsType = AptArtifact::class;
    protected $aptArtifactsDataType = 'array';
    protected $errorsType = ImportAptArtifactsErrorInfo::class;
    protected $errorsDataType = 'array';
    /**
     * @param AptArtifact[]
     */
    public function setAptArtifacts($aptArtifacts)
    {
        $this->aptArtifacts = $aptArtifacts;
    }
    /**
     * @return AptArtifact[]
     */
    public function getAptArtifacts()
    {
        return $this->aptArtifacts;
    }
    /**
     * @param ImportAptArtifactsErrorInfo[]
     */
    public function setErrors($errors)
    {
        $this->errors = $errors;
    }
    /**
     * @return ImportAptArtifactsErrorInfo[]
     */
    public function getErrors()
    {
        return $this->errors;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(ImportAptArtifactsResponse::class, 'RoRdb\\Google_Service_ArtifactRegistry_ImportAptArtifactsResponse');
