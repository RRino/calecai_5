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

namespace Google\Service\ChecksService;

class GoogleChecksAisafetyV1alphaClassifyContentResponsePolicyResult extends \Google\Model
{
  /**
   * @var string
   */
  public $policyType;
  /**
   * @var float
   */
  public $score;
  /**
   * @var string
   */
  public $violationResult;

  /**
   * @param string
   */
  public function setPolicyType($policyType)
  {
    $this->policyType = $policyType;
  }
  /**
   * @return string
   */
  public function getPolicyType()
  {
    return $this->policyType;
  }
  /**
   * @param float
   */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /**
   * @return float
   */
  public function getScore()
  {
    return $this->score;
  }
  /**
   * @param string
   */
  public function setViolationResult($violationResult)
  {
    $this->violationResult = $violationResult;
  }
  /**
   * @return string
   */
  public function getViolationResult()
  {
    return $this->violationResult;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleChecksAisafetyV1alphaClassifyContentResponsePolicyResult::class, 'Google_Service_ChecksService_GoogleChecksAisafetyV1alphaClassifyContentResponsePolicyResult');
