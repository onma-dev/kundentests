<?php

namespace Kundentests\Utilities;

use Kundentests\Types\AbstractType;

use Neos\Utility\ObjectAccess;
use Neos\Utility\TypeHandling;

use Kundentests\Exceptions\ObjectMappingException;
use Doctrine\Common\Collections\ArrayCollection;


abstract class DataMapperUtility 
{
  /**
   * 
   * @param object $object
   * @param array $properties
   * @return mixed
   * @throws InvalidTypeException
   */
  public static function mapProperties($object, array $properties) 
  {    
    foreach($properties as $propertyName => $propertyValue) {
      if($propertyName === '__identity') {
        $propertyName = 'identity';
      }
      
      $propertyType = ReflectionUtility::getClassPropertyTypeByName($object, $propertyName);
      if($propertyType === null || !is_string($propertyType)) {
        continue;
      }

      $propertyTypeInformation = TypeHandling::parseType($propertyType);
      
      if( is_null($propertyValue) ) {
        continue;
      }
      
      if(TypeHandling::isSimpleType($propertyTypeInformation['type'])) {
        // do nothing
      } else if(TypeHandling::isCollectionType($propertyTypeInformation['type'])) {
        $propertyValue = self::mapCollection($propertyTypeInformation['elementType'], $propertyValue);        
      } else if($propertyTypeInformation['type'] === \DateTime::class ) {
        $propertyValue = DataMapperUtility::mapDateTime($propertyValue);              
      } else {
        $propertyValue = DataMapperUtility::mapObject($propertyTypeInformation['type'], $propertyValue);
      }
      
      ObjectAccess::setProperty($object, $propertyName, $propertyValue);
    }
        
    return $object;
  }
  
  
  /**
   * @param string $className
   * @param array $items
   * @return ArrayCollection
   */
  public static function mapCollection(string $className, array $items) : ArrayCollection
  {
    $collection = new ArrayCollection();
    
    if(!is_array($items) || count($items) <= 0) {
      return $collection;
    } 
    
    foreach($items as $itemProperties) {
      $itemType = self::mapObject($className, $itemProperties);
      $collection->add($itemType);
    }
    
    return $collection;
  }
  
  /**
   * 
   * @param string $className
   * @param array $properties
   * @return mixed
   */
  public static function mapObject(string $className, ?array $properties) 
  {
    try {
      $object = ObjectAccess::instantiateClass($className, []);
    } catch (\Exception $previous) {
      throw new ObjectMappingException(
        sprintf('Failed to instantiate class: %s', $className),
        1583840140,
        $previous
      );
    }
    
    if(is_array($properties)) {
      return self::mapProperties($object, $properties);
    }
    
    return $object;
  }
  
  /**
   * 
   * @param string $className
   * @param array $properties
   * @return \DateTime|null
   */
  public static function mapDateTime(?array $properties) : ?\DateTime
  {
    if(!is_array($properties) || count($properties) <= 0) {
      return null;
    }
    
    $dateTimeFormats = [
      'timestamp',
      'dateAndTime',
      'date',
      'format',
      'time'
    ];
    
    $dateTimeObject = null;
    
    foreach($dateTimeFormats as $dateTimeFormat) {    
      if( !isset($properties[$dateTimeFormat]) || !$properties[$dateTimeFormat] ) {
        continue;
      }
      
      if( $dateTimeFormat === 'timestamp' ) {
        $properties[$dateTimeFormat] = '@' . $properties[$dateTimeFormat];
      } 
      
      try {
        $dateTimeObject = new \DateTime($properties[$dateTimeFormat]);
      } catch(\Exception $e) {
        continue;
      }
    }
    
    return $dateTimeObject;
  }
}