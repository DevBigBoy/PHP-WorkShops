<?php

class Message
{
    public $message;


    public function openChat()
    {
        echo "<p>open chat</p>";
        return $this;
    }

    public function send()
    {
        echo "<p>" . $this->message . "</p>";
        return $this;
    }

    public function closeChat()
    {
        echo "<p>close chat</p>";
    }
}

$student = new Message;
$student->message = "task 2 has been done";
$student->openChat();
$student->send();
$student->closeChat();

$student1 = new Message;
$student1->message = "task 3 has been done";
$student1->openChat()->send()->closeChat();
