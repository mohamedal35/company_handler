<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marketer extends Model
{
    use HasFactory;
    protected $fillabe = ['for', 'email', 'name', 'loc', 'phone'];
    public function get_marketers() {
        return $this->get();
    }
}
