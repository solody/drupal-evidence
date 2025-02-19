<?php

declare(strict_types=1);

namespace Drupal\evidence;

use Drupal\Component\Plugin\PluginBase;

/**
 * Base class for evidence_type plugins.
 */
abstract class EvidenceTypePluginBase extends PluginBase implements EvidenceTypeInterface {

  /**
   * {@inheritdoc}
   */
  public function label(): string {
    // Cast the label to a string since it is a TranslatableMarkup object.
    return (string) $this->pluginDefinition['label'];
  }

}
