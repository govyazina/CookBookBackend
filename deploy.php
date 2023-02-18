<?php

declare(strict_types=1);

namespace Deployer;

require 'recipe/symfony.php';
require 'contrib/cachetool.php';

// Config

set('repository', 'git@github.com:govyazina/CookBookBackend.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// PHP-FPM
desc('PHP-FPM restart');
task('fpm:restart', function () {
    run('sudo systemctl restart php8.2-fpm');
});

// Hosts

host('138.197.188.157')
    ->set('remote_user', 'deployer')
    ->set('deploy_path', '~/CookBookBackend')
    ->set('cachetool', '/var/run/php/php-fpm.sock');

// Hooks

after('deploy:failed', 'deploy:unlock');

after('deploy:symlink', 'cachetool:clear:opcache');
after('deploy:symlink', 'fpm:restart');

// [Optional] If deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

