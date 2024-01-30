<?php

namespace Database\Seeders;

use App\Models\OggettoPortafoglio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OggettoPortafoglioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $items= array associativo da riempire con oggetti(di tipo OggettoPortafoglio) o da collegare a config con array associativo dentro
        $items = [[], []];

        foreach ($items as $item) {
            $nuovo_oggetto = new OggettoPortafoglio();
            $nuovo_oggetto->title = $item["title"];
            $nuovo_oggetto->description = $item["description"];
            $nuovo_oggetto->thumb = $item["thumb"];

            $nuovo_oggetto->save();
        }
    }
}
