<?php

declare(strict_types=1);

namespace Drupal\crop\Attribute;

use Drupal\Component\Plugin\Attribute\Plugin;
use Drupal\Core\StringTranslation\TranslatableMarkup;

/**
 * Attribute class for crop entity provider plugins.
 *
 * @see \Drupal\crop\Annotation\CropEntityProvider
 * @see \Drupal\crop\EntityProviderManager
 * @see plugin_api
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
class CropEntityProvider extends Plugin {

  /**
   * Constructs a CropEntityProvider attribute.
   *
   * @param string $entity_type
   *   Entity type plugin provides. Also used as the plugin ID.
   * @param \Drupal\Core\StringTranslation\TranslatableMarkup|null $label
   *   (optional) The human-readable name of the crop entity provider.
   * @param string|\Drupal\Core\StringTranslation\TranslatableMarkup $description
   *   (optional) A brief description of the crop entity provider.
   */
  public function __construct(
    public readonly string $entity_type,
    public readonly ?TranslatableMarkup $label = NULL,
    public readonly string|TranslatableMarkup $description = '',
  ) {
    parent::__construct($entity_type);
  }

}
