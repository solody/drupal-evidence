<?php

declare(strict_types=1);

namespace Drupal\evidence\Plugin\EvidenceType;

use Drupal\Core\StringTranslation\TranslatableMarkup;
use Drupal\evidence\Attribute\EvidenceType;
use Drupal\evidence\EvidenceTypePluginBase;

/**
 * Plugin implementation of the evidence_type.
 */
#[EvidenceType(
  id: 'default',
  label: new TranslatableMarkup('Default'),
  description: new TranslatableMarkup('A default plugin with nothing.'),
)]
final class DefaultEvidence extends EvidenceTypePluginBase {

  /**
   * {@inheritdoc}
   */
  public function buildFieldDefinitions() {
    return [];
  }

}
