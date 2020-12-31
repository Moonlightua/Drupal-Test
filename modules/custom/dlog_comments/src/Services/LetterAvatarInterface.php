<?php

namespace Drupal\dlog_comments\Services;

interface LetterAvatarInterface {

  public function getColors();

  public function fromUsername($username);

  public function getLetterFromUsername($username);

  public function getTextColor($color, $text_color_dark = '#000000', $text_color_light = '#FFFFFF');
}
