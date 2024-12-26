<?php

declare(strict_types=1);

namespace Drupal\evidence;

use Drupal\Core\Config\Entity\ConfigEntityListBuilder;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Url;

/**
 * Defines a class to build a listing of evidence type entities.
 *
 * @see \Drupal\evidence\Entity\EvidenceType
 */
final class EvidenceTypeListBuilder extends ConfigEntityListBuilder {

  /**
   * {@inheritdoc}
   */
  public function buildHeader(): array {
    $header['label'] = $this->t('Label');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity): array {
    $row['label'] = $entity->label();
    return $row + parent::buildRow($entity);
  }

  /**
   * {@inheritdoc}
   */
  public function render(): array {
    $build = parent::render();

    $build['table']['#empty'] = $this->t(
      'No evidence types available. <a href=":link">Add evidence type</a>.',
      [':link' => Url::fromRoute('entity.evidence_type.add_form')->toString()],
    );

    return $build;
  }

}
