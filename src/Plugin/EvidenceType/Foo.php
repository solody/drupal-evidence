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
  id: 'foo',
  label: new TranslatableMarkup('Foo'),
  description: new TranslatableMarkup('Foo description.'),
)]
final class Foo extends EvidenceTypePluginBase {

}
