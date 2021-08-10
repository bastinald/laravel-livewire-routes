# Laravel Livewire Routes

This package allows you to specify routes directly inside your full page Livewire components via a `route` method. The `route` method returns the Laravel `Route` facade, giving you complete control.

## Documentation

- [Installation](#installation)
- [Usage](#usage)
    - [The Route Method](#the-route-method)
    - [Using Route Parameters](#using-route-parameters)

## Installation

Require the package via composer:

```console
composer require bastinald/laravel-livewire-routes
```

## Usage

### The Route Method

Declare a `route` method in your full page Livewire components to route to them:

```php
namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Route;
use Livewire\Component;

class Login extends Component
{
    public function route()
    {
        return Route::get('login')
            ->name('login')
            ->middleware('guest');
    }
    
    public function render()
    {
        return view('livewire.auth.login');
    }
}
```

### Using Route Parameters

Pass route parameters to the component `mount` method as usual:

```php
namespace App\Http\Livewire\Users;

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Livewire\Component;

class Update extends Component
{
    public $user;

    public function route()
    {
        return Route::get('users/update/{user}')
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
