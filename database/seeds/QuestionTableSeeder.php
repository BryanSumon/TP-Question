<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class QuestionTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('questions')->delete();
        $dateTime = new DateTime('now');
        $dateTime = $dateTime->format('Y-m-d H:i:s');

        DB::table('questions')->insert(
            [
                [
                    'title'         => 'Laravel est-il un Framework js ?',
                    'content'       => 'Laravel est un Framework PHP et non JS',
                    'class_level'   => 'facile',
                    'status'        => 'published',
                    'created_at'    => $dateTime,
                    'updated_at'    => $dateTime,
                ],
                [
                    'title'         => "Qu'est ce que le modèle MVC ?",
                    'content'       => "Le modèle MVC est avant tout une structure de travail permettant le travail collaboratif. Il est composé de modèle, vue et controlleur. Le modèle permet d'intéragir avec la base de donnée. La vue permet d'afficher les données. Le controlleur lui est le ches d'orchestre de notre application.",
                    'class_level'   => 'moyen',
                    'status'        => 'published',
                    'created_at'    => $dateTime,
                    'updated_at'    => $dateTime,
                ],
                [
                    'title'         => 'Quelle moteur de base de données utiliser avec Laravel ?',
                    'content'       => 'Afin de ne pas avoir de conflit lors des relations entre les tables de la base, il fat utilisé innoDB et non Myisam.',
                    'class_level'   => 'difficile',
                    'status'        => 'published',
                    'created_at'    => $dateTime,
                    'updated_at'    => $dateTime,
                ],
                [
                    'title'         => 'Quel language de programmation utilise Laravel ?',
                    'content'       => 'Laravel utilise principalement le PHP comme language de programmation.',
                    'class_level'   => 'facile',
                    'status'        => 'published',
                    'created_at'    => $dateTime,
                    'updated_at'    => $dateTime,
                ],
                [
                    'title'         => "Quel est la commande permettant de regénérer les dépendance entre les fichiers d'un projet Laravel 5 ?",
                    'content'       => "La commande à utiliser est la suivante : composer dumpautoload",
                    'class_level'   => 'moyen',
                    'status'        => 'published',
                    'created_at'    => $dateTime,
                    'updated_at'    => $dateTime,
                ]
            ]
        );
    }

}