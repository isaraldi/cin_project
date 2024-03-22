<?php declare(strict_types = 1);

namespace Drupal\cin_project_search_and_replace\Plugin\Action;

use Drupal\Core\Access\AccessResultInterface;
use Drupal\Core\Action\Plugin\Action\EntityActionBase;
use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Session\AccountInterface;

/**
 * Provides a Search and Replace action.
 *
 * @Action(
 *   id = "search_and_replace",
 *   label = @Translation("Search and Replace"),
 *   type = "node",
 *   category = @Translation("Custom"),
 * )
 *
 * @DCG
 * For updating entity fields consider extending FieldUpdateActionBase.
 * @see \Drupal\Core\Field\FieldUpdateActionBase
 *
 * @DCG
 * In order to set up the action through admin interface the plugin has to be
 * configurable.
 * @see https://www.drupal.org/project/drupal/issues/2815301
 * @see https://www.drupal.org/project/drupal/issues/2815297
 *
 * @DCG
 * The whole action API is subject of change.
 * @see https://www.drupal.org/project/drupal/issues/2011038
 */
final class SearchAndReplace extends EntityActionBase {

  /**
   * {@inheritdoc}
   */
  public function access($entity, AccountInterface $account = NULL, $return_as_object = FALSE): AccessResultInterface|bool {
    /** @var \Drupal\Core\Entity\ContentEntityInterface $entity */
    $access = $entity->access('update', $account, TRUE);
    return $return_as_object ? $access : $access->isAllowed();
  }

  /**
   * {@inheritdoc}
   */
  public function execute(ContentEntityInterface $entity = NULL): void {
    $a = $entity;
  }

}
