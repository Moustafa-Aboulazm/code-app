<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

final class Service extends Model
{
    use HasFactory, HasTranslations;

    const TABLE = 'services';

    protected $table = self::TABLE;

    protected $primaryKey = 'id';

    public array $translatable = [
        'title',
        'description',
    ];

    protected $fillable = [
        'icon',
        'title',
        'description',
        'link',
    ];

    public function title(): string
    {
        return $this->title;
    }

    public function icon(): string
    {
        return $this->icon;
    }

    public function description(): string
    {
        return $this->description;
    }

    public function link(): string
    {
        return $this->link;
    }
}
