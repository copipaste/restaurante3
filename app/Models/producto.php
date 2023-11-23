<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Menu;
use App\Models\Categoria;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'productos';


    public function menu()
    {
        return $this->belongsToMany(Menu::class, 'menu_platos');
    }

    public function categoria()
    {
        return $this->belongsTo(categoria::class);
    }
}
