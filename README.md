# ProcookTest

## Time 45 minuets 

## Description

Create a user-friendly feature for our website that allows users to compare different frying pans
based on various criteria, attached are ten products with key bits of information, helping customers
make an informed purchasing decision.

## Component
- PHP
- MariaDB
- Laravel
- Laravel-Livewire
- Livewire-Powergrid

## Installation

```
git clone https://github.com/pcualmac/testProcook.git
cd testProcook 
composer install
npm install
npm run build
```
## Run

# .env If dump-fryingpan-202402271520.sql is used to create a new datatbase 
```
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3336
DB_DATABASE=fryingpan
DB_USERNAME=***********
DB_PASSWORD=***********
```
```
# Use dump-fryingpan-202402271520.sql to create a new database  
php artisan storage:link     
php artisan migrate 
php artisan db:seed
npm run dev
php artisan serve  
```

## Missing
from request 
    2. Comparison Criteria: 
   - Customers can compare frying pans based on various criteria such as price, size, material, hand wash.

# Planing to implement.
app\Http\Controllers\Comparison.php will enclude a criterial list{price, size, material, hand wash} to be used in resources\views\comparison.blade.php
exampl 
if {price, size}
```
<ul class="list-group list-group-flush">
    <li class="list-group-item">{{$card->colour}}</li>
    <li class="list-group-item">{{$card->guarantee_period}}</li>
</ul>

```
will be replece with 

```
<ul class="list-group list-group-flush">
    <li class="list-group-item">{{$card->price}}</li>
    <li class="list-group-item">{{$card->size}}</li>
</ul>

