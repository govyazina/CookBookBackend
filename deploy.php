<?php

declare(strict_types=1);

namespace Deployer;

require 'recipe/symfony.php';

// Config

set('repository', 'git@github.com:govyazina/CookBookBackend.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('138.197.188.157')
    ->set('remote_user', 'deployer')
    ->set('deploy_path', '~/CookBookBackend');

// Hooks

after('deploy:failed', 'deploy:unlock');
