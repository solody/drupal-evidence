<?php

declare(strict_types=1);

namespace Drupal\evidence;

use Drupal\entity\BundlePlugin\BundlePluginInterface;

/**
 * Interface for evidence_type plugins.
 */
interface EvidenceTypeInterface extends BundlePluginInterface {

  /**
   * Returns the translated plugin label.
   */
  public function label(): string;

}
