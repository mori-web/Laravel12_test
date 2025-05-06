<?php

namespace App\Support;

use Illuminate\Foundation\Vite;
use Throwable;
use Illuminate\Support\Facades\Log;

class CustomVite extends Vite
{
    protected function readManifest(string $manifestPath): array
    {
        if (!file_exists($manifestPath)) {
            Log::error("[Vite] manifest.json が存在しません: {$manifestPath}");
        }

        try {
            return parent::readManifest($manifestPath);
        } catch (Throwable $e) {
            Log::error('[Vite] manifest.json 読み込みエラー: ' . $e->getMessage());
            throw $e;
        }
    }
}
