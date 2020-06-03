<?php 

namespace Kundentests\Types;

class VoteType extends AbstractType
{   
  
  /**
   * @var \Kundentests\Types\ReviewerType
   */
  protected $reviewer;
  
  /**
   * @var string
   */
  protected $message;
  
  /**
   * @var string
   */
  protected $youtubeVideoId;  
  
  /**
   * @var string
   */
  protected $youtubeEmbedUrl;
 
  /**
   * @var string
   */
  protected $comment;
 
  /**
   * @var \DateTime
   */
  protected $commentDateAndTime;
 
  /**
   * @var bool
   */
  protected $recommended;
  
  /**
   * @var bool
   */
  protected $top;
  
  /**
   * @var \Kundentests\Types\SourceType
   */
  protected $source;
  
  /**
   * @var float
   */
  protected $totalRating;
  
  /**
   * @var float
   */
  protected $totalRatingPercent;
 
  /**
   * @var \DateTime
   */
  protected $voteDatetime;
  
  /**
   * @param ReviewerType $reviewer
   * @return void
   */
  public function setReviewer(ReviewerType $reviewer) : void
  {
    $this->reviewer = $reviewer;
  }

  /**
   * @return SourceType
   */
  public function getReviewer() : ?ReviewerType
  {
    return $this->reviewer;
  }
  
  /**
   * @return string
   */
  public function getMessage(): string
  {
    return $this->message;
  }

  /**
   * @param string $message
   * @return void
   */
  public function setMessage(string $message): void
  {
    $this->message = $message;
  }
  
  /**
   * @return string
   */
  public function getYoutubeVideoId(): ?string
  {
    return $this->youtubeVideoId;
  }

  /**
   * @param string $youtubeVideoId
   * @return void
   */
  public function setYoutubeVideoId(string $youtubeVideoId = null): void
  {
    $this->youtubeVideoId = $youtubeVideoId;
  }
  
  /**
   * @return string
   */
  public function getYoutubeEmbedUrl(): ?string
  {
    return $this->youtubeEmbedUrl;
  }

  /**
   * @param string $youtubeEmbedUrl
   * @return void
   */
  public function setYoutubeEmbedUrl(string $youtubeEmbedUrl = null): void
  {
    $this->youtubeEmbedUrl = $youtubeEmbedUrl;
  }
  
  /**
   * @return string
   */
  public function getComment(): ?string
  {
    return $this->comment;
  }

  /**
   * @param string $comment
   * @return void
   */
  public function setComment(string $comment): void
  {
    $this->comment = $comment;
  }
  
  /**
   * @return \DateTime
   */
  public function getCommentDateAndTime(): ?\DateTime
  {
    return $this->commentDateAndTime;
  }

  /**
   * @param \DateTime $commentDateAndTime
   * @return void
   */
  public function setCommentDateAndTime(\DateTime $commentDateAndTime): void
  {
    $this->commentDateAndTime = $commentDateAndTime;
  }
  
  /**
   * @return bool
   */
  public function getRecommended(): bool
  {
    return $this->recommended;
  }

  /**
   * @param bool $recommended
   * @return void
   */
  public function setRecommended(bool $recommended): void
  {
    $this->recommended = $recommended;
  }

  /**
   * Wrapper function for getRecommended()
   * 
   * @return bool
   */
  public function isRecommended(): bool
  {
    return $this->getRecommended();
  }
  
  /**
   * @return bool
   */
  public function getTop(): bool
  {
    return $this->top;
  }

  /**
   * @param bool $top
   * @return void
   */
  public function setTop(bool $top): void
  {
    $this->top = $top;
  }

  /**
   * Wrapper function for getTop()
   * 
   * @return bool
   */
  public function isTop(): bool
  {
    return $this->getTop();
  }
  
  /**
   * @param SourceType $source
   * @return void
   */
  public function setSource(SourceType $source) : void
  {
    $this->source = $source;
  }

  /**
   * @return SourceType
   */
  public function getSource() : SourceType
  {
    return $this->source;
  }
  
  /**
   * @param float $totalRating
   * @return void
   */
  public function setTotalRating(float $totalRating) : void
  {
    $this->totalRating = $totalRating;
  }
  
  /**
   * @return float
   */
  public function getTotalRating() : float
  {
    return $this->totalRating;
  }
  
  /**
   * @param float $totalRatingPercent
   * @return void
   */
  public function setTotalRatingPercent(float $totalRatingPercent) : float
  {
    $this->totalRatingPercent = $totalRatingPercent;
  }
  
  /**
   * @return float
   */
  public function getTotalRatingPercent() : float
  {
    return $this->totalRatingPercent;
  }
  
  /**
   * @return \DateTime
   */
  public function getVoteDatetime(): ?\DateTime
  {
    return $this->voteDatetime;
  }

  /**
   * @param \DateTime $voteDatetime
   * @return void
   */
  public function setVoteDatetime(\DateTime $voteDatetime): void
  {
    $this->voteDatetime = $voteDatetime;
  }
}
