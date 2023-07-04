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
            $comic->description = substr($comicData['description'], 0, 255); // Truncate the description to 255 characters
            $comic->thumb = substr($comicData['thumb'], 0, 255); // Truncate the thumb value to 255 characters
            $comic->price =  $comicData['price'];
            $comic->series = $comicData['series'];
            $comic->sale_date = $comicData['sale_date'];
            $comic->type = $comicData['type'];
            $comic->artists = implode(', ', $comicData['artists']); // Convert array to string
            $comic->writers = implode(', ', $comicData['writers']); // Convert array to string
            $comic->save();
        }
    }
}
