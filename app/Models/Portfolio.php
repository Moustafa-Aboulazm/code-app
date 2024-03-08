<?php

namespace App\Models;

use App\Enum\DefaultData;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

final class Portfolio extends Model
{
    use HasFactory, HasTranslations;

    const TABLE = 'portfolios';

    protected $table = self::TABLE;

    protected $primaryKey = 'id';

    protected $with = [
        'category',
        'images',
    ];

    public array $translatable = [
        'name',
        'description',
        'client',
    ];

    protected $fillable = [
        'name',
        'description',
        'client',
        'date',
        'links',
        'category_id',
        'status',
    ];

    protected $casts = [
        'links' => 'array',
    ];

    public function name(): string
    {
        return $this->name;
    }

    public function description(): string
    {
        return $this->description;
    }

    public function client(): string
    {
        return $this->client;
    }

    public function date(): string
    {
        return $this->date;
    }

    public function links(): array
    {
        return $this->links;
    }

    public function status(): string
    {
        return $this->status;
    }

    public function category_id(): int
    {
        return $this->category_id;
    }

    public function scopeActive($query)
    {
        return $query->where('status', DefaultData::ACTIVE);
    }

    public function scopeInactive($query)
    {
        return $query->where('status', DefaultData::INACTIVE);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(related: Category::class, foreignKey: 'category_id', ownerKey: 'id');
    }

    public function images(): HasMany
    {
        return $this->hasMany(related: Image::class, foreignKey: 'table_id', localKey: 'id')
            ->where('table_name', self::TABLE);
    }
}
