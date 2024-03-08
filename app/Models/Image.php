<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class Image extends Model
{
    use HasFactory;

    const TABLE = 'images';

    protected $table = self::TABLE;

    protected $primaryKey = 'id';

    protected $fillable = [
        'table_name',
        'table_id',
        'path',
    ];

    public function path(): string
    {
        return $this->path;
    }

    public function ImageUrl(string $path): ?string
    {
        return asset(path: \Storage::url(path: $path . $this->path));
    }

    public function portfolio(): BelongsTo
    {
        return $this->belongsTo(Portfolio::class, 'table_id', 'id')
            ->where('table_name', Portfolio::TABLE);
    }
}
