<?php

declare(strict_types=1);

namespace Drupal\evidence;

use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Drupal\Core\Plugin\DefaultPluginManager;
use Drupal\evidence\Attribute\EvidenceType;

/**
 * EvidenceType plugin manager.
 */
final class EvidenceTypePluginManager extends DefaultPluginManager {

  /**
   * Constructs the object.
   */
  public function __construct(\Traversable $namespaces, CacheBackendInterface $cache_backend, ModuleHandlerInterface $module_handler) {
    parent::__construct('Plugin/EvidenceType', $namespaces, $module_handler, EvidenceTypeInterface::class, EvidenceType::class);
    $this->alterInfo('evidence_type_info');
    $this->setCacheBackend($cache_backend, 'evidence_type_plugins');
  }

}
