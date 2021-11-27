<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sanitize extends Model
{
    use HasFactory;

    public function generateUniqueId() : string
    {
        return md5(uniqid());
    }
}
