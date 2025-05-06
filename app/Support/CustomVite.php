<?php

namespace App\Support;

use Illuminate\Foundation\Vite;
use Throwable;
use Illuminate\Support\Facades\Log;

class CustomVite extends Vite
{
    protected function readManifest(string $manifestPath): array
    {
        try {
            return parent::readManifest($manifestPath);
        } catch (Throwable $e) {
            Log::error('[Vite] manifest.json error: ' . $e->getMessage());
            throw $e;
        }
    }
}
