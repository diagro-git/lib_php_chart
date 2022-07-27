<?php
namespace Diagro\Chart;

use Illuminate\Foundation\Http\Kernel;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

/**
 * Bridge between php chart library and laravel
 *
 * "chart.js": "3.3.0" -> add this to packages.json (npm)
 *
 * @package Diagro\Web
 */
class DiagroServiceProvider extends ServiceProvider
{


    public function register()
    {
        $this->app->singleton('charts', \Diagro\Chart\Manager::class);
    }


    /**
     * Boot me up Scotty!
     *
     * @param Kernel $kernel
     */
    public function boot(Kernel $kernel)
    {
        Blade::stringable(\Diagro\Chart\Chart::class, function(Chart $chart, int $width = 100, int $height = 100, SizeUnit $widthUnit = SizeUnit::PROCENT, SizeUnit $heightUnit = SizeUnit::PROCENT) {
            return app('charts')->render($chart->id, $width, $widthUnit->value, $height, $heightUnit->value);
        });
    }


}