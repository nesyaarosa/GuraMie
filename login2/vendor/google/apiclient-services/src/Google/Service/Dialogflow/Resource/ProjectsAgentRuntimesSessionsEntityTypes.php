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

/**
 * The "entityTypes" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dialogflowService = new Google_Service_Dialogflow(...);
 *   $entityTypes = $dialogflowService->entityTypes;
 *  </code>
 */
class Google_Service_Dialogflow_Resource_ProjectsAgentRuntimesSessionsEntityTypes extends Google_Service_Resource
{
  /**
   * Creates a session entity type. (entityTypes.create)
   *
   * @param string $parent Required. The session to create a session entity type
   * for. Format: `projects//agent/sessions/` or
   * `projects//agent/runtimes//sessions/`. Note: Runtimes are under construction
   * and will be available soon. If  is not specified, we assume default 'sandbox'
   * runtime.
   * @param Google_Service_Dialogflow_GoogleCloudDialogflowV2SessionEntityType $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dialogflow_GoogleCloudDialogflowV2SessionEntityType
   */
  public function create($parent, Google_Service_Dialogflow_GoogleCloudDialogflowV2SessionEntityType $postBody, $optParams = array())
  {
    $params = array('parent' => $parent, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Dialogflow_GoogleCloudDialogflowV2SessionEntityType");
  }
  /**
   * Deletes the specified session entity type. (entityTypes.delete)
   *
   * @param string $name Required. The name of the entity type to delete. Format:
   * `projects//agent/sessions//entityTypes/` or
   * `projects//agent/runtimes//sessions//entityTypes/`. Note: Runtimes are under
   * construction and will be available soon. If  is not specified, we assume
   * default 'sandbox' runtime.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dialogflow_GoogleProtobufEmpty
   */
  public function delete($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Dialogflow_GoogleProtobufEmpty");
  }
  /**
   * Retrieves the specified session entity type. (entityTypes.get)
   *
   * @param string $name Required. The name of the session entity type. Format:
   * `projects//agent/sessions//entityTypes/` or
   * `projects//agent/runtimes//sessions//entityTypes/`. Note: Runtimes are under
   * construction and will be available soon. If  is not specified, we assume
   * default 'sandbox' runtime.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dialogflow_GoogleCloudDialogflowV2SessionEntityType
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Dialogflow_GoogleCloudDialogflowV2SessionEntityType");
  }
  /**
   * Returns the list of all session entity types in the specified session.
   * (entityTypes.listProjectsAgentRuntimesSessionsEntityTypes)
   *
   * @param string $parent Required. The session to list all session entity types
   * from. Format: `projects//agent/sessions/` or
   * `projects//agent/runtimes//sessions/`. Note: Runtimes are under construction
   * and will be available soon. If  is not specified, we assume default 'sandbox'
   * runtime.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. The maximum number of items to return in a
   * single page. By default 100 and at most 1000.
   * @opt_param string pageToken Optional. The next_page_token value returned from
   * a previous list request.
   * @return Google_Service_Dialogflow_GoogleCloudDialogflowV2ListSessionEntityTypesResponse
   */
  public function listProjectsAgentRuntimesSessionsEntityTypes($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Dialogflow_GoogleCloudDialogflowV2ListSessionEntityTypesResponse");
  }
  /**
   * Updates the specified session entity type. (entityTypes.patch)
   *
   * @param string $name Required. The unique identifier of this session entity
   * type. Format: `projects//agent/sessions//entityTypes/`, or
   * `projects//agent/runtimes/sessions//entityTypes/`. Note: Runtimes are under
   * construction and will be available soon. If  is not specified, we assume
   * default 'sandbox' runtime.
   * @param Google_Service_Dialogflow_GoogleCloudDialogflowV2SessionEntityType $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Optional. The mask to control which fields get
   * updated.
   * @return Google_Service_Dialogflow_GoogleCloudDialogflowV2SessionEntityType
   */
  public function patch($name, Google_Service_Dialogflow_GoogleCloudDialogflowV2SessionEntityType $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Dialogflow_GoogleCloudDialogflowV2SessionEntityType");
  }
}