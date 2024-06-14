<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Equipo;
use App\Models\EquiposPedidos;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Rappasoft\LaravelAuthenticationLog\Traits\AuthenticationLoggable;
use Illuminate\Database\Eloquent\Relations\Pivot;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use Notifiable, AuthenticationLoggable;


    const SinPrestamo=1;
    const Prestamo=2;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'google_id',
        'status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function equiposPedidos()
    {
        return $this->belongsToMany(EquiposPedidos::class);
    }

    public function equipos(): BelongsToMany{
        return $this->belongsToMany(Equipo::class,'equipo_users','user_id','equipo_id')->withPivot('id','fecha_salida', 'fecha_devolucion','descripcion_cobertura','status');
    }
}
