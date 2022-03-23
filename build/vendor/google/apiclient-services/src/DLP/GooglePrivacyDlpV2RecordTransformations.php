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
namespace RoRdb\Google\Service\DLP;

class GooglePrivacyDlpV2RecordTransformations extends \RoRdb\Google\Collection
{
    protected $collection_key = 'recordSuppressions';
    protected $fieldTransformationsType = GooglePrivacyDlpV2FieldTransformation::class;
    protected $fieldTransformationsDataType = 'array';
    protected $recordSuppressionsType = GooglePrivacyDlpV2RecordSuppression::class;
    protected $recordSuppressionsDataType = 'array';
    /**
     * @param GooglePrivacyDlpV2FieldTransformation[]
     */
    public function setFieldTransformations($fieldTransformations)
    {
        $this->fieldTransformations = $fieldTransformations;
    }
    /**
     * @return GooglePrivacyDlpV2FieldTransformation[]
     */
    public function getFieldTransformations()
    {
        return $this->fieldTransformations;
    }
    /**
     * @param GooglePrivacyDlpV2RecordSuppression[]
     */
    public function setRecordSuppressions($recordSuppressions)
    {
        $this->recordSuppressions = $recordSuppressions;
    }
    /**
     * @return GooglePrivacyDlpV2RecordSuppression[]
     */
    public function getRecordSuppressions()
    {
        return $this->recordSuppressions;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(GooglePrivacyDlpV2RecordTransformations::class, 'RoRdb\\Google_Service_DLP_GooglePrivacyDlpV2RecordTransformations');
