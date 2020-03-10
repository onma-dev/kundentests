<?php 

namespace Kundentests;

use Kundentests\Exceptions\ClientRequestException;
use Kundentests\Exceptions\InvalidJsonException;

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
  protected $endpoint = 'https://backend.dev.kundentests.com/api/';
  
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
      'base_uri' => $this->endpoint,
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
    try {
      $response = $this->client->post($this->version, [
        'auth' => [$this->username, $this->password],
        'form_params' => [
          'query' => $query,
          'variables' => $variables
        ]
      ]);
    } catch(ServerException $previous) {
      throw new ClientRequestException('Failed to send request.', $previous);
    }
    
    if($response->getStatusCode() !== 200) {      
      throw new ClientRequestException('Invalid status code for request.');
    }
    
    try {
      $json = \GuzzleHttp\json_decode($response->getBody(), true);
    } catch(InvalidArgumentException $previous) {
      throw new InvalidJsonException('Failed to parse json result.', '1583835772', $previous);
    }
    
    return isset($json['data']) ? $json['data'] : [];
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
    
    if(!isset($response['profiles']) || count($response['profiles']) <= 0) {
      return new ArrayCollection();
    } 
    
    return DataMapperUtility::mapCollection(
      ProfileType::class,
      $response['profiles']
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
    
    if(!isset($response['orders']) || count($response['orders']) <= 0) {
      return new ArrayCollection();
    } 
    
    return DataMapperUtility::mapCollection(
      OrderType::class,
      $response['orders']
    );
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