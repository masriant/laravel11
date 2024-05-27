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