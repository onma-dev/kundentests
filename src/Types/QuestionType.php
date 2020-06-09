<?php 

namespace Kundentests\Types;

class QuestionType extends AbstractType
{   
  /**
   * @var string
   */
  protected $text;
  
  /**
   * @param string $text
   * @return void
   */
  public function setText(string $text) : void
  {
    $this->text = $text;
  }
  
  /**
   * @return string
   */
  public function getText() : string
  {
    return $this->text;
  }

}
