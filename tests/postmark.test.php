<?php

// Start the stampie bundle
Bundle::start('stampie');

class TestPostmark extends PHPUnit_Framework_TestCase {

    /**
     * Test to send a real-world message
     *
     * @return void
     */
    public function testSendEmail()
    {
        require 'fixtures/message.php';

        $postmark = IoC::resolve('postmark');
        $return = $postmark->send(new Message('hello@yoozi.cn'));

        $this->assertTrue($return);
    }
}