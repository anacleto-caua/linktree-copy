<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tree extends Model
{
    use HasFactory;

    public $timestamps = false;

    public $fillable = ['title', 'address', 'description', 'creator'];

    /**
     * Indicates the relathionship between links and trees table
     * 
     */
    public function links()
    {
        return $this->hasMany(Link::class, 'tree', 'id');
    }

}
