<?php

namespace Drupal\evidence\Entity;

use Drupal\views\EntityViewsData;

/**
 * Provides Views data for Withdraw entities.
 */
class EvidenceViewsData extends EntityViewsData {

  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    // Additional information for Views integration, such as table joins, can be
    // put here.
    $data = parent::getViewsData();
    $data['evidence']['state']['filter']['id'] = 'state_machine_state';
    $data['evidence']['uid']['filter']['id'] = 'entity_reference';
    return $data;
  }

}
