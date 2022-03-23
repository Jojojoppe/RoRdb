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
namespace RoRdb\Google\Service\Iam;

class LintPolicyResponse extends \RoRdb\Google\Collection
{
    protected $collection_key = 'lintResults';
    protected $lintResultsType = LintResult::class;
    protected $lintResultsDataType = 'array';
    /**
     * @param LintResult[]
     */
    public function setLintResults($lintResults)
    {
        $this->lintResults = $lintResults;
    }
    /**
     * @return LintResult[]
     */
    public function getLintResults()
    {
        return $this->lintResults;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(LintPolicyResponse::class, 'RoRdb\\Google_Service_Iam_LintPolicyResponse');
