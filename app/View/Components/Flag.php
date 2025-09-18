<?php

declare(strict_types=1);

namespace Modules\Lang\View\Components;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\View\Component;
use Modules\Xot\Actions\GetViewAction;

/**
 * Undocumented class.
 */
class Flag extends Component
{
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct(): void {
=======
    public function __construct(public string $name)
    {
>>>>>>> dc312f89 (.)
=======
    public function __construct(public string $name)
    {
>>>>>>> c010b2b8 (.)
=======
    public function __construct(public string $name)
    {
>>>>>>> 499a5da9 (.)
    }

    public function render(): Renderable
    {
        $view = app(GetViewAction::class)->execute();
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
    }
}
