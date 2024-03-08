<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class ContactUs extends Model
{
    const TABLE = 'contact_us';

    protected $table = self::TABLE;

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
    ];
}
