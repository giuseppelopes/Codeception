<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'BaseCommandRunner.php';

class GeneratePageTest extends BaseCommandRunner {

    protected function setUp()
    {
        $this->makeCommand('\Codeception\Command\GeneratePage');
//        $this->config = array(
//            'class_name' => 'HobbitGuy',
//            'path' => 'tests',
//        );
    }

    public function testBasic()
    {
        $this->execute(array('page' => 'Login'));
        $this->assertEquals('tests/_pages/LoginPage.php', $this->filename);
        $this->assertContains('class LoginPage', $this->content);
        $this->assertContains('public static', $this->content);
    }
}