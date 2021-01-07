<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

<<<<<<< Updated upstream
=======
    protected $appends =[
        'parent',
    ];

>>>>>>> Stashed changes
    #one to many
    public function contents()
    {
        return $this->hasMany(Content::class);
    }
<<<<<<< Updated upstream
=======

    #one to many ıverse - tersi
    public function parent(){
        return $this->belongsTo(Menu::class,'parent_id');
    }
    #one to many
    public function children(){
        return $this->hasMany(Menu::class,'parent_id');
    }
>>>>>>> Stashed changes
}
