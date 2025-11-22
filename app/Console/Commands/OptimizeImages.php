<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\ImageOptimizer\OptimizerChainFactory;

class OptimizeImages extends Command
{
    protected $signature = 'images:optimize';
    protected $description = 'Optimize all images inside assets/img';

    public function handle()
    {
        $path = base_path('assets/img');

        $files = glob($path . '/*.{jpg,jpeg,png,gif,svg}', GLOB_BRACE);

        $optimizer = OptimizerChainFactory::create();

        foreach ($files as $file) {
            $optimizer->optimize($file);
            $this->info("Optimized: " . basename($file));
        }

        $this->info('All images optimized!');
    }
}
