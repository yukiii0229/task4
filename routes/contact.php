<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email',];

    public static $rules = array(
        'name' => 'required',
        'email' => 'integer|min:0|max:150',
    );
    public function getDetail()
    {
        $txt = 'ID:'.$this->id . ' ' . $this->name . '(' . $this->mail .  '';
        return $txt;
    }
}