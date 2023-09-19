<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diary extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'created_at',
        'title',
        'content'
        ];
    
    public function getPaginateByLimit(int $limit_count = 3)
    {
        return $this->orderby('updated_at', 'DESC')->paginate($limit_count);
    }
}
