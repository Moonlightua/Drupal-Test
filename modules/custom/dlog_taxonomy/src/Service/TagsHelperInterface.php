<?php

namespace Drupal\dlog_taxonomy\Service;

interface TagsHelperInterface{

  /**
   * @param $tid
   *
   * @return mixed
   */
  public function getPromoUri($tid);
}
