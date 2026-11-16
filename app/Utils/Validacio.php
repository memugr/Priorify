<?php
namespace App\Utils;
use Illuminate\Database\QueryException;

class Validacio

{
    public static function missatgeError(QueryException $e): string
    {
        if (! empty($e->errorInfo[1])) {
            $missatge = match ($e->errorInfo[1]) {
                2601, 2627 => 'Registre duplicat',
                547 => 'Registre amb elements relacionats o restricció violada',
                515 => 'No es pot inserir un valor nul en un camp obligatori',
                8152 => 'El text o dada és massa llarga per al camp',
                1205 => 'Bloqueig de la base de dades (deadlock), torna-ho a intentar',
                1222 => 'S\'ha esgotat el temps d\'espera de bloqueig',
                207 => 'Nom de columna no vàlid',
                208 => 'Taula o objecte no trobat a la base de dades',
                8114, 8115 => 'Error de conversió de dades o valor fora de rang',
                229, 230 => 'Permís denegat per realitzar aquesta operació',

                default => $e->errorInfo [1] . "\n" . ($e->errorInfo[2] ?? $e->getMessage()),
        };
    
    } else {
        $missatge = match ($e->getCode()) {
            1044, '28000' => 'Usuari i/o contrasenya incorrectes',
            1049, '42000' => 'Base de dades desconeguda o inaccesible',
            2002, 10061, 'HYT00', '08001' => 'No es pot establir connexió amb el servidor',
            default => $e->getCode() . "\n" . $e->getMessage(),
        };
    }
    return $missatge;
}
}


