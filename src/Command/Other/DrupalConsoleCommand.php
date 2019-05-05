<?php

namespace DrupalCodeGenerator\Command\Other;

use DrupalCodeGenerator\Command\BaseGenerator;
use DrupalCodeGenerator\Utils;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ConfirmationQuestion;
use Symfony\Component\Console\Question\Question;

/**
 * Implements other:drupal-console-command command.
 */
class DrupalConsoleCommand extends BaseGenerator {

  protected $name = 'other:drupal-console-command';
  protected $description = 'Generates Drupal Console command';
  protected $alias = 'drupal-console-command';

  /**
   * {@inheritdoc}
   */
  protected function interact(InputInterface $input, OutputInterface $output) :void {

    $questions = Utils::moduleQuestions() + [
      'command_name' => new Question('Command name', '{machine_name}:example'),
      'description' => new Question('Command description', 'Command description.'),
      'container_aware' => new ConfirmationQuestion('Make the command aware of the drupal site installation?', TRUE),
    ];

    $vars = &$this->collectVars($questions);
    $vars['class'] = Utils::camelize(str_replace(':', '_', $vars['command_name'])) . 'Command';
    $vars['command_trait'] = $vars['container_aware'] ? 'ContainerAwareCommandTrait' : 'CommandTrait';

    $this->addFile()
      ->path('src/Command/{class}.php')
      ->template('other/drupal-console-command.twig');
  }

}
