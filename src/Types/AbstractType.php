<?php 

namespace Kundentests\Types;

use Neos\Utility\ObjectAccess;
use Kundentests\Utilities\DataMapperUtility;

abstract class AbstractType
{
  
  /**
   * @var string
   */
  protected $identity;
  
  /**
   * @var \DateTime
   */
  protected $creationDate;  
  
  /**
   * @var \DateTime
   */
  protected $modificationDate;  
  
  /**
   * @param string $identity
   * @return void
   */
  public function setIdentity(string $identity) : void
  {
    $this->identity = $identity;
  }
  
  /**
   * @return string
   */
  public function getIdentity() : string
  {
    return $this->identity;
  }
  
  /**
   * @param \DateTime $creationDate
   * @return void
   */
  public function setCreationDate(\DateTime $creationDate) : void
  {
    $this->creationDate = $creationDate;
  }
  
  /**
   * @return \DateTime
   */
  public function getCreationDate() : \DateTime
  {
    return $this->creationDate;
  }
  
  /**
   * @param \DateTime $modificationDate
   * @return void
   */
  public function setModificationDate(\DateTime $modificationDate) : void
  {
    $this->modificationDate = $modificationDate;
  }
  
  /**
   * @return \DateTime
   */
  public function getModificationDate() : \DateTime
  {
    return $this->modificationDate;
  }
}