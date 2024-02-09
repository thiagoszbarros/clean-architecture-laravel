<?php

declare(strict_types=1);

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

foreach (File::allFiles(__DIR__ . '/web') as $partial) {
    Route::prefix('')->group($partial->getPathname());
}