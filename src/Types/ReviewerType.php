<?php 

namespace Kundentests\Types;

class ReviewerType extends AbstractType
{   
  /**
   * @var string
   */
  protected $name;

  /**
   * @var string
   */
  protected $email;
  
  /**
   * @var string
   */
  protected $company;
 
  
  /**
   * @return string
   */
  public function getName(): string
  {
    return $this->name;
  }

  /**
   * @param string $name
   * @return void
   */
  public function setName(string $name): void
  {
    $this->name = $name;
  }  
  
  /**
   * @return string
   */
  public function getEmail(): string
  {
    return $this->email;
  }

  /**
   * @param string $email
   * @return void
   */
  public function setEmail(string $email): void
  {
    $this->email = $email;
  }  
  
  /**
   * @return string
   */
  public function getCompany(): string
  {
    return $this->company;
  }

  /**
   * @param string $company
   * @return void
   */
  public function setCompany(string $company): void
  {
    $this->company = $company;
  }  
}
