<?php

class Conversation
{
    // Property to hold name
   public $name;

    // Allow name to be set on instantiation
    function __construct($name = '')
    {
        $this->name = $name;
    }

    // Method to say hello to name
    function sayHello($newLine = false)
    {
        // Set the greeting name
        $greeting = "Hello {$this->name}";

        // Return the greeting, checking for newline
        return $newLine == true ? "$greeting\n" : $greeting;
    }
}

// Create a new instance of Conversation
// Set the $name to 'Codeup'
$chat = new Conversation('Codeup');
$chat2 = new Conversation('Paul');

// Output greeting to $name, with trailing newline
echo $chat->sayHello(true);
echo $chat2->sayHello(true);