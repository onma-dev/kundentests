<?php 

namespace Kundentests\Types;

class QuestionnaireType extends AbstractType
{   
  /**
   * @var string
   */
  protected $name;
    
  /**
   * @var \Doctrine\Common\Collections\ArrayCollection<\Kundentests\Types\QuestionTopicType>
   */
  protected $questionTopics;
  
  /**
   * 
   */
  public function __construct() 
  {
    $this->questionTopics = new ArrayCollection();
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
   * @param ArrayCollection $questionTopics
   * @return void
   */
  public function setQuestionTopics(ArrayCollection $questionTopics) : void
  {
    $this->questionTopics = $questionTopics;
  }

  /**
   * @return ArrayCollection
   */
  public function getQuestionTopics() : ArrayCollection
  {
    return $this->questionTopics;
  }
  
}
