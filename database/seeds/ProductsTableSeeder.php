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










Product::create([
            'name' => '3 milk',
            'slug' => '3 milk',
            'details' => 'Three types of milk in just one cake. Try it.',
            'price' => 1300,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
Product::create([
            'name' => 'alfajor',
            'slug' => 'alfajor',
            'details' => 'If this is really Argentinian, then they are genius.',
            'price' => 1000,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
Product::create([
            'name' => 'apple pie',
            'slug' => 'apple pie',
            'details' => 'Best type of pie there exists. Just american.',
            'price' => 1300,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
Product::create([
            'name' => 'bags',
            'slug' => 'bags',
            'details' => 'Coffee in little bags? Incredible.',
            'price' => 1150,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
Product::create([
            'name' => 'banana bread',
            'slug' => 'banana bread',
            'details' => 'As the name tells, just banana bread.',
            'price' => 1300,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);

Product::create([
            'name' => 'birthday cake cupcake',
            'slug' => 'birthday cake cupcake',
            'details' => 'For YOU beloved one',
            'price' => 700,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
Product::create([
            'name' => 'blueberry muffin',
            'slug' => 'blueberry muffin',
            'details' => 'Not as sweet as a cupcake, just squishy',
            'price' => 720,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
Product::create([
            'name' => 'brazil beans',
            'slug' => 'brazil beans',
            'details' => 'Importation material, extra quality',
            'price' => 1300,
            'description' => '250gr. Made in brazil. Pure. No added ingredients nor sugar. From imported and local ingredients.',
        ]);
Product::create([
            'name' => 'brownie',
            'slug' => 'brownie',
            'details' => 'Name someone who doesnt love brownies. Exactly, no one',
            'price' => 770,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
Product::create([
            'name' => 'butter cookies',
            'slug' => 'butter cookies',
            'details' => 'The best type of cookie there is. They are also called danish. Woah.',
            'price' => 1300,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
Product::create([
            'name' => 'carrot cake',
            'slug' => 'carrot cake',
            'details' => 'Have a slice of squishyness',
            'price' => 1300,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
Product::create([
            'name' => 'cheesecake',
            'slug' => 'cheesecake',
            'details' => 'If cheese wasnt good enough already, there it is, in a cake',
            'price' => 1300,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
Product::create([
            'name' => 'chicken sandwich',
            'slug' => 'chicken sandwich',
            'details' => 'I swear this isnt subways',
            'price' => 780,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
Product::create([
            'name' => 'chocolate icecream',
            'slug' => 'chocolate icecream',
            'details' => 'The right pal to a coffee break',
            'price' => 1300,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
Product::create([
            'name' => 'chocolate chips',
            'slug' => 'chocolate chips',
            'details' => 'The right pal to a coffee break, in another flavor',
            'price' => 1300,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
Product::create([
            'name' => 'chocolate cupcake',
            'slug' => 'chocolate cupcake',
            'details' => 'One cupcake is not enough',
            'price' => 590,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
Product::create([
            'name' => 'chocolate syrup',
            'slug' => 'chocolate syrup',
            'details' => 'Inside the coffee? Above it? You decide',
            'price' => 1300,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
Product::create([
            'name' => 'coconut cake',
            'slug' => 'coconut cake',
            'details' => 'Seeing this makes you droll',
            'price' => 1300,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
Product::create([
            'name' => 'colombian beans',
            'slug' => 'colombian beans',
            'details' => 'People say, best beans in the world',
            'price' => 2100,
            'description' => '250gr. Made in colombia. Pure. No added ingredients nor sugar. From imported and local ingredients.',
        ]);
Product::create([
            'name' => 'cookies',
            'slug' => 'cookies',
            'details' => 'Have one ...or two. Or three of these while coffeeing',
            'price' => 1300,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
Product::create([
            'name' => 'cream puff',
            'slug' => 'cream puff',
            'details' => 'Fancy stuff.',
            'price' => 1300,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
Product::create([
            'name' => 'croissant',
            'slug' => 'croissant',
            'details' => 'Perfect as your breakfast',
            'price' => 1300,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
Product::create([
            'name' => 'donuts',
            'slug' => 'donuts',
            'details' => 'Endulge',
            'price' => 1300,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
Product::create([
            'name' => 'double chocolate',
            'slug' => 'double chocolate',
            'details' => 'How about it with a mochaccino?',
            'price' => 1300,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
Product::create([
            'name' => 'empanadilla',
            'slug' => 'empanadilla',
            'details' => 'Bites, and bites',
            'price' => 1300,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
Product::create([
            'name' => 'macarons',
            'slug' => 'macarons',
            'details' => 'A classic, fancy threat.',
            'price' => 1300,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
Product::create([
            'name' => 'mint icecream',
            'slug' => 'mint icecream',
            'details' => 'Super refreshing',
            'price' => 1300,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
Product::create([
            'name' => 'palmerita',
            'slug' => 'palmerita',
            'details' => 'Adorably sweet',
            'price' => 1300,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
Product::create([
            'name' => 'pan jamon',
            'slug' => 'pan jamon',
            'details' => 'Got ya covered in christmas',
            'price' => 1300,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
Product::create([
            'name' => 'pistachio icecream',
            'slug' => 'pistachio icecream',
            'details' => 'Salty and sweet',
            'price' => 1300,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
Product::create([
            'name' => 'pumpkin cake',
            'slug' => 'pumpkin cake',
            'details' => 'For Halloween! or just whenever',
            'price' => 1300,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);

Product::create([
            'name' => 'rainbow cupcake',
            'slug' => 'rainbow cupcake',
            'details' => 'A rainbow for the heart. Or your special occasion',
            'price' => 1300,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
Product::create([
            'name' => 'strawberry cake',
            'slug' => 'strawberry cake',
            'details' => 'A classic too',
            'price' => 1300,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
Product::create([
            'name' => 'strawberry donut',
            'slug' => 'strawberry donut',
            'details' => 'Strawberry on everything',
            'price' => 1300,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
Product::create([
            'name' => 'strawberry syrup',
            'slug' => 'strawberry syrup',
            'details' => 'Dont know if this is of your liking in your coffee, but recommend anyways',
            'price' => 1300,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
Product::create([
            'name' => 'turron',
            'slug' => 'turron',
            'details' => 'Wish to have it all christmas long',
            'price' => 1300,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
Product::create([
            'name' => 'vainilla cake',
            'slug' => 'vainila cake',
            'details' => 'When you dont fancy that much amount of sugar',
            'price' => 1300,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
Product::create([
            'name' => 'vainilla cupcake',
            'slug' => 'vainilla cupcake',
            'details' => 'Simple.',
            'price' => 1300,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);











Product::create([
            'name' => 'flan',
            'slug' => 'flan',
            'details' => 'Simple.',
            'price' => 1300,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
Product::create([
            'name' => 'generic bags',
            'slug' => 'generic bags',
            'details' => 'Simple.',
            'price' => 1300,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
Product::create([
            'name' => 'ginger cookies',
            'slug' => 'ginger cookies',
            'details' => 'Simple.',
            'price' => 1300,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
Product::create([
            'name' => 'milkshakes',
            'slug' => 'milkshakes',
            'details' => 'Simple.',
            'price' => 1300,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
Product::create([
            'name' => 'pan dulce',
            'slug' => 'pan dulce',
            'details' => 'Simple.',
            'price' => 1300,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);

Product::create([
            'name' => 'pan dulce chocolate',
            'slug' => 'pan dulce chocolate',
            'details' => 'Simple.',
            'price' => 1300,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
Product::create([
            'name' => 'waffles',
            'slug' => 'waffles',
            'details' => 'Simple.',
            'price' => 1300,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);

Product::create([
            'name' => 'waffles dulces',
            'slug' => 'waffles dulces',
            'details' => 'Simple.',
            'price' => 1300,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);








Product::create([
            'name' => 'cereal bar',
            'slug' => 'cereal bar',
            'details' => 'Mix of different types of nuts and rice cereal.',
            'price' => 1300,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
Product::create([
            'name' => 'ginger butter biscuits',
            'slug' => 'ginger butter biscuits',
            'details' => 'With bakery cream inside.',
            'price' => 1300,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
Product::create([
            'name' => 'maria biscuits',
            'slug' => 'maria biscuits',
            'details' => 'The classical maria biscuits.',
            'price' => 1300,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
Product::create([
            'name' => 'maria biscuits pack',
            'slug' => 'maria biscuits pack',
            'details' => '24 packs. One price',
            'price' => 1300,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
        ]);
























    }
}
