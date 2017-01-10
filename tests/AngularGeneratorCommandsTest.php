<?php


class AngularGeneratorCommandsTest extends TestCase
{
    public function testNgGeneratorsExist()
    {
        $exitCode = Artisan::call('list');
        $output = Artisan::output();

        $this->assertEquals($exitCode, 0);

        $this->assertContains('ng:page', $output);
        $this->assertContains('ng:dialog', $output);
        $this->assertContains('ng:component', $output);
        $this->assertContains('ng:service', $output);
        $this->assertContains('ng:filter', $output);
        $this->assertContains('ng:config', $output);
    }
}
