<?php 

namespace Kundentests;

use Kundentests\Exceptions\ClientRequestException;
use Kundentests\Exceptions\InvalidJsonException;
use Kundentests\Exceptions\InvalidSyntaxException;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Cookie\CookieJar;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Exception\InvalidArgumentException;

use Doctrine\Common\Collections\ArrayCollection;

use Kundentests\Utilities\DataMapperUtility;

use Kundentests\Types\ProfileType;
use Kundentests\Types\OrderType;


class Client
{
  
  /**
   * @var HttpClient
   */
  protected $client;
  
  /**
   * @var CookieJar
   */
  protected $cookieJar;
  
  /**
   * @var string
   */
  protected $endpoint = 'https://backend.kundentests.com/api/';
  
  /**
   * @var string
   */
  protected $version = 'v1';
  
  /**
   * @var string
   */
  protected $username;
  
  /**
   * @var string
   */
  protected $password;
  
  /**
   * Initialize the client
   * 
   * @param string $username
   * @param string $password
   */
  public function __construct(string $username, string $password) 
  {
    $this->setUsername($username);
    $this->setPassword($password);
    
    $this->cookieJar = new CookieJar();
    
    $this->client = new HttpClient([
      'timeout' => 10.0,
      'cookies' => $this->cookieJar,
      'allow_redirects' => false,
      'headers' => [
        'User-Agent' => 'onma/kundentests'
      ]
    ]);
  }
  
  /**
   * @param string $query
   * @param array $variables
   * @return array
   * @throws ClientRequestException, InvalidJsonException
   */
  public function query(string $query, ?array $variables) : array
  {
    return $this->request([
      'query' => $query,
      'variables' => $variables
    ]);
  }  
  /**
   * @param string $query
   * @param array $variables
   * @return ProfileType
   * @throws ClientRequestException, InvalidJsonException
   */
  public function profileQuery(string $query, ?array $variables) : ProfileType
  {
    $response = $this->query($query, $variables);
    
    if(count($response) <= 0) {
      return null;
    } 
    
    return DataMapperUtility::mapObject(
      ProfileType::class,
      current($response)
    );
  }
  
  /**
   * @param string $query
   * @param array $variables
   * @return ArrayCollection<ProfileType>
   * @throws ClientRequestException, InvalidJsonException
   */
  public function profilesQuery(string $query, ?array $variables) : ArrayCollection
  {
    $response = $this->query($query, $variables);
    
    return DataMapperUtility::mapCollection(
      ProfileType::class,
      current($response)
    );
  }
  
  /**
   * @param string $mutation
   * @param array $variables
   * @return ProfileType|null
   * @throws ClientRequestException, InvalidJsonException
   */
  public function profileMutation(string $mutation, ?array $variables) : ?ProfileType
  {
    return $this->profileQuery($mutation, $variables);
  }  
  
  /**
   * @param string $query
   * @param array $variables
   * @return ProfileType
   * @throws ClientRequestException, InvalidJsonException
   */
  public function orderQuery(string $query, ?array $variables) : OrderType
  {
    $response = $this->query($query, $variables);
    
    if(count($response) <= 0) {
      return null;
    } 
    
    return DataMapperUtility::mapObject(
      OrderType::class,
      current($response)
    );
  }
  
  /**
   * @param string $query
   * @param array $variables
   * @return ArrayCollection<OrderType>
   * @throws ClientRequestException, InvalidJsonException
   */
  public function ordersQuery(string $query, ?array $variables) : ArrayCollection
  {
    $response = $this->query($query, $variables);
    
    return DataMapperUtility::mapCollection(
      OrderType::class,
      current($response)
    );
  }
  
  /**
   * @param array $params
   * @return array
   * @throws ClientRequestException, InvalidJsonException
   */
  protected function request(array $params) : array
  {
    try {
      $response = $this->client->post($this->endpoint . $this->version, [
        'auth' => [$this->username, $this->password],
        'form_params' => $params
      ]);
    } catch(ServerException $previous) {
      throw new ClientRequestException('Failed to send request.', 1583835770, $previous);
    }
    
    if($response->getStatusCode() !== 200) {      
      throw new ClientRequestException('Invalid status code for request.', 1583835771);
    }
    
    try {
      $json = \GuzzleHttp\json_decode($response->getBody(), true);
    } catch(InvalidArgumentException $previous) {
      throw new InvalidJsonException('Failed to parse json result.', 1583835772, $previous);
    }
    
    if( isset($json['errors']) && count($json['errors']) > 0 ) {
      $firstError = current($json['errors']);
      $location = current($firstError['locations']);
      throw new InvalidSyntaxException(
        sprintf(
          $firstError['message']. ' on line %d and column %d.', 
          $location['line'], 
          $location['column']
        ),
        1583835773
      );
    }
    
    return isset($json['data']) ? $json['data'] : [];
  }
    
  /**
   * @param string $endpoint
   * @return void
   */
  public function setEndpoint(string $endpoint) : void
  {
    $this->endpoint = $endpoint;
  }
  
  /**
   * @return string
   */
  public function getEndpoint() : string
  {
    return $this->endpoint;
  }
  
  /**
   * @param string $version
   * @return void
   */
  public function setVersion(string $version) : void
  {
    $this->version = $version;
  }
  
  /**
   * @return string
   */
  public function getVersion() : string
  {
    return $this->version;
  }
  
  /**
   * @param string $username
   * @return void
   */
  public function setUsername(string $username) : void
  {
    $this->username = $username;
  }
  
  /**
   * @return string
   */
  public function getUsername() : string
  {
    return $this->username;
  }
  
  /**
   * @param string $password
   * @return void
   */
  public function setPassword(string $password) : void
  {
    $this->password = $password;
  }
  
  /**
   * @return string
   */
  public function getPassword() : string
  {
    return $this->password;
  }
  
  /**
   * Returns the current used CookieJar
   * 
   * @return CookieJar
   */
  public function getCookieJar() : CookieJar
  {
    return $this->cookieJar;
  }
  
  /**
   * Returns the current used CookieJar
   * 
   * @param CookieJar $cookieJar
   * @return void
   */
  public function setCookieJar(CookieJar $cookieJar) : void
  {
    $this->cookieJar = $cookieJar;
  }
  
  /**
   * Returns the current used HttpClient
   * 
   * @return HttpClient
   */
  public function getHttpClient() : HttpClient
  {
    return $this->client;
  }
}