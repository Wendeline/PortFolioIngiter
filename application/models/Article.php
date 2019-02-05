<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Article extends Eloquent
{
    public $timestamps = false;

    public function Competence()
    {
        return $this->belongsToMany('Competences', 'arttocomp', 'idA', 'idC');
    }

    public function Photos()
    {
        return $this->hasMany('Photos', 'idA');
    }
}
