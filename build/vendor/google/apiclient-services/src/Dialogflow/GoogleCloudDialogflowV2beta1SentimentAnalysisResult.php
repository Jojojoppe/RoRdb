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
namespace RoRdb\Google\Service\Dialogflow;

class GoogleCloudDialogflowV2beta1SentimentAnalysisResult extends \RoRdb\Google\Model
{
    protected $queryTextSentimentType = GoogleCloudDialogflowV2beta1Sentiment::class;
    protected $queryTextSentimentDataType = '';
    /**
     * @param GoogleCloudDialogflowV2beta1Sentiment
     */
    public function setQueryTextSentiment(GoogleCloudDialogflowV2beta1Sentiment $queryTextSentiment)
    {
        $this->queryTextSentiment = $queryTextSentiment;
    }
    /**
     * @return GoogleCloudDialogflowV2beta1Sentiment
     */
    public function getQueryTextSentiment()
    {
        return $this->queryTextSentiment;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(GoogleCloudDialogflowV2beta1SentimentAnalysisResult::class, 'RoRdb\\Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1SentimentAnalysisResult');
