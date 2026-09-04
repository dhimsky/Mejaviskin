<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'step_label',
        'description',
        'ingredients',
        'full_ingredients',
        'net_volume',
        'usage_note',
        'how_to_use',
        'benefits',
        'image',
        'sort_order',
        'is_active',
        'is_coming_soon',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'is_coming_soon' => 'boolean',
        'sort_order' => 'integer',
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    /**
     * Ingredients disimpan dipisah koma, dipecah jadi array untuk ditampilkan sebagai tag.
     */
    public function getIngredientListAttribute(): array
    {
        if (! $this->ingredients) {
            return [];
        }

        return array_map('trim', explode(',', $this->ingredients));
    }

    /**
     * Manfaat disimpan satu baris per poin, dipecah jadi array untuk ditampilkan sebagai list.
     */
    public function getBenefitListAttribute(): array
    {
        if (! $this->benefits) {
            return [];
        }

        return array_values(array_filter(array_map('trim', explode("\n", $this->benefits))));
    }

    public function getImageUrlAttribute(): ?string
    {
        return $this->image ? asset('storage/'.$this->image) : null;
    }

    public static function makeUniqueSlug(string $name, ?int $ignoreId = null): string
    {
        $base = Str::slug($name);
        $slug = $base;
        $i = 1;

        while (
            static::where('slug', $slug)
                ->when($ignoreId, fn ($q) => $q->where('id', '!=', $ignoreId))
                ->exists()
        ) {
            $slug = $base.'-'.(++$i);
        }

        return $slug;
    }
}
