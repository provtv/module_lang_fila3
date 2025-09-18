<?php

declare(strict_types=1);

namespace Modules\Lang\Actions;

use Illuminate\Support\Str;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;
=======
use Nwidart\Modules\Facades\Module;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
>>>>>>> dc312f89 (.)
=======
use Nwidart\Modules\Facades\Module;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
>>>>>>> c010b2b8 (.)
=======
use Nwidart\Modules\Facades\Module;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;
>>>>>>> 499a5da9 (.)

class GetTransPathAction
{
    use QueueableAction;

    /**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * Restituisce il path completo del file di traduzione dato un key.
     */
    public function execute(string $key): string
    {
        $ns = Str::of($key)->before('::')->toString();
        $item = Str::of($key)->after('::')->toString();
        $piece = explode('.', $item);
        $lang = app()->getLocale();
        try {
            $lang_path = app(GetModulePathByGeneratorAction::class)->execute($ns, 'lang');
            Assert::string($lang_path, 'Il percorso del modulo deve essere una stringa');
        } catch (\Throwable $e) {
            $lang_path = base_path('Modules/'.$ns.'/lang');
        }
        $file_name = $piece[0] ?? '';
        Assert::string($file_name, 'Il nome del file deve essere una stringa');
=======
=======
>>>>>>> c010b2b8 (.)
=======
>>>>>>> 499a5da9 (.)
     * Undocumented function.
     */
    public function execute(string $key): string
    {
        // $finder = trans()->getFinder();
        // dddx($finder);
        // $viewHints = [];
        // if (method_exists($finder, 'getHints')) {
        //    $viewHints = $finder->getHints();
        // }

        $ns = Str::of($key)->before('::')->toString();
        $item = Str::of($key)->after('::')->toString();
        $piece = explode('.', $item);
        $module_path = Module::getModulePath($ns);
        if (Str::endsWith($module_path, '/')) {
            $module_path = Str::of($module_path)->beforeLast('/')->toString();
        }
        $lang = app()->getLocale();
        $relativePath = config('modules.paths.generator.lang.path');
        
        // Utilizziamo module_path e verifichiamo che restituisca una stringa
        $lang_path = module_path($ns, $relativePath);
        Assert::string($lang_path, 'Il percorso del modulo deve essere una stringa');
        
        $file_name = $piece[0] ?? '';
        Assert::string($file_name, 'Il nome del file deve essere una stringa');

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> dc312f89 (.)
=======
>>>>>>> c010b2b8 (.)
=======
>>>>>>> 499a5da9 (.)
        return $lang_path.'/'.$lang.'/'.$file_name.'.php';
    }
}
