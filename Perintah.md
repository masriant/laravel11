<!-- Start -->
npm run dev

php artisan
<!-- View - Component -->
php artisan make:component Navbar
{{ request()->is('/') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}
php artisan make:component Header --view
php artisan make:component Layout
php artisan make:component NavLink --view

<!-- Database -->
php artisan migrate
php artisan migrate:fresh
<!-- Buat database -->
php artisan make:migration > create_posts_table

php artisan tinker

<!-- Model -->
php artisan make:model > Post
<!-- Model dan Migrate-->
php artisan make:model Post -m


<!-- Factory -->
php artisan migrate:fresh
php artisan tinker
App\Models\User::factory()->create();
App\Models\User::factory(10)->create();
App\Models\User::factory(5)->unverified()->create();
App\Models\User::factory()->admin()->create();

php artisan make:factory > PostFactory
php artisan tinker
App\Models\Post::factory(200)->create();


php artisan tinker
App\Models\Post::factory(10)->create();

App\Models\Post::factory(100)->recycle(User::factory(5)->create())->create();

$post = App\Models\Post::first()
$post->email

$user = App\Models\User::first()
$user->posts
