<?php

declare(strict_types=1);

namespace Drupal\evidence\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBundleBase;

/**
 * Defines the Evidence type configuration entity.
 *
 * @ConfigEntityType(
 *   id = "evidence_type",
 *   label = @Translation("Evidence type"),
 *   label_collection = @Translation("Evidence types"),
 *   label_singular = @Translation("evidence type"),
 *   label_plural = @Translation("evidences types"),
 *   label_count = @PluralTranslation(
 *     singular = "@count evidences type",
 *     plural = "@count evidences types",
 *   ),
 *   handlers = {
 *     "form" = {
 *       "add" = "Drupal\evidence\Form\EvidenceTypeForm",
 *       "edit" = "Drupal\evidence\Form\EvidenceTypeForm",
 *       "delete" = "Drupal\Core\Entity\EntityDeleteForm",
 *     },
 *     "list_builder" = "Drupal\evidence\EvidenceTypeListBuilder",
 *     "route_provider" = {
 *       "html" = "Drupal\Core\Entity\Routing\AdminHtmlRouteProvider",
 *     },
 *   },
 *   admin_permission = "administer evidence types",
 *   bundle_of = "evidence",
 *   config_prefix = "evidence_type",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid",
 *   },
 *   links = {
 *     "add-form" = "/admin/structure/evidence_types/add",
 *     "edit-form" = "/admin/structure/evidence_types/manage/{evidence_type}",
 *     "delete-form" = "/admin/structure/evidence_types/manage/{evidence_type}/delete",
 *     "collection" = "/admin/structure/evidence_types",
 *   },
 *   config_export = {
 *     "id",
 *     "label",
 *     "uuid",
 *   },
 * )
 */
final class EvidenceType extends ConfigEntityBundleBase {

  /**
   * The machine name of this evidence type.
   */
  protected string $id;

  /**
   * The human-readable name of the evidence type.
   */
  protected string $label;

}
