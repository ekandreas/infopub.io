<?php
include_once 'vendor/ekandreas/docker-bedrock/recipe.php';
include_once 'vendor/ekandreas/dipwpe/main.php';

server('infopub.dev', 'default')
    ->env('container', 'bedrock')
    ->stage('development');


server('infopub.io', '52.28.4.166')
    ->user('forge')
    ->env('remote.name', 'infopub')
    ->env('remote.database', 'infopub')
    ->env('remote.ssh', 'forge@52.28.4.166')
    ->env('remote.domain', 'infopub.io')
    ->env('remote.path', '/home/forge/www.infopub.io')
    ->env('local.domain', 'infopub.dev')
    ->env('deploy_path', '/home/forge/www.infopub.io')
    ->stage('production')
    ->identityFile();