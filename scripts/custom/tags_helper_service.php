<?php

/** @var \Drupal\dlog_taxonomy\Service\TagsHelperInterface $tags_helper */
$tags_helper = Drupal::service('dlog_taxonomy.tags_helper');

/** @var \Drupal\Core\Entity\EntityTypeManagerInterface $entity_type_manager */
$entity_type_manager = Drupal::service('entity_type.manager');

/** @var \Drupal\taxonomy\TermStorageInterface $term_storage */
$term_storage = $entity_type_manager->getStorage('taxonomy_term');

dump($tags_helper->getPromoUri(3));
dump($tags_helper->getPromoUri(1));
