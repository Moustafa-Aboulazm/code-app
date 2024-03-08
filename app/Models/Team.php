<?php

namespace App\Models;

use App\Enum\Assets;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

final class Team extends Model
{
    use HasFactory, HasTranslations;

    const TABLE = 'teams';

    protected $table = self::TABLE;

    public array $translatable = [
        'name',
        'job',
    ];

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'job',
        'image',
        'social',
    ];

    protected $casts = [
        'social' => 'array',
    ];

    public function name(): string
    {
        return $this->name;
    }

    public function job(): string
    {
        return $this->job;
    }

    public function socials(): array
    {
        return $this->social;
    }

    public function ImageUrl(): string
    {
        return asset(\Storage::url(Assets::Team . $this->image));
    }
}
