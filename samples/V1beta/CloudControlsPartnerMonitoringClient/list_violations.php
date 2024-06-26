<?php
/*
 * Copyright 2024 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START cloudcontrolspartner_v1beta_generated_CloudControlsPartnerMonitoring_ListViolations_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\PagedListResponse;
use Google\Cloud\CloudControlsPartner\V1beta\Client\CloudControlsPartnerMonitoringClient;
use Google\Cloud\CloudControlsPartner\V1beta\ListViolationsRequest;
use Google\Cloud\CloudControlsPartner\V1beta\Violation;

/**
 * Lists Violations for a workload
 * Callers may also choose to read across multiple Customers or for a single
 * customer as per
 * [AIP-159](https://google.aip.dev/159) by using '-' (the hyphen or dash
 * character) as a wildcard character instead of {customer} & {workload}.
 * Format:
 * `organizations/{organization}/locations/{location}/customers/{customer}/workloads/{workload}`
 *
 * @param string $formattedParent Parent resource
 *                                Format
 *                                `organizations/{organization}/locations/{location}/customers/{customer}/workloads/{workload}`
 *                                Please see {@see CloudControlsPartnerMonitoringClient::workloadName()} for help formatting this field.
 */
function list_violations_sample(string $formattedParent): void
{
    // Create a client.
    $cloudControlsPartnerMonitoringClient = new CloudControlsPartnerMonitoringClient();

    // Prepare the request message.
    $request = (new ListViolationsRequest())
        ->setParent($formattedParent);

    // Call the API and handle any network failures.
    try {
        /** @var PagedListResponse $response */
        $response = $cloudControlsPartnerMonitoringClient->listViolations($request);

        /** @var Violation $element */
        foreach ($response as $element) {
            printf('Element data: %s' . PHP_EOL, $element->serializeToJsonString());
        }
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $formattedParent = CloudControlsPartnerMonitoringClient::workloadName(
        '[ORGANIZATION]',
        '[LOCATION]',
        '[CUSTOMER]',
        '[WORKLOAD]'
    );

    list_violations_sample($formattedParent);
}
// [END cloudcontrolspartner_v1beta_generated_CloudControlsPartnerMonitoring_ListViolations_sync]
