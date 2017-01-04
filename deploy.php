<?php
namespace Deployer;

date_default_timezone_set('Europe/Stockholm');

include_once 'vendor/deployer/deployer/recipe/composer.php';

server('production', 'skolporten.se', 22)
    ->set('deploy_path', '/mnt/persist/www/2017.skolporten.se')
    ->user('deploy')
    ->set('branch', 'master')
    ->stage('production')
    ->identityFile();

set('repository', 'git@github.com:ekandreas/Skolporten2017.git');

