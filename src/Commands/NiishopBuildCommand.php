<?php


namespace Abnermouke\Niishop\Commands;

use Illuminate\Console\Command;

/**
 * Console Builder to build
 * Class ConsoleBuildCommand
 * @package Abnermouke\Niishop\Commands
 */
class NiishopBuildCommand extends Command
{


    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'builder:niishop';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Niishop power by Abnermouke';

    /**
     * Niishop to build
     * @Author Abnermouke <abnermouke@outlook.com>
     * @Originate in Abnermouke's MBP
     * @Time 2022-04-07 01:54:59
     * @return bool
     */
    public function handle()
    {
        //返回成功
        return true;
    }

}
