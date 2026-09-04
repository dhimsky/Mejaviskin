<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Setting extends Model
{
    protected $fillable = ['key', 'value'];

    public static function get(string $key, ?string $default = null): ?string
    {
        $all = Cache::rememberForever('site-settings', function () {
            return static::query()->pluck('value', 'key')->all();
        });

        return $all[$key] ?? $default;
    }

    public static function set(string $key, ?string $value): void
    {
        static::updateOrCreate(['key' => $key], ['value' => $value]);
        Cache::forget('site-settings');
    }

    /**
     * Nomor WhatsApp dalam format angka saja (mis. 6281234567890),
     * siap dipakai untuk link wa.me/...
     */
    public static function whatsappNumber(): string
    {
        return preg_replace('/\D/', '', static::get('whatsapp_number', '6282112345678'));
    }
}
