<?php

namespace DrupalCodeGenerator\Tests\Generator\Drupal_8\Form;

use DrupalCodeGenerator\Tests\Generator\GeneratorBaseTest;

/**
 * Test for d8:form:config command.
 */
class ConfigTest extends GeneratorBaseTest {

  protected $class = 'Drupal_8\Form\Config';

  protected $interaction = [
    'Module name [%default_name%]:' => 'Foo',
    'Module machine name [foo]:' => 'foo',
    'Class [SettingsForm]:' => 'SettingsForm',
    'Would you like to create a route for this form? [Yes]:' => 'Yes',
    'Route name [foo.settings]:' => 'foo.example',
    'Route path [/admin/config/system/settings]:' => '/admin/config/content/example',
    'Route title [Settings]:' => 'Yo',
    'Route permission [administer site configuration]:' => 'administer site configuration',
    'Would you like to create a menu link for this route? [Yes]:' => 'Yes',
    'Link title [Yo]:' => 'Foo settings',
    'Link description:' => 'Configure foo.',
    'Parent menu item [system.admin_config_content]:' => 'system.admin_config_content',
  ];

  protected $fixtures = [
    'foo.links.menu.yml' => __DIR__ . '/_config_menu.links.yml',
    'foo.routing.yml' => __DIR__ . '/_config_routing.yml',
    'src/Form/SettingsForm.php' => __DIR__ . '/_config.php',
  ];

}
