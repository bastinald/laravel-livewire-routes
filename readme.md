# Laravel Livewire Routes

Laravel Livewire full page component routing. This package allows you to specify routes directly inside your full page Livewire components via a `route` method. The `route` method uses the Laravel `Route` facade, giving you complete control.

### Documentation

- [Installation](#installation)
- [Usage](#usage)

## Installation

Require the package via composer:

```console
composer require bastinald/laravel-livewire-routes
```

## Usage

Declare a `route` method in your Livewire components:

```php
use Illuminate\Support\Facades\Route;
use Livewire\Component;

class Login extends Component
{
    public function route()
    {
        return Route::get('/login', static::class)
            ->name('login')
            ->middleware('guest');
    }
    
    public function render()
    {
        return view('livewire.auth.login');
    }
}
```

Passing route parameters to the component `mount` method:

```php
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Livewire\Component;

class Update extends Component
{
    public $user;

    public function route()
    {
        return Route::get('/users/update/{user}', static::class)
            ->name('users.update')
            ->middleware('auth');
    }
    
    public function mount(User $user)
    {
        $this->user = $user;
    }
    
    public function render()
    {
        return view('livewire.users.update');
    }
}
```
