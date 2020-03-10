<?php 

namespace Kundentests\Types;

class ServiceType extends AbstractType
{   
  /**
   * @var string
   */
  protected $name;

  /**
   * @var string
   */
  protected $link;

  /**
   * @param string $name
   * @return void
   */
  public function setName(string $name) : void
  {
    $this->name = $name;
  }

  /**
   * @return string
   */
  public function getName() : string
  {
    return $this->name;
  }

  /**
   * @param string $link
   * @return void
   */
  public function setLink(string $link) : void
  {
    $this->link = $link;
  }

  /**
   * @return string
   */
  public function getLink() : string
  {
    return $this->link;
  }
}
