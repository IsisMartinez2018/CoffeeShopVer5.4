<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'americano',
            'slug' => 'americano',
            'details' => 'simple, americano, pure blunt flavor',
            'price' => 170,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
         Product::create([
            'name' => 'capuchino',
            'slug' => 'capuchino',
            'details' => 'Milk foam, steamed milk and espresso',
            'price' => 300,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
         Product::create([
            'name' => 'flat white',
            'slug' => 'flat white',
            'details' => 'Steamed milk and espresso',
            'price' => 350,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
         Product::create([
            'name' => 'latte macchiato',
            'slug' => 'latte macchiato',
            'details' => 'Milk foam, espresso and steamed milk with the gradient we love',
            'price' => 360,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
         Product::create([
            'name' => 'mocaccino',
            'slug' => 'mocaccino',
            'details' => 'Chocolate in coffee? We have it. Steamed milk, hot chocolate and espresso',
            'price' => 450,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
         Product::create([
            'name' => 'expresso',
            'slug' => 'expresso',
            'details' => 'Just espresso, with the right foam.',
            'price' => 290,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
         Product::create([
            'name' => 'ice coffee',
            'slug' => 'ice coffee',
            'details' => 'On the rocks without the alcohol? And creamy.',
            'price' => 680,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);

        Product::create([
            'name' => 'frappe',
            'slug' => 'frappe',
            'details' => 'You like that cold feeling, with the cream burning your throat with ice.',
            'price' => 780,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);

        Product::create([
            'name' => 'irish',
            'slug' => 'irish',
            'details' => 'Whats better than alcohol or coffee? Joining them together',
            'price' => 1100,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);

        Product::create([
            'name' => 'affogato',
            'slug' => 'affogato',
            'details' => 'The ice cream melts with the hot coffee pouring.',
            'price' => 1120,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);

        Product::create([
            'name' => 'arabica',
            'slug' => 'arabica',
            'details' => 'Arabica coffee beans, with the most quality',
            'price' => 2000,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);

        Product::create([
            'name' => 'robusta',
            'slug' => 'robusta',
            'details' => 'Robusta coffee beans, with the most quality',
            'price' => 2000,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);

        Product::create([
            'name' => 'canned',
            'slug' => 'canned',
            'details' => 'Coffee, but canned. You decide whether hot or cold',
            'price' => 340,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);

        Product::create([
            'name' => 'capsule',
            'slug' => 'capsule',
            'details' => 'On the go? not so much, use a coffee machine',
            'price' => 200,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);

        Product::create([
            'name' => 'sachets',
            'slug' => 'sachets',
            'details' => 'Just what we need when you want something fast',
            'price' => 100,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);

        Product::create([
            'name' => 'instant',
            'slug' => 'instant',
            'details' => 'Instant simple coffee',
            'price' => 1300,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
    }
}
