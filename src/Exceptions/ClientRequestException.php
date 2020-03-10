<?php 

namespace Kundentests\Exceptions;

use GuzzleHttp\Psr7\Response;

class ClientRequestException extends \Exception
{
  /**
   * @var Response
   */
  protected $response;
  
  /**
   * 
   * @param Response $response
   */
  public function __construct(Response $response, \Throwable $previous = null)
  {
    $this->response = $response;
    $this->previous = $previous;
    
    $this->message = $this->response->getBody();    
    $this->code = $this->response->getStatusCode();
  }
    
  /**
   * 
   * @return Response
   */
  public function getResponse() : Response
  {
    return $this->response;
  }

}