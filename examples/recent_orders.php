<?php

require dirname(__FILE__) . '/../vendor/autoload.php';

$client = new \Kundentests\Client(
  'username',
  'password'
);

$client->setEndpoint('https://backend.dev.kundentests.com/api/');

$order_query = <<<'GRAPHQL'
  query GetOrders($since: String!) {
    orders(since: $since) {
      __identity,    
      profile {
        agentursoftId
        ## siehe profiles for valid options
      },    
      product {
        name
        ## siehe profiles for valid options
      },    
      voucher {
        code,
        discountType, # 1 = % , 2 = €
        discountTypeSign, # % or €
        value,
        runningTime
      }    
      orderDate {
        timestamp
      },    
      discountValidity {
        timestamp 
      },    
      startDate {
        timestamp  
      },
      endDate {
        timestamp
      },    
      canceled,    
      creationDate {
        timestamp
      },    
      modificationDate {
        timestamp
      }
    }
  }
GRAPHQL;

$orders = $client->ordersQuery($order_query, [
  'since' => '01.03.2020 11:48:0'
]);

$order = $orders->first();
print_r($order);
$voucher = $order->getVoucher();
print_r($voucher);
