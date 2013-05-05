<?php

class Message extends \Stampie\Message
{
    public function getFrom() { return 'alias@domain.tld'; }
    public function getSubject() { return 'You are trying out Stampie'; }
    public function getText() { return 'So what do you think about it?'; }
}