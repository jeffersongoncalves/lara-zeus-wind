---
title: Events
weight: 5
---

## Available Events

wind will fire these events:
- `LaraZeus\Wind\Events\LetterSent`
  when a new letter sent from the website
- `LaraZeus\Wind\Events\ReplySent`
  when you send a replay from the admin panel
- `LaraZeus\Wind\Events\NewLetterSent`
  when you send a new letter from the admin panel

## Register a Listener:

* first create your listener:
* 
```bash
php artisan make:listener SendWindNotification --event=LetterSent
```

* second register the listener in your `EventServiceProvider`

```php
protected $listen = [
    //...
    LetterSent::class => [
        SendWindNotification::class,
    ],
];
```

* finally, you can receive the letter object in the `handle` method, and do what ever you want. 
for example:

```php
Mail::to(User::first())->send(new \App\Mail\Contact(
    $event->letter->name, $event->letter->email, $event->letter->message
));
```
