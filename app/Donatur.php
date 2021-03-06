<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Donatur extends Model
{
    protected $table = 'donatur';
    protected $fillable = ['id_user', 'nama_depan', 'nama_belakang', 'no_hp', 'alamat', 'umur'];
    protected $primaryKey = 'id_donatur';

    public function user() {
        return $this->hasOne('App\User');
    }

    public function donasi() {
        return $this->hasMany('App\Donasi');
    }
}
