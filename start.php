<?php

// Configure the PSR-0 compatible autoloader 
Autoloader::namespaces(array(
    'Stampie' => Bundle::path('stampie') . 'stampie' . DS . 'lib' . DS . 'Stampie'
));

// Register a postmark mailer in the IoC container
IoC::register('postmark', function()
{
    // Load the default settings, if they exist.
    $token = Config::get('stampie::postmark', array());

    // Return the instance for later usage
    $adapter = new Stampie\Adapter\Buzz(new Buzz\Browser());
    return new Stampie\Mailer\Postmark($adapter, $token['apiKey']);
});

// Register more mailer here
// More infomation about how to use Stampie can be found at https://github.com/henrikbjorn/Stampie