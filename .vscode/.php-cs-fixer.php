<?php

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);



=======
>>>>>>> dc312f89 (.)
=======
>>>>>>> c010b2b8 (.)
=======
>>>>>>> 499a5da9 (.)
=======
declare(strict_types=1);

>>>>>>> 688d0704 (first)
=======
>>>>>>> 80d56bca (Squashed 'laravel/Modules/Xot/' content from commit 88673e4f7)
=======
>>>>>>> 4930fb00 (Squashed 'laravel/Modules/Job/' content from commit 5c1a4b65)
$finder = PhpCsFixer\Finder::create()
    ->notPath('bootstrap/cache')
    ->notPath('storage')
    ->notPath('vendor')
    ->in(__DIR__)
    ->name('*.php')
    ->notName('*.blade.php')
    ->ignoreDotFiles(true)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    ->ignoreVCS(true)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
;
=======
>>>>>>> dc312f89 (.)
=======
>>>>>>> c010b2b8 (.)
=======
>>>>>>> 499a5da9 (.)
=======
    ->ignoreVCS(true);
>>>>>>> 688d0704 (first)
=======
    ->ignoreVCS(true)
>>>>>>> 80d56bca (Squashed 'laravel/Modules/Xot/' content from commit 88673e4f7)
=======
    ->ignoreVCS(true)
>>>>>>> 4930fb00 (Squashed 'laravel/Modules/Job/' content from commit 5c1a4b65)

$config = new PhpCsFixer\Config();

$config
    ->setRules([
        '@Symfony' => true,
        'array_indentation' => true,
        'function_typehint_space' => true,
        'declare_equal_normalize' => true,
        'declare_strict_types' => true,
        'combine_consecutive_unsets' => true,
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        //'binary_operator_spaces' => ['align_double_arrow' => false],
=======
        // 'binary_operator_spaces' => ['align_double_arrow' => false],
>>>>>>> 688d0704 (first)
=======
        //'binary_operator_spaces' => ['align_double_arrow' => false],
>>>>>>> 80d56bca (Squashed 'laravel/Modules/Xot/' content from commit 88673e4f7)
=======
        //'binary_operator_spaces' => ['align_double_arrow' => false],
>>>>>>> 4930fb00 (Squashed 'laravel/Modules/Job/' content from commit 5c1a4b65)
        'array_syntax' => ['syntax' => 'short'],
        'linebreak_after_opening_tag' => true,
        'not_operator_with_successor_space' => true,
        'ordered_imports' => true,
        'phpdoc_order' => true,
        'php_unit_construct' => false,
        'braces' => [
            'position_after_functions_and_oop_constructs' => 'same',
        ],
        'function_declaration' => true,
        'blank_line_after_namespace' => true,
        'class_definition' => true,
        'elseif' => true,
    ])
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    ->setFinder($finder)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
;
=======
>>>>>>> dc312f89 (.)
=======
>>>>>>> c010b2b8 (.)
=======
>>>>>>> 499a5da9 (.)

return $config;
=======
    ->setFinder($finder);

return $config;
>>>>>>> 688d0704 (first)
=======
    ->setFinder($finder)

return $config;
>>>>>>> 80d56bca (Squashed 'laravel/Modules/Xot/' content from commit 88673e4f7)
=======
    ->setFinder($finder)

return $config;
>>>>>>> 4930fb00 (Squashed 'laravel/Modules/Job/' content from commit 5c1a4b65)
