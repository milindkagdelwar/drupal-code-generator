<?php

namespace DrupalCodeGenerator\Tests\Generator\Drupal_8\Service;

use DrupalCodeGenerator\Tests\Generator\GeneratorBaseTest;

/**
 * Test for d8:service:logger command.
 */
class LoggerTest extends GeneratorBaseTest {

  protected $class = 'Drupal_8\Service\Logger';

  protected $interaction = [
    'Module name [%default_name%]:' => 'Foo',
    'Module machine name [foo]:' => 'foo',
    'Class [FileLog]:' => 'FileLog',
  ];

  protected $fixtures = [
    'foo.services.yml' => __DIR__ . '/_logger.services.yml',
    'src/Logger/FileLog.php' => __DIR__ . '/_logger.php',
  ];

}
