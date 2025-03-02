<?php

namespace Database\Seeders;

use App\Models\Product;    // Movie
use App\Models\Category;   // Genre
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $action = Category::where('name', 'Action')->first();
        $drama  = Category::where('name', 'Drama')->first();
        $comedy = Category::where('name', 'Comedy')->first();
        $scifi  = Category::where('name', 'Sci-Fi')->first();

        Product::create([
            'name'        => 'The Dark Knight',
            'description' => 'Batman faces the Joker in Gotham City.',
            'price'       => 499,
            'image_url'   => 'https://vkplay.ru/hotbox/content_files/news/2020/05/26/73edf9c464144d6c9446861d6ab19cb0.jpg',
            'category_id' => $action->id,
        ]);

        Product::create([
            'name'        => 'Mad Max: Fury Road',
            'description' => 'Post-apocalyptic action in the desert.',
            'price'       => 399,
            'image_url'   => 'https://avatars.mds.yandex.net/i?id=6168548f06007f2829e589443676d18ee6e955c5-5302022-images-thumbs&n=13',
            'category_id' => $action->id,
        ]);

        Product::create([
            'name'        => 'Fight Club',
            'description' => 'An insomniac office worker and a strange soap salesman.',
            'price'       => 299,
            'image_url'   => 'https://avatars.mds.yandex.net/i?id=c426085a7673ec72bd52a9fa1a9cf2d6a08212027913d44a-11269471-images-thumbs&n=13',
            'category_id' => $drama->id,
        ]);

        Product::create([
            'name'        => 'The Shawshank Redemption',
            'description' => 'Two imprisoned men bond over years, finding redemption.',
            'price'       => 250,
            'image_url'   => 'https://avatars.mds.yandex.net/i?id=d8ea3503765feaf2343c9d0fc3f99c52ee5d8ca2-8342740-images-thumbs&n=13',
            'category_id' => $drama->id,
        ]);

        Product::create([
            'name'        => 'The Hangover',
            'description' => 'Three friends lose the groom at a bachelor party in Las Vegas.',
            'price'       => 350,
            'image_url'   => 'https://avatars.mds.yandex.net/i?id=45ee44255b522ee8b44e2065e108f5c3939798cc-5222119-images-thumbs&n=13',
            'category_id' => $comedy->id,
        ]);

        Product::create([
            'name'        => 'Inception',
            'description' => 'A mind-bending heist inside dream worlds.',
            'price'       => 599,
            'image_url'   => 'https://avatars.mds.yandex.net/i?id=68b460170c365a093258895b44427d8280f90642-3311063-images-thumbs&n=13',
            'category_id' => $scifi->id,
        ]);

        Product::create([
            'name'        => 'Interstellar',
            'description' => 'Astronauts travel through a wormhole in search of a new home.',
            'price'       => 599,
            'image_url'   => 'https://avatars.mds.yandex.net/i?id=3c7af7edd3611a114d8f27b8e30ffd8df9e27b04-4146377-images-thumbs&n=13',
            'category_id' => $scifi->id,
        ]);
    }
}
