<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
namespace Modules\Lang\Providers;
=======
namespace Modules\Xot\Providers;
>>>>>>> 80d56bca (Squashed 'laravel/Modules/Xot/' content from commit 88673e4f7)
=======
namespace Modules\Job\Providers;
>>>>>>> 4930fb00 (Squashed 'laravel/Modules/Job/' content from commit 5c1a4b65)

use Illuminate\Foundation\Support\Providers\EventServiceProvider as BaseEventServiceProvider;

class EventServiceProvider extends BaseEventServiceProvider
{
    /**
     * The event handler mappings for the application.
     *
     * @var array<string, array<int, string>>
     */
    protected $listen = [];

    /**
     * Indicates if events should be discovered.
     *
     * @var bool
     */
    protected static $shouldDiscoverEvents = true;

    /**
     * Configure the proper event listeners for email verification.
     */
<<<<<<< HEAD
    protected function configureEmailVerification(): void
    {
    }
=======
    protected function configureEmailVerification(): void {}
>>>>>>> 4930fb00 (Squashed 'laravel/Modules/Job/' content from commit 5c1a4b65)
}
