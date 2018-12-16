<?php

namespace Drupal\bouvet_utils\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Drupal\Console\Core\Command\Command;
use Drupal\Console\Annotations\DrupalCommand;

/**
 * Class BouvetUtilsCimCommand.
 *
 * @DrupalCommand (
 *     extension="bouvet_utils",
 *     extensionType="module"
 * )
 */
class BouvetUtilsCimCommand extends Command {

  /**
   * {@inheritdoc}
   */
  protected function configure() {
    $this
      ->setName('bcim')
      ->setDescription($this->trans('commands.bcim.description'));
  }

  /**
   * {@inheritdoc}
   */
  protected function execute(InputInterface $input, OutputInterface $output) {
    $message=shell_exec("drupal config:import;");
    print_r($message);
    $message=shell_exec("drush import-all;");
    print_r($message);
    $message=shell_exec("drush cr;");
    print_r($message);
  }
}
