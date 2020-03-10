<?php

require dirname(__FILE__) . '/../vendor/autoload.php';

$client = new \Kundentests\Client(
  'username',
  'password'
);

$client->setEndpoint('https://backend.dev.kundentests.com/api/');

$profile_mutation = <<<'GRAPHQL'
  mutation UpdateProfile(
    $identity: ID!,
    $agentursoftId: Int!
  ) {
    updateProfile(
      data: {
        __identity: $identity,
        agentursoftId: $agentursoftId
      }
    ) {
      __identity,
      agentursoftId
    }
  }
GRAPHQL;
 
// 01.03.2020 11:48:0
$profiles = $client->profileMutation($profile_mutation, [
  'identity' => '00e57d81-311d-46d6-acf0-bb26e09c75b5',
  'agentursoftId' => 9999
]);

print_r($profiles);
