<?php 

namespace Kundentests\Types;

class QuestionTopicType extends AbstractType
{   
  /**
   * @var string
   */
  protected $name;
    
  /**
   * @var \Doctrine\Common\Collections\ArrayCollection<\Kundentests\Types\QuestionType>
   */
  protected $questions;
  
  /**
   * 
   */
  public function __construct() 
  {
    $this->questions = new ArrayCollection();
  }
  
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
   * @param ArrayCollection $questions
   * @return void
   */
  public function setQuestions(ArrayCollection $questions) : void
  {
    $this->questions = $questions;
  }

  /**
   * @return ArrayCollection
   */
  public function getQuestions() : ArrayCollection
  {
    return $this->questions;
  }
  
}
