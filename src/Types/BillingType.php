<?php 

namespace Kundentests\Types;

class BillingType extends AbstractType
{   
  /**
   * @var string
   */
  protected $company;

  /**
   * @var string
   */
  protected $salutation;

  /**
   * @var string
   */
  protected $title;

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
  protected $email;

  /**
   * @var \Kundentests\Types\BankingDetailType
   */
  protected $bankingDetail;

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
   * @param string $salutation
   * @return void
   */
  public function setSalutation(string $salutation) : void
  {
    $this->salutation = $salutation;
  }

  /**
   * @return string
   */
  public function getSalutation() : string
  {
    return $this->salutation;
  }

  /**
   * @param string $title
   * @return void
   */
  public function setTitle(string $title) : void
  {
    $this->title = $title;
  }

  /**
   * @return string
   */
  public function getTitle() : string
  {
    return $this->title;
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
   * @param BankingDetailType $bankingDetail
   * @return void
   */
  public function setBankingDetail(BankingDetailType $bankingDetail) : void
  {
    $this->bankingDetail = $bankingDetail;
  }

  /**
   * @return BankingDetailType
   */
  public function getBankingDetail() : BankingDetailType
  {
    return $this->bankingDetail;
  }
  
}
