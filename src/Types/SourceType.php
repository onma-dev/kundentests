<?php 

namespace Kundentests\Types;

class SourceType extends AbstractType
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
   * @var string
   */
  protected $synonym;
  
  /**
   * @var string
   */
  protected $display;  
  
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
  public function getLink(): string
  {
    return $this->link;
  }

  /**
   * @param string $link
   * @return void
   */
  public function setLink(string $link): void
  {
    $this->link = $link;
  }
  
  /**
   * @return string
   */
  public function getSynonym(): string
  {
    return $this->synonym;
  }

  /**
   * @param string $synonym
   * @return void
   */
  public function setSynonym(string $synonym): void
  {
    $this->synonym = $synonym;
  }
  
  /**
   * @return string
   */
  public function getDisplay(): string
  {
    return $this->display;
  }

  /**
   * @param string $display
   * @return void
   */
  public function setDisplay(string $display): void
  {
    $this->display = $display;
  }
  
 
}
