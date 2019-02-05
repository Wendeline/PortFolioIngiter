<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Competences extends Eloquent
{
    public $timestamps = false;

    public function article()
    {
        return $this->belongsToMany('Article', 'arttocomp', 'id', 'idA');
    }
}
