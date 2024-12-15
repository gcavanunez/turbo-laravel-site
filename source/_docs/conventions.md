---
extends: _layouts.docs
title: Conventions
description: Installing Turbo Laravel
order: 3
---

# Conventions

These are the 2.x installation steps!

```bash
composer require hotwired-laravel/turbo-laravel
```

After installing, run the `turbo:install` Artisan command:

```bash
php artisan turbo:install
```

Native:

```php
class ChirpsController
{
    use InteractsWithHotwireNativeNavigation;

    public function create(ChirpRequest $request)
    {
        $request->user()->chirps()->create(
            $request->validated()
        );

        return $this->recedeOrRedirectTo(route('chirps.index'))
            ->with('notice', __('Chirp created.'));
    }
}
```

