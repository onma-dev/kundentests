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
    $agentursoftId: Int!,
    $agentursoftReference: String
  ) {
    updateProfile(
      data: {
        __identity: $identity,
        agentursoftId: $agentursoftId,
        agentursoftReference: $agentursoftReference
      }
    ) {
      __identity,
      agentursoftId,
      agentursoftReference
    }
  }
GRAPHQL;
 
// 01.03.2020 11:48:0
$profiles = $client->profileMutation($profile_mutation, [
  'identity' => '00e57d81-311d-46d6-acf0-bb26e09c75b5',
  'agentursoftId' => 9991,
  'agentursoftReference' => json_encode(['test1' => 1,'test2' => 'A'])
]);

print_r($profiles);
