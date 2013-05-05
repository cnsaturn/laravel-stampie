Laravel Stampie Bundle
============

A laravel bundle wraps the [Stampie Library](https://github.com/henrikbjorn/Stampie) which provides API Wrapper for different email providers such as [Postmark](http://postmarkapp.com/) and [SendGrid](http://sendgrid.com/).

## Dependencies

To manipulate the underlying HTTP requests as mentioned in the [Stampie document](https://github.com/henrikbjorn/Stampie#providers), [Buzz](http://github.com/kriswallsmith/Buzz) or [Guzzle](http://guzzlephp.org) should be installed and loaded before this bundle can work as expected. I personally recommend install [Laravel Buzz Bundle](https://github.com/cnsaturn/laravel-buzz) before we move on.

## Installation

You can install this bundle by running the following CLI command:

```php
$php artisan bundle:install stampie
```

## Bundle Registration

Add the following to your application/bundles.php file:

```php
'stampie' => array(
    'auto' => true,
),
```

## Example Usage

```php
// Define your message metadata class and put it in wherever you like
class Message extends \Stampie\Message
{
    public function getFrom() { return 'alias@domain.tld'; }
    public function getSubject() { return 'You are trying out Stampie'; }
    public function getText() { return 'So what do you think about it?'; }
}

// Resolve your mailer from Laravel Ioc Container
// Here we use postmark as an example
$postmark = IoC::resolve('postmark');

// Returns Boolean true on success or throws an HttpException for error
// messages not recognized by SendGrid api or ApiException for known errors.
$postmark->send(new Message('hello@yoozi.cn'));

```

More infomation about how to use Stampie [can be found here](https://github.com/henrikbjorn/Stampie).