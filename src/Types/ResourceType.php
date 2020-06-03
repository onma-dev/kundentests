<?php 

namespace Kundentests\Types;

class ResourceType extends AbstractType
{   
  /**
   * @var string
   */
  protected $file;

  /**
   * @var string
   */
  protected $size;

  /**
   * @var string
   */
  protected $extension;

  /**
   * @var string
   */
  protected $sha1;

  /**
   * @var string
   */
  protected $mediaType;

  /**
   * @param string $file
   * @return void
   */
  public function setFile(string $file) : void
  {
    $this->file = $file;
  }

  /**
   * @return string
   */
  public function getFile() : ?string
  {
    return $this->file;
  }

  /**
   * @param string $size
   * @return void
   */
  public function setSize(string $size) : void
  {
    $this->size = $size;
  }

  /**
   * @return string
   */
  public function getSize() : string
  {
    return $this->size;
  }

  /**
   * @param string $extension
   * @return void
   */
  public function setExtension(string $extension) : void
  {
    $this->extension = $extension;
  }

  /**
   * @return string
   */
  public function getExtension() : string
  {
    return $this->extension;
  }

  /**
   * @param string $sha1
   * @return void
   */
  public function setSha1(string $sha1) : void
  {
    $this->sha1 = $sha1;
  }

  /**
   * @return string
   */
  public function getSha1() : string
  {
    return $this->sha1;
  }

  /**
   * @param string $mediaType
   * @return void
   */
  public function setMediaType(string $mediaType) : void
  {
    $this->mediaType = $mediaType;
  }

  /**
   * @return string
   */
  public function getMediaType() : string
  {
    return $this->mediaType;
  }

}
