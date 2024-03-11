<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'number', 'subject', 'message'];
    public function create_contact($name, $email, $number, $subject, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->number = strval($number);
        $this->subject = $subject;
        $this->message = $message;
        $this->save();
    }
    public function number_contacts()
    {
        return $this->selectRaw('COUNT(*) as stats')->first();
    }
    public function latest_contacts() {
        return $this->selectRaw('*')->orderBy('created_at', 'DESC')->limit(8)->get();
    }
}
