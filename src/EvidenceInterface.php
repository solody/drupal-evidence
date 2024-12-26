<?php

declare(strict_types=1);

namespace Drupal\evidence;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface defining an evidence entity type.
 */
interface EvidenceInterface extends ContentEntityInterface, EntityOwnerInterface, EntityChangedInterface {

}
