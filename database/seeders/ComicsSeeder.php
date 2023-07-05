<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('seeder.comics');

        foreach ($comics as $comicData) {
            $comic = new Comic();
            $comic->title = $comicData['title'];
            $comic->description = $comicData['description'];
            $comic->thumb = $comicData['thumb'];
            $comic->price =  $comicData['price'];
            $comic->series = $comicData['series'];
            $comic->sale_date = $comicData['sale_date'];
            $comic->type = $comicData['type'];
            $comic->artists = implode(', ', $comicData['artists']);
            $comic->writers = implode(', ', $comicData['writers']);
            $comic->save();
        }
    }
}
