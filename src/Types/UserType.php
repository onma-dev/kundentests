<?php 

namespace Kundentests\Types;

class UserType extends AbstractType
{   
  
  /**
   * @var string
   */
  protected $company;
  
  /**
   * @var int
   */
  protected $salutation;

  /**
   * @var string
   */
  protected $firstName;

  /**
   * @var string
   */
  protected $lastName;

  /**
   * @var string
   */
  protected $email;

  /**
   * @var string
   */
  protected $phone;

  /**
   * @var string
   */
  protected $language;

  /**
   * @var string
   */
  protected $street;

  /**
   * @var string
   */
  protected $houseNumber;

  /**
   * @var string
   */
  protected $zip;

  /**
   * @var string
   */
  protected $city;

  /**
   * @var string
   */
  protected $country;

  /**
   * @var string
   */
  protected $homepage;

  /**
   * @var bool
   */
  protected $confirmed;

  /**
   * @var bool
   */
  protected $disabled;
  
  /**
   * @param string $company
   * @return void
   */
  public function setCompany(string $company) : void
  {
    $this->company = $company;
  }
  
  /**
   * @return string
   */
  public function getCompany() : string
  {
    return $this->company;
  }
  
  /**
   * @param int $salutation
   * @return void
   */
  public function setSalutation(int $salutation) : void
  {
    $this->salutation = $salutation;
  }

  /**
   * @return int
   */
  public function getSalutation() : int
  {
    return $this->salutation;
  }

  /**
   * @param string $firstName
   * @return void
   */
  public function setFirstName(string $firstName) : void
  {
    $this->firstName = $firstName;
  }

  /**
   * @return string
   */
  public function getFirstName() : string
  {
    return $this->firstName;
  }

  /**
   * @param string $lastName
   * @return void
   */
  public function setLastName(string $lastName) : void
  {
    $this->lastName = $lastName;
  }

  /**
   * @return string
   */
  public function getLastName() : string
  {
    return $this->lastName;
  }

  /**
   * @param string $email
   * @return void
   */
  public function setEmail(string $email) : void
  {
    $this->email = $email;
  }

  /**
   * @return string
   */
  public function getEmail() : string
  {
    return $this->email;
  }

  /**
   * @param string $phone
   * @return void
   */
  public function setPhone(string $phone) : void
  {
    $this->phone = $phone;
  }

  /**
   * @return string
   */
  public function getPhone() : string
  {
    return $this->phone;
  }

  /**
   * @param string $language
   * @return void
   */
  public function setLanguage(string $language) : void
  {
    $this->language = $language;
  }

  /**
   * @return string
   */
  public function getLanguage() : string
  {
    return $this->language;
  }

  /**
   * @param string $street
   * @return void
   */
  public function setStreet(string $street) : void
  {
    $this->street = $street;
  }

  /**
   * @return string
   */
  public function getStreet() : string
  {
    return $this->street;
  }

  /**
   * @param string $houseNumber
   * @return void
   */
  public function setHouseNumber(string $houseNumber) : void
  {
    $this->houseNumber = $houseNumber;
  }

  /**
   * @return string
   */
  public function getHouseNumber() : string
  {
    return $this->houseNumber;
  }

  /**
   * @param string $zip
   * @return void
   */
  public function setZip(string $zip) : void
  {
    $this->zip = $zip;
  }

  /**
   * @return string
   */
  public function getZip() : string
  {
    return $this->zip;
  }

  /**
   * @param string $city
   * @return void
   */
  public function setCity(string $city) : void
  {
    $this->city = $city;
  }

  /**
   * @return string
   */
  public function getCity() : string
  {
    return $this->city;
  }

  /**
   * @param string $country
   * @return void
   */
  public function setCountry(string $country) : void
  {
    $this->country = $country;
  }

  /**
   * @return string
   */
  public function getCountry() : string
  {
    return $this->country;
  }

  /**
   * @param string $homepage
   * @return void
   */
  public function setHomepage(string $homepage) : void
  {
    $this->homepage = $homepage;
  }

  /**
   * @return string
   */
  public function getHomepage() : string
  {
    return $this->homepage;
  }

  /**
   * @param bool $confirmed
   * @return void
   */
  public function setConfirmed(bool $confirmed) : void
  {
    $this->confirmed = $confirmed;
  }

  /**
   * @return bool
   */
  public function getConfirmed() : bool
  {
    return $this->confirmed;
  }

  /**
   * @param bool $disabled
   * @return void
   */
  public function setDisabled(bool $disabled) : void
  {
    $this->disabled = $disabled;
  }

  /**
   * @return bool
   */
  public function getDisabled() : bool
  {
    return $this->disabled;
  }

}
