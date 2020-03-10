<?php 

namespace Kundentests\Types;

class BankingDetailType extends AbstractType
{   
  /**
   * @var string
   */
  protected $owner;

  /**
   * @var string
   */
  protected $iban;

  /**
   * @var string
   */
  protected $bic;

  /**
   * @param string $owner
   * @return void
   */
  public function setOwner(string $owner) : void
  {
    $this->owner = $owner;
  }

  /**
   * @return string
   */
  public function getOwner() : string
  {
    return $this->owner;
  }

  /**
   * @param string $iban
   * @return void
   */
  public function setIban(string $iban) : void
  {
    $this->iban = $iban;
  }

  /**
   * @return string
   */
  public function getIban() : string
  {
    return $this->iban;
  }

  /**
   * @param string $bic
   * @return void
   */
  public function setBic(string $bic) : void
  {
    $this->bic = $bic;
  }

  /**
   * @return string
   */
  public function getBic() : string
  {
    return $this->bic;
  }
 
}
