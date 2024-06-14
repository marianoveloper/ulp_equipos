<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Equipo>
 */
class EquipoFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'name'=>$this->faker->randomElement(['Camara', 'Computadora', 'Celular', 'Tablet', 'Microfono','Luces','Tripie','Audifonos','Proyector','Pantalla','Consola','Control','Cable','Adaptador','Monitor','Audifonos','Microfono','Camara','Proyector']),
           'marca'=>$this->faker->company,
           'modelo'=>$this->faker->randomElement(['Sony', 'Samsung', 'Nikon','Philips','Panasonic','LG','Canon','JVC','Hitachi','Sharp','Toshiba','Pioneer','Sanyo','Olympus','Fuji','Kodak','Pentax','Ricoh','Minolta','Vivitar','Yashica','Leica','Sigma','Tamron','Hasselblad','Mamiya','Bronica','Contax','Konica','Kyocera','Rollei','Voigtlander','Zeiss','Agfa','Hoya','Metz','Nissin','Sunpak','Vivitar','Bogen','Gitzo','Manfrotto','Slik','Velbon','Bushnell','Celestron','Meade','Minolta','Nikon','Olympus','Pentax','Sigma','Tamron','Vivitar','Canon','Fuji','Kodak','Leica','Mamiya','Nikon','Olympus','Pentax','Rollei','Voigtlander','Zeiss','Canon','Nikon','Olympus','Pentax','Sigma','Tamron','Vivitar','Canon','Fuji','Kodak','Leica','Mamiya','Nikon','Olympus','Pentax','Rollei','Voigtlander','Zeiss','Canon','Nikon','Olympus','Pentax','Sigma','Tamron','Vivitar','Canon','Fuji','Kodak','Leica','Mamiya','Nikon','Olympus','Pentax','Rollei','Voigtlander','Zeiss','Canon','Nikon','Olympus','Pentax','Sigma','Tamron','Vivitar','Canon','Fuji','Kodak','Leica','Mamiya','Nikon','Olympus','Pentax','Rollei','Voigtlander','Zeiss','Canon','Nikon','Olympus','Pentax','Sigma','Tamron','Vivitar','Canon','Fuji','Kodak','Leica','Mamiya','Nikon','Olympus','Pentax','Rollei','Voigtlander','Zeiss','Canon','Nikon','Olympus','Pentax','Sigma','Tamron','Vivitar','Canon','Fuji','Kodak','Leica','Mamiya','Nikon','Olympus','Pentax','Rollei']),
           'fecha_ingreso'=>$this->faker->date('Y-m-d', 'now'),
           'descripcion'=>$this->faker->paragraph,
        ];
    }
}
