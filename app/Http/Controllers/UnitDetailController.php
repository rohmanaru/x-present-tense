<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class UnitDetailController extends Controller
{
    public function show($name)
    {
        // Mapping unit name to data (e.g., image, description)
        $units = [
            'tennis_lapangan' => [
                'title' => 'Tennis Lapangan',
                'image' => 'https://mediaini.com/wp-content/uploads/2022/02/daftar-lapangan-tenis-di-Bandung-by-Pixabay-640x375.jpg',
                'description' => 'Detail about Finance & Collection...',
                'pic' => 'Ezra',
                'days' => 'Selasa, Jumat',
                'time' => '17:00 WIB - Selesai',
                'image-pic' => 'venue/img/pic_ezra.png' 
            ],
            'basket' => [
                'title' => 'Basket',
                'image' => 'path/to/basket_image.jpg',
                'description' => 'Detail about Basket...'
            ],
            'aom' => [
                'title' => 'AOM',
                'image' => 'path/to/aom_image.jpg',
                'description' => 'Detail about AOM...'
            ],
            'finance_collection' => [
                'title' => 'Finance & Collection',
                'image' => 'https://mediaini.com/wp-content/uploads/2022/02/daftar-lapangan-tenis-di-Bandung-by-Pixabay-640x375.jpg',
                'description' => 'Detail about Finance & Collection...',
                'pic' => 'Ezra',
                'days' => 'Selasa, Jumat',
                'time' => '17:00 WIB - Selesai',
                'image-pic' => 'venue/img/pic_ezra.png' 
            ],
            'daman' => [
                'title' => 'Daman',
                'image' => 'path/to/daman_image.jpg',
                'description' => 'Detail about Daman...'
            ],
            'bges' => [
                'title' => 'BGES',
                'image' => 'path/to/bges_image.jpg',
                'description' => 'Detail about BGES...'
            ],
            'panahan' => [
                'title' => 'Panahan',
                'image' => 'https://cdn.antaranews.com/cache/1200x800/2018/08/902C6C71-D62E-4A33-8584-C9FC88EEB829.jpeg',
                'description' => 'Detail about Panahan...'
            ],
            'mushola' => [
                'title' => 'Mushola',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2bc1uGq77aIlHFaOcKVsoF9qklOvOjZiXEw&s',
                'description' => 'Detail about Mushola...'
            ],
        ];

        // Check if unit exists in the array
        if (array_key_exists($name, $units)) {
            // Pass the relevant unit data to the view
            return view('intern.show', ['unit' => $units[$name]]);
        } else {
            // If the unit doesn't exist, show a 404 page
            abort(404);
        }
    }
}