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
namespace Google\Site_Kit_Dependencies\Google\Service\TagManager\Resource;

use Google\Site_Kit_Dependencies\Google\Service\TagManager\CreateContainerVersionRequestVersionOptions;
use Google\Site_Kit_Dependencies\Google\Service\TagManager\CreateContainerVersionResponse;
use Google\Site_Kit_Dependencies\Google\Service\TagManager\Entity;
use Google\Site_Kit_Dependencies\Google\Service\TagManager\GetWorkspaceStatusResponse;
use Google\Site_Kit_Dependencies\Google\Service\TagManager\ListWorkspacesResponse;
use Google\Site_Kit_Dependencies\Google\Service\TagManager\QuickPreviewResponse;
use Google\Site_Kit_Dependencies\Google\Service\TagManager\SyncWorkspaceResponse;
use Google\Site_Kit_Dependencies\Google\Service\TagManager\Workspace;
/**
 * The "workspaces" collection of methods.
 * Typical usage is:
 *  <code>
 *   $tagmanagerService = new Google\Service\TagManager(...);
 *   $workspaces = $tagmanagerService->accounts_containers_workspaces;
 *  </code>
 */
class AccountsContainersWorkspaces extends \Google\Site_Kit_Dependencies\Google\Service\Resource
{
    /**
     * Creates a Workspace. (workspaces.create)
     *
     * @param string $parent GTM parent Container's API relative path. Example:
     * accounts/{account_id}/containers/{container_id}
     * @param Workspace $postBody
     * @param array $optParams Optional parameters.
     * @return Workspace
     * @throws \Google\Service\Exception
     */
    public function create($parent, \Google\Site_Kit_Dependencies\Google\Service\TagManager\Workspace $postBody, $optParams = [])
    {
        $params = ['parent' => $parent, 'postBody' => $postBody];
        $params = \array_merge($params, $optParams);
        return $this->call('create', [$params], \Google\Site_Kit_Dependencies\Google\Service\TagManager\Workspace::class);
    }
    /**
     * Creates a Container Version from the entities present in the workspace,
     * deletes the workspace, and sets the base container version to the newly
     * created version. (workspaces.create_version)
     *
     * @param string $path GTM Workspace's API relative path. Example:
     * accounts/{account_id}/containers/{container_id}/workspaces/{workspace_id}
     * @param CreateContainerVersionRequestVersionOptions $postBody
     * @param array $optParams Optional parameters.
     * @return CreateContainerVersionResponse
     * @throws \Google\Service\Exception
     */
    public function create_version($path, \Google\Site_Kit_Dependencies\Google\Service\TagManager\CreateContainerVersionRequestVersionOptions $postBody, $optParams = [])
    {
        $params = ['path' => $path, 'postBody' => $postBody];
        $params = \array_merge($params, $optParams);
        return $this->call('create_version', [$params], \Google\Site_Kit_Dependencies\Google\Service\TagManager\CreateContainerVersionResponse::class);
    }
    /**
     * Deletes a Workspace. (workspaces.delete)
     *
     * @param string $path GTM Workspace's API relative path. Example:
     * accounts/{account_id}/containers/{container_id}/workspaces/{workspace_id}
     * @param array $optParams Optional parameters.
     * @throws \Google\Service\Exception
     */
    public function delete($path, $optParams = [])
    {
        $params = ['path' => $path];
        $params = \array_merge($params, $optParams);
        return $this->call('delete', [$params]);
    }
    /**
     * Gets a Workspace. (workspaces.get)
     *
     * @param string $path GTM Workspace's API relative path. Example:
     * accounts/{account_id}/containers/{container_id}/workspaces/{workspace_id}
     * @param array $optParams Optional parameters.
     * @return Workspace
     * @throws \Google\Service\Exception
     */
    public function get($path, $optParams = [])
    {
        $params = ['path' => $path];
        $params = \array_merge($params, $optParams);
        return $this->call('get', [$params], \Google\Site_Kit_Dependencies\Google\Service\TagManager\Workspace::class);
    }
    /**
     * Finds conflicting and modified entities in the workspace.
     * (workspaces.getStatus)
     *
     * @param string $path GTM Workspace's API relative path. Example:
     * accounts/{account_id}/containers/{container_id}/workspaces/{workspace_id}
     * @param array $optParams Optional parameters.
     * @return GetWorkspaceStatusResponse
     * @throws \Google\Service\Exception
     */
    public function getStatus($path, $optParams = [])
    {
        $params = ['path' => $path];
        $params = \array_merge($params, $optParams);
        return $this->call('getStatus', [$params], \Google\Site_Kit_Dependencies\Google\Service\TagManager\GetWorkspaceStatusResponse::class);
    }
    /**
     * Lists all Workspaces that belong to a GTM Container.
     * (workspaces.listAccountsContainersWorkspaces)
     *
     * @param string $parent GTM parent Container's API relative path. Example:
     * accounts/{account_id}/containers/{container_id}
     * @param array $optParams Optional parameters.
     *
     * @opt_param string pageToken Continuation token for fetching the next page of
     * results.
     * @return ListWorkspacesResponse
     * @throws \Google\Service\Exception
     */
    public function listAccountsContainersWorkspaces($parent, $optParams = [])
    {
        $params = ['parent' => $parent];
        $params = \array_merge($params, $optParams);
        return $this->call('list', [$params], \Google\Site_Kit_Dependencies\Google\Service\TagManager\ListWorkspacesResponse::class);
    }
    /**
     * Quick previews a workspace by creating a fake container version from all
     * entities in the provided workspace. (workspaces.quick_preview)
     *
     * @param string $path GTM Workspace's API relative path. Example:
     * accounts/{account_id}/containers/{container_id}/workspaces/{workspace_id}
     * @param array $optParams Optional parameters.
     * @return QuickPreviewResponse
     * @throws \Google\Service\Exception
     */
    public function quick_preview($path, $optParams = [])
    {
        $params = ['path' => $path];
        $params = \array_merge($params, $optParams);
        return $this->call('quick_preview', [$params], \Google\Site_Kit_Dependencies\Google\Service\TagManager\QuickPreviewResponse::class);
    }
    /**
     * Resolves a merge conflict for a workspace entity by updating it to the
     * resolved entity passed in the request. (workspaces.resolve_conflict)
     *
     * @param string $path GTM Workspace's API relative path. Example:
     * accounts/{account_id}/containers/{container_id}/workspaces/{workspace_id}
     * @param Entity $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string fingerprint When provided, this fingerprint must match the
     * fingerprint of the entity_in_workspace in the merge conflict.
     * @throws \Google\Service\Exception
     */
    public function resolve_conflict($path, \Google\Site_Kit_Dependencies\Google\Service\TagManager\Entity $postBody, $optParams = [])
    {
        $params = ['path' => $path, 'postBody' => $postBody];
        $params = \array_merge($params, $optParams);
        return $this->call('resolve_conflict', [$params]);
    }
    /**
     * Syncs a workspace to the latest container version by updating all unmodified
     * workspace entities and displaying conflicts for modified entities.
     * (workspaces.sync)
     *
     * @param string $path GTM Workspace's API relative path. Example:
     * accounts/{account_id}/containers/{container_id}/workspaces/{workspace_id}
     * @param array $optParams Optional parameters.
     * @return SyncWorkspaceResponse
     * @throws \Google\Service\Exception
     */
    public function sync($path, $optParams = [])
    {
        $params = ['path' => $path];
        $params = \array_merge($params, $optParams);
        return $this->call('sync', [$params], \Google\Site_Kit_Dependencies\Google\Service\TagManager\SyncWorkspaceResponse::class);
    }
    /**
     * Updates a Workspace. (workspaces.update)
     *
     * @param string $path GTM Workspace's API relative path. Example:
     * accounts/{account_id}/containers/{container_id}/workspaces/{workspace_id}
     * @param Workspace $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string fingerprint When provided, this fingerprint must match the
     * fingerprint of the workspace in storage.
     * @return Workspace
     * @throws \Google\Service\Exception
     */
    public function update($path, \Google\Site_Kit_Dependencies\Google\Service\TagManager\Workspace $postBody, $optParams = [])
    {
        $params = ['path' => $path, 'postBody' => $postBody];
        $params = \array_merge($params, $optParams);
        return $this->call('update', [$params], \Google\Site_Kit_Dependencies\Google\Service\TagManager\Workspace::class);
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(\Google\Site_Kit_Dependencies\Google\Service\TagManager\Resource\AccountsContainersWorkspaces::class, 'Google\\Site_Kit_Dependencies\\Google_Service_TagManager_Resource_AccountsContainersWorkspaces');
