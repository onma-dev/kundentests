<?php

require dirname(__FILE__) . '/../vendor/autoload.php';

$client = new \Kundentests\Client(
  'username',
  'password'
);
 
$client->setEndpoint('https://backend.dev.kundentests.com/api/');
 
$profile_query = <<<'GRAPHQL'
  query GetProfiles($since: String!) {
    profiles(since: $since) {
      __identity,
      name,
      user {
        company,
        salutation, # 1 = other, 2 = mr, 3 = mrs
        firstName,
        lastName,
        email,
        phone,
        language,
        street,
        houseNumber,
        zip,
        city,
        country,
        homepage,
        confirmed,
        disabled
      },	  
      product {
        name,
        price,
        setupFee,
        offlineReviewsPerMonth,
        reviewsPerMonth,
        integrationExistingReviews,
        visibleRatings,
        backlinks,
        disabled,
        upgradeable
      },
      services {
        name,
        link
      },
      logo {
        file,
        size,
        extension,
        sha1,
        mediaType
      },
      background {
        file,
        size,
        extension,
        sha1,
        mediaType
      },
      billing {
        company,
        salutation, # 1 = other, 2 = mr, 3 = mrs
        title,
        firstName,
        lastName,
        street,
        houseNumber,
        zip,
        city,
        country,
        email,
        bankingDetail {
          owner,
          iban,
          bic
        }
      },
      headline,
      slogan,
      description,
      about,
      disabled,
      rateable,
      partner,
      reviewsInThisMonth,
      agentursoftId,
      lastReviewsInThisMonthReset {
        timestamp
      },
      creationDate {
        timestamp
      },
      modificationDate {
        timestamp
      },
    }
  }
GRAPHQL;
 
// 01.03.2020 11:48:0
$profiles = $client->profilesQuery($profile_query, [
  'since' => '01.03.2020 11:48:0'
]);

print_r($profiles);
