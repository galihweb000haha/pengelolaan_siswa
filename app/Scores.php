<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scores extends Model
{
    protected $fillable = ['id_student', 'bahasa_indonesia', 'matematika', 'pengetahuan_alam', 'bahasa_inggris', 'pendidikan_agama', 'bahasa_jawa', 'olahraga'];
}
