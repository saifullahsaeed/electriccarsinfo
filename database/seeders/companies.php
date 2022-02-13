<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class companies extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert data
        DB::table('companies')->insert([
            'name' => 'Honda',
            'description' => 'Honda is a Japanese multinational corporation headquartered in Koto, Minato-ku, Tokyo, Japan.'
        ]);
        DB::table('companies')->insert([
            'name' => 'Toyota',
            'description' => 'Toyota Motor Corporation is a Japanese multinational automotive manufacturer headquartered in Toyota, Aichi, Japan.'
        ]);
        DB::table('companies')->insert([
            'name' => 'Nissan',
            'description' => 'Nissan Motor Company is a Japanese multinational automotive manufacturer headquartered in Yokohama, Kanagawa, Japan.'
        ]);
        DB::table('companies')->insert([
            'name' => 'Mazda',
            'description' => 'Mazda Motor Corporation is a Japanese multinational automobile manufacturer headquartered in Nishi-ku, Yokohama, Japan.'
        ]);
        DB::table('companies')->insert([
            'name' => 'Suzuki',
            'description' => 'Suzuki Motor Corporation is a Japanese multinational automotive manufacturer headquartered in Nishi-ku, Yokohama, Japan.'
        ]);
        DB::table('companies')->insert([
            'name' => 'Kia',
            'description' => 'Kia Motors Corporation is a Japanese multinational automotive manufacturer headquartered in Yokohama, Kanagawa, Japan.'
        ]);
        DB::table('companies')->insert([
            'name' => 'Hyundai',
            'description' => 'Hyundai Motor Company is a Japanese multinational automotive manufacturer headquartered in Yokohama, Kanagawa, Japan.'
        ]);
        DB::table('companies')->insert([
            'name' => 'Ford',
            'description' => 'Ford Motor Company is a Japanese multinational automotive manufacturer headquartered in Dearborn, Michigan, United States.'
        ]);
        DB::table('companies')->insert([
            'name' => 'Chevrolet',
            'description' => 'Chevrolet is a Japanese multinational automotive manufacturer headquartered in Detroit, Michigan, United States.'
        ]);
        DB::table('companies')->insert([
            'name' => 'Volkswagen',
            'description' => 'Volkswagen is a German multinational automotive manufacturer headquartered in Wolfsburg, Lower Saxony, Germany.'
        ]);
        DB::table('companies')->insert([
            'name' => 'Audi',
            'description' => 'Audi is a German automobile manufacturer headquartered in Ingolstadt, Bavaria, Germany.'
        ]);
        DB::table('companies')->insert([
            'name' => 'BMW',
            'description' => 'BMW is a German multinational company that produces automobiles and motorcycles.'
        ]);
        DB::table('companies')->insert([
            'name' => 'Mercedes-Benz',
            'description' => 'Mercedes-Benz is a German global automobile manufacturer and a division of the Daimler AG group.'
        ]);
        DB::table('companies')->insert([
            'name' => 'Porsche',
            'description' => 'Porsche is a German automobile manufacturer headquartered in Stuttgart, Baden-Württemberg, Germany.'
        ]);
        DB::table('companies')->insert([
            'name' => 'Volvo',
            'description' => 'Volvo is a Swedish multinational corporation that produces automobiles and trucks.'
        ]);
        DB::table('companies')->insert([
            'name' => 'Fiat',
            'description' => 'Fiat is a Italian multinational automobile manufacturer headquartered in Bologna, Italy.'
        ]);
        DB::table('companies')->insert([
            'name' => 'Alfa Romeo',
            'description' => 'Alfa Romeo is a German automobile manufacturer headquartered in Maranello, Italy.'
        ]);
        DB::table('companies')->insert([
            'name' => 'Citroen',
            'description' => 'Citroen is a French multinational automobile manufacturer headquartered in Paris, France.'
        ]);
        DB::table('companies')->insert([
            'name' => 'Seat',
            'description' => 'Seat is a Spanish multinational automotive manufacturer headquartered in Valencia, Spain.'
        ]);
        DB::table('companies')->insert([
            'name' => 'Opel',
            'description' => 'Opel is a German multinational automotive manufacturer headquartered in Ingolstadt, Bavaria, Germany.'
        ]);
        DB::table('companies')->insert([
            'name' => 'Land Rover',
            'description' => 'Land Rover is a British multinational automotive manufacturer headquartered in St. Helens, Merseyside, England.'
        ]);
        DB::table('companies')->insert([
            'name' => 'Lexus',
            'description' => 'Lexus is a Japanese multinational automotive manufacturer headquartered in Toyota, Aichi, Japan.'
        ]);
        DB::table('companies')->insert([
            'name' => 'Dodge',
            'description' => 'Dodge is a American multinational corporation that produces automobiles and trucks.'
        ]);
        DB::table('companies')->insert([
            'name' => 'Jeep',
            'description' => 'Jeep is a American multinational corporation that produces automobiles and trucks.'
        ]);
        DB::table('companies')->insert([
            'name' => 'Mitsubishi',
            'description' => 'Mitsubishi is a Japanese multinational automobile manufacturer headquartered in Yokohama, Kanagawa, Japan.'
        ]);
        DB::table('companies')->insert([
            'name' => 'Subaru',
            'description' => 'Subaru is a Japanese multinational automotive manufacturer headquartered in Toyota, Aichi, Japan.'
        ]);
        

    }
}