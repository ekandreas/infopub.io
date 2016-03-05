<?php
/**
 * Implements example command.
 */
class Forge_Command extends WP_CLI_Command
{

    public function build($args, $assoc_args)
    {
        $version = (int)phpversion();
        if ($version >= 7) {
            Env::init();
            $root_dir=realpath(__DIR__.'/../../../../../');
            $dotenv = new Dotenv\Dotenv($root_dir);
            if (file_exists($root_dir.'/.env')) {
                $dotenv->load();
                $dotenv->required(['FORGE_TRIGGER']);
            }
            file_get_contents(env('FORGE_TRIGGER'));
            WP_CLI::success("Forge build triggered!");
        }
    }
}

WP_CLI::add_command('forge', 'Forge_Command');
