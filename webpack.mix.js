<<<<<<< HEAD
<<<<<<< HEAD
const dotenvExpand = require('dotenv-expand');
dotenvExpand(require('dotenv').config({ path: '../../.env'/*, debug: true*/ }));

=======
>>>>>>> 80d56bca (Squashed 'laravel/Modules/Xot/' content from commit 88673e4f7)
=======
const dotenvExpand = require('dotenv-expand');
dotenvExpand(require('dotenv').config({ path: '../../.env'/*, debug: true*/ }));

>>>>>>> 4930fb00 (Squashed 'laravel/Modules/Job/' content from commit 5c1a4b65)
const mix = require('laravel-mix');
require('laravel-mix-merge-manifest');

mix.setPublicPath('../../public').mergeManifest();

<<<<<<< HEAD
<<<<<<< HEAD
mix.js(__dirname + '/resources/assets/js/app.js', 'js/lang.js')
    .sass(__dirname + '/resources/assets/sass/app.scss', 'css/lang.css');
=======
mix.js(__dirname + '/resources/assets/js/app.js', 'js/xot.js')
    .sass(__dirname + '/resources/assets/sass/app.scss', 'css/xot.css');
>>>>>>> 80d56bca (Squashed 'laravel/Modules/Xot/' content from commit 88673e4f7)
=======
mix.js(__dirname + '/resources/assets/js/app.js', 'js/job.js')
    .sass(__dirname + '/resources/assets/sass/app.scss', 'css/job.css');
>>>>>>> 4930fb00 (Squashed 'laravel/Modules/Job/' content from commit 5c1a4b65)

if (mix.inProduction()) {
    mix.version();
}
