# Laravel Livewire Routes

Automatic routing for your Livewire components.

## Installation

```console
composer require bastinald/laravel-livewire-routes
```

## Usage

Declare a `route` method in your Livewire components:

```php
public function route()
{
    return Route::get('/hello-world', static::class)
        ->name('hello-world')
        ->middleware('guest');
}
```

The `route` method should return a `Illuminate\Support\Facades\Route`.
