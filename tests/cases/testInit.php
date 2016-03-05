<?php

class testInit extends WP_UnitTestCase
{

    public function setUp()
    {
        parent::setUp();
    }

    public function testThemeLoaded()
    {
        $this->assertTrue('Infopub' == wp_get_theme());
    }

    public function testPluginLoaded()
    {
        $this->assertTrue(is_plugin_active('bladerunner/bladerunner.php'));
    }
}
