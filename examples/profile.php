<?php

require dirname(__FILE__) . '/../vendor/autoload.php';

$client = new \Kundentests\Client(
  'username',
  'password'
);
 
$client->setEndpoint('https://backend.dev.kundentests.com/api/');
 
$profile_query = <<<'GRAPHQL'
  query GetProfile($identity: ID, $name: String) {
    profile(__identity: $identity, name: $name) {
      __identity,
      name,
      agentursoftId      
    }
  }
GRAPHQL;
 
// 01.03.2020 11:48:0
$profile = $client->profileQuery($profile_query, [
  //'identity' => '00e57d81-311d-46d6-acf0-bb26e09c75b5',
  'name' => 'zimmer-it-com-gmbh'
]);

print_r($profile);
