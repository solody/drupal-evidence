<?php

declare(strict_types=1);

namespace Drupal\evidence;

/**
 * Interface for evidence_type plugins.
 */
interface EvidenceTypeInterface {

  /**
   * Returns the translated plugin label.
   */
  public function label(): string;

}
