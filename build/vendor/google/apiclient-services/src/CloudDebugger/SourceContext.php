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
namespace RoRdb\Google\Service\CloudDebugger;

class SourceContext extends \RoRdb\Google\Model
{
    protected $cloudRepoType = CloudRepoSourceContext::class;
    protected $cloudRepoDataType = '';
    protected $cloudWorkspaceType = CloudWorkspaceSourceContext::class;
    protected $cloudWorkspaceDataType = '';
    protected $gerritType = GerritSourceContext::class;
    protected $gerritDataType = '';
    protected $gitType = GitSourceContext::class;
    protected $gitDataType = '';
    /**
     * @param CloudRepoSourceContext
     */
    public function setCloudRepo(CloudRepoSourceContext $cloudRepo)
    {
        $this->cloudRepo = $cloudRepo;
    }
    /**
     * @return CloudRepoSourceContext
     */
    public function getCloudRepo()
    {
        return $this->cloudRepo;
    }
    /**
     * @param CloudWorkspaceSourceContext
     */
    public function setCloudWorkspace(CloudWorkspaceSourceContext $cloudWorkspace)
    {
        $this->cloudWorkspace = $cloudWorkspace;
    }
    /**
     * @return CloudWorkspaceSourceContext
     */
    public function getCloudWorkspace()
    {
        return $this->cloudWorkspace;
    }
    /**
     * @param GerritSourceContext
     */
    public function setGerrit(GerritSourceContext $gerrit)
    {
        $this->gerrit = $gerrit;
    }
    /**
     * @return GerritSourceContext
     */
    public function getGerrit()
    {
        return $this->gerrit;
    }
    /**
     * @param GitSourceContext
     */
    public function setGit(GitSourceContext $git)
    {
        $this->git = $git;
    }
    /**
     * @return GitSourceContext
     */
    public function getGit()
    {
        return $this->git;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(SourceContext::class, 'RoRdb\\Google_Service_CloudDebugger_SourceContext');
