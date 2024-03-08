<?php

namespace App\Models;

use App\Enum\Assets;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

final class Slider extends Model
{
    use HasTranslations, HasFactory;

    const TABLE = 'sliders';

    protected $table = self::TABLE;

    public array $translatable = [
        'title',
        'description',
    ];

    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'image',
        'description',
        'link',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function title(): string
    {
        return $this->title;
    }

    public function image(): string
    {
        return $this->image;
    }

    public function description(): string
    {
        return $this->description;
    }

    public function link(): string
    {
        return $this->link;
    }

    public function ImageUrl(): string
    {
        return asset(\Storage::url(Assets::Slider . $this->image));
    }

    public function scopeActive($query)
    {
        return $query->where('status', true);
    }

    public function scopeInactive($query)
    {
        return $query->where('status', false);
    }
}
