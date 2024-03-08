<?php

namespace App\Models;

use App\Enum\DefaultData;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

final class Category extends Model
{
    use HasFactory, HasTranslations;

    const TABLE = 'categories';

    protected $table = self::TABLE;

    protected $primaryKey = 'id';

    public array $translatable = [
        'name',
    ];

    protected $fillable = [
        'name',
        'status',
    ];

    public function name(): string
    {
        return $this->name;
    }

    public function status(): string
    {
        return $this->status;
    }

    public function scopeActive($query)
    {
        return $query->where('status', DefaultData::ACTIVE);
    }

    public function scopeInactive($query)
    {
        return $query->where('status', DefaultData::INACTIVE);
    }

    public function portfolios(): HasMany
    {
        return $this->hasMany(related: Portfolio::class, foreignKey: 'category_id', localKey: 'id');
    }
}
