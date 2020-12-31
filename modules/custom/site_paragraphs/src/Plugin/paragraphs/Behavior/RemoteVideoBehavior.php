<?php

namespace Drupal\site_paragraphs\Plugin\paragraphs\Behavior;

use Drupal\Component\Utility\Html;
use Drupal\Core\Entity\Display\EntityViewDisplayInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\paragraphs\Entity\Paragraph;
use Drupal\paragraphs\Entity\ParagraphsType;
use Drupal\paragraphs\ParagraphInterface;
use Drupal\paragraphs\ParagraphsBehaviorBase;

/**
 * @ParagraphsBehavior (
 *   id = "site_paragraphs_remote_video",
 *   label = @Translation("Remote video settings"),
 *   description = @Translation("Additional settings for remote video paragraph."),
 *   weight = 0,
 * )
 */
class RemoteVideoBehavior extends ParagraphsBehaviorBase{

  /**
   * {@inheritdoc}
   */
  public static function isApplicable(ParagraphsType $paragraphs_type) {
    return $paragraphs_type->id() == 'remote_video';
  }

  public function view(array &$build, Paragraph $paragraph, EntityViewDisplayInterface $display, $view_mode) {
    $maximum_video_width = $paragraph->getBehaviorSetting($this->getPluginId(),'video_width', 'full');
    $bem_block = 'paragraph-' . $paragraph->bundle() . ($view_mode == 'default' ? '' : '-' . $view_mode);

    $build['#attributes']['class'][] = Html::getClass($bem_block . '--video-width-' . $maximum_video_width);
  }

  /**
   * {@inheritdoc}
   */
  public function buildBehaviorForm(ParagraphInterface $paragraph, array &$form, FormStateInterface $form_state) {

    $form['video_width'] = [
      '#type' => 'select',
      '#title' => $this->t('Video width'),
      '#description' => $this->t('Maximum width for video'),
      '#options' => [
          'full' => '100%',
          '720p' => '720p',
      ],
      '#default_value' =>  $paragraph->getBehaviorSetting($this->getPluginId(),'video_width', 'full')
    ];
    return $form;
  }
}

