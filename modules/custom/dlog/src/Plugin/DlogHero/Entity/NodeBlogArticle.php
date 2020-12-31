<?php

namespace Drupal\dlog\Plugin\DlogHero\Entity;

use Drupal\dlog_hero\Plugin\DlogHero\Entity\DlogHeroEntityPluginBase;

/**
 * Hero block for blog_article node type.
 *
 * @DlogHeroEntity(
 *   id = "dlog_node_article",
 *   entity_type = "node",
 *   entity_bundle = {"article"}
 * )
 */
class NodeBlogArticle extends DlogHeroEntityPluginBase {

  /**
   * {@inheritdoc}
   */
  public function getHeroSubtitle() {
    /** @var \Drupal\node\NodeInterface $node */
    $node = $this->getEntity();
    return $node->get('body')->value;
  }

  /**
   * {@inheritdoc}
   */
  public function getHeroImage() {
    /** @var \Drupal\node\NodeInterface $node */
    $node = $this->getEntity();
    /** @var \Drupal\media\MediaInterface $media */
    $media = $node->get('field_promo')->entity;

    return $media->get('field_media_image')->entity->get('uri')->value;
  }

}
