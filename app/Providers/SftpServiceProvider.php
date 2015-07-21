<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use League\Flysystem\Sftp\SftpAdapter;
use League\Flysystem\Filesystem;
use Storage;

class SFTPServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */

    public function boot()
    {
        Storage::extend('sftp', function($app, $config) {
            $adapter = new SftpAdapter([
                'host'          => $config['host'],
                'port'          => $config['port'],
                'username'      => $config['username'],
                'password'      => $config['password'],
                'privateKey'    => $config['privateKey'],
                'root'          => $config['root'],
                'timeout'       => $config['timeout'],
                'directoryPerm' => $config['directoryPerm']
            ]);

            return new Filesystem($adapter);
        });
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

    }
}