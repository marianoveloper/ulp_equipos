<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Equipo extends Model
{
    use HasFactory;


    protected $guarded=['id'];

    const Activo=1;
    const Inactivo=2;

    public function users(): BelongsToMany{
        return
        $this->belongsToMany(User::class,'equipo_users','equipo_id','user_id')->withPivot('name');}
}
