<?php

namespace Drupal\dlog\Plugin\Field\FieldFormatter;

use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Field\FieldDefinitionInterface;
use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\Plugin\Field\FieldFormatter\EntityReferenceFormatterBase;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\file\FileInterface;
use Drupal\media\MediaInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Plugin implementation of the 'Label with ican' formatter.
 *
 * @FieldFormatter(
 *   id = "dlog_label_with_icon",
 *   label = @Translation("Label with icon"),
 *   field_types = {
 *     "entity_reference"
 *   }
 * )
 */
class LabelWithIconFormatter extends EntityReferenceFormatterBase implements ContainerFactoryPluginInterface {

  /**
   * The entity type manaher service.
   *
   * @var EntityTypeManagerInterface
   */
  protected EntityTypeManagerInterface $entityTypeManager;

  public function __construct($plugin_id, $plugin_definition, FieldDefinitionInterface $field_definition, array $settings, $label, $view_mode, array $third_party_settings, EntityTypeManagerInterface $entity_type_manager) {


    parent::__construct($plugin_id, $plugin_definition, $field_definition, $settings, $label, $view_mode, $third_party_settings);

    $this->entityTypeManager = $entity_type_manager;
  }


  /**
   * Creates an instance of the plugin.
   *
   * @param \Symfony\Component\DependencyInjection\ContainerInterface $container
   *   The container to pull out services used in the plugin.
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin ID for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   *
   * @return static
   *   Returns an instance of this plugin.
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition){
    return new static(
      $plugin_id,
      $plugin_definition,
      $configuration['field_definition'],
      $configuration['settings'],
      $configuration['label'],
      $configuration['view_mode'],
      $configuration['third_party_settings'],
      $container->get('entity_type.manager')
    );
  }

  /**
   * {@inheritdoc}
   */
  public static function isApplicable(FieldDefinitionInterface $field_definition) {
    return ($field_definition->getFieldStorageDefinition()->getSetting('target_type') == 'media');
  }

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $element = [];

    foreach ($items as $delta => $item) {
      /** @var MediaInterface $entity */
      $entity = $this->entityTypeManager->getStorage('media')->load($item->target_id);
      $element[$delta] = [
        '#theme' => 'dlog_label_with_icon_media_formatter',
        '#url' => $this->getMediaUrl($entity),
        '#label' => $entity->label(),
        '#filesize' => $this->getMediaFilesize($entity),
        '#media_type' => $entity->bundle(),
      ];
    }

    return $element;
  }

  /**
   * Gets media URL.
   *
   * @param MediaInterface $entity
   */
  protected function getMediaUrl(MediaInterface $entity){
    switch($entity->bundle()){
      case 'audio':
        return $this->getFileUrlFromField($entity, 'field_media_audio_file');

      case 'document':
        return $this->getFileUrlFromField($entity, 'field_media_document');

      case 'image':
        return $this->getFileUrlFromField($entity, 'field_media_image');

      case 'video':
        return $this->getFileUrlFromField($entity, 'field_media_video_file');

      case 'remote_video':
        return $entity->get('field_media_oembed_video')->value;
    }
    return NULL;
  }



  protected function getMediaFilesize(MediaInterface $entity){

    switch($entity->bundle()){
      case 'audio':
        return $this->getFileSizeFromField($entity, 'field_media_audio_file');

      case 'document':
        return $this->getFileSizeFromField($entity, 'field_media_document');

      case 'image':
        return $this->getFileSizeFromField($entity, 'field_media_image');

      case 'video':
        return $this->getFileSizeFromField($entity, 'field_media_video_file');
    }
    return NULL;

  }

  public function getFileUrlFromField(MediaInterface $entity, $field_name){

    /** @var FileInterface $file_entity */
    $file_entity = $entity->get($field_name)->entity;
    $file_uri = $file_entity->getFileUri();
    return file_create_url($file_uri);
  }


  public function getFileSizeFromField(MediaInterface $entity, $field_name){

    /** @var FileInterface $file_entity */
    $file_entity = $entity->get($field_name)->entity;
    return format_size($file_entity->getSize());
  }

}
