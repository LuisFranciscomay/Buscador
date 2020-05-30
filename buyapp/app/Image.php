<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//migracion
Schema::create('tareas', function (Blueprint $table) {
    $table->string('path');
});

//modelo
class Image extends Model
{
    protected $fillable = ['path'];

    public function getUrlPathAttribute()
    {
        return \Storage::url($this->path);
    }

}
