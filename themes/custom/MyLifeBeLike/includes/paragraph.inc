<?php

/**
 * Implements hook_preprocess_HOOK() for paragraph--code.html.twig
 */

function mylifebelike_preprocess_paragraph__code(array &$variables){
  var_dump('aa');
  $variables['#attached']['library'][] = 'mylifebelike/paragraph.code';
}

