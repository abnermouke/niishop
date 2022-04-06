<?php


namespace Abnermouke\Niishop;

use Abnermouke\Niishop\Commands\NiishopBuildCommand;
use Illuminate\Support\ServiceProvider;

class NiishopServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //引入配置
        $this->app->singleton('command.builder.niishop', function () {
            //返回实例
            return new NiishopBuildCommand();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // 发布配置文件
        $this->publishes([

        ]);
        // 注册配置
        $this->commands('command.builder.niishop');
    }

}
