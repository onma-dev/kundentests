<?php

namespace Kundentests\Utilities;

use phpDocumentor\Reflection\DocBlockFactory;

abstract class ReflectionUtility 
{
  /**
   * @param mixed $object
   * @return array
   */
  public static function getClassProperties($object) : array
  {
    $classReflection = new \ReflectionClass($object);
    return $classReflection->getProperties();
  }
  
  /**
   * @param mixed $object
   * @param string $propertyName
   * @return \ReflectionProperty|null
   */
  public static function getClassPropertyByName($object, string $propertyName) : ?\ReflectionProperty
  {
    $classReflection = new \ReflectionClass($object);
    if($classReflection->hasProperty($propertyName)) {
      return $classReflection->getProperty($propertyName);
    }    
    return null;
  } 
  
  /**
   * @param mixed $object
   * @param string $propertyName
   * @return \ReflectionProperty|null
   */
  public static function getClassPropertyTypeByName($object, string $propertyName) : ?string
  {
    $classReflection = new \ReflectionClass($object);
    if($classReflection->hasProperty($propertyName)) {
      return self::getPropertyType($classReflection->getProperty($propertyName));
    }    
    return null;
  }
  
  /**
   * @param \ReflectionProperty $property
   * @return string|null
   */
  public static function getPropertyType(\ReflectionProperty $property) : ?string
  {
    $docComment = $property->getDocComment();
    $factory  = DocBlockFactory::createInstance();
    $docBlock = $factory->create($docComment);
    
    if(!$docBlock->hasTag('var')) {
      return null;
    }
    
    $varTags = $docBlock->getTagsByName('var');
    return trim(current($varTags));
  }
}