<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    public $table = 'files';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'path', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    /**
     * Search query in multiple whereOr
     */
    public static function search($query)
    {
        return empty($query) ? static::query()
            : static::where('name', 'like', '%' . $query . '%');
    }
}
