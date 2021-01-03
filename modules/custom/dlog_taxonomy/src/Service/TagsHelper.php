<?php

namespace Drupal\dlog_taxonomy\Service;

use Drupal\Core\Entity\EntityStorageInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\file\FileInterface;
use Drupal\media\MediaInterface;
use Drupal\node\NodeInterface;
use Drupal\taxonomy\TermInterface;

class TagsHelper implements TagsHelperInterface {

  protected EntityStorageInterface $termStorage;
  /**
   * @var EntityStorageInterface
   */
  protected EntityStorageInterface $nodeStorage;

  public function __construct(EntityTypeManagerInterface $entity_type_manager){
    $this->termStorage = $entity_type_manager->getStorage('taxonomy_term');
    $this->nodeStorage = $entity_type_manager->getStorage('node');
  }

  public function getPromoUri($tid){
    /** @var TermInterface $term */
    $term = $this->termStorage->load($tid);

    if ($term instanceof TermInterface && $term->bundle() == 'tags'){
      if ($term->get('field_image')->isEmpty()){
        $last_blog_article_result = $this->nodeStorage->getQuery()
          ->condition('status', NodeInterface::PUBLISHED)
          ->condition('field_tags', $tid, 'IN')
          ->condition('type', 'article')
          ->sort('created', 'DESC')
          ->range(0,1)
          ->execute();
        if (!empty($last_blog_article_result)){
          $last_blog_article = $this->nodeStorage
            ->load(array_shift($last_blog_article_result));
          if ($last_blog_article->hasField('field_promo') && !$last_blog_article->get('field_promo')->isEmpty()){
            /** @var MediaInterface $media */
            $media = $last_blog_article->get('field_promo')->entity;
            /** @var FileInterface $file */
            $file = $media->get('field_media_image')->entity;

            return $file->getFileUri();
          }
        }
      }else{
        /** @var MediaInterface $media */
        $media = $term->get('field_image')->entity;
        /** @var FileInterface $file */
        $file = $media->get('field_media_image')->entity;

        return $file->getFileUri();
      }
    }
  }

}
