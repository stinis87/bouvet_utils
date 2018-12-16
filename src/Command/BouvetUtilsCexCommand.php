<?php

namespace Drupal\bouvet_utils\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Drupal\Console\Core\Command\Command;
use Drupal\Console\Annotations\DrupalCommand;

/**
 * Class BouvetUtilsCexCommand.
 *
 * @DrupalCommand (
 *     extension="bouvet_utils",
 *     extensionType="module"
 * )
 */
class BouvetUtilsCexCommand extends Command {

  /**
   * {@inheritdoc}
   */
  protected function configure() {
    $this
      ->setName('bcex')
      ->setDescription($this->trans('commands.bcex.description'));
  }

  /**
   * {@inheritdoc}
   */
  protected function execute(InputInterface $input, OutputInterface $output) {
    $message=shell_exec("drupal config:export;");
    print_r($message);
    $message=shell_exec("drush export-all;");
    print_r($message);
    $message=shell_exec("drush cr;");
    print_r($message);
  }
}
