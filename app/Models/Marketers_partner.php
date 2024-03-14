<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marketers_partner extends Model
{
    use HasFactory;
    protected $table = 'marketers_partners';
    public function get_all() {
        return $this->get();
    }
}
