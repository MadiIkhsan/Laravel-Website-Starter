<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => 'home',
        'nama' => 'madi akhsan tudoni',
        'NIM' => '19416255201111',
        'kelas' => 'IF19F',
        'image' => 'nasir.jpeg'
    ]);
});

Route::get('/create', function () {
    return view('create', [
        'title' => 'create'
    ]);
});

Route::get('/read', function () {

    $majalah_pertama = [
        [
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'penerbit' => 'Madi Ikhsan Naashir',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore alias esse et neque voluptatum tenetur laborum itaque ducimus facilis aspernatur deleniti consequatur reprehenderit ut, omnis, eveniet non ipsam vero aperiam, corrupti dolore magni quis? Accusantium, officia vel nisi dolorum amet sequi sunt dolorem alias vitae dolores, optio dolor consequatur quos atque! Fugit officiis nesciunt dolorum voluptatem porro harum voluptas accusantium.'
        ],
        [
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'penerbit' => 'Yusuf Khoiruddin',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid excepturi neque tenetur facere ab itaque quam culpa recusandae. Voluptate illo qui, sit vitae aspernatur, porro deserunt natus ad illum inventore quidem sed dolore delectus explicabo consequuntur? Alias reprehenderit, ex facilis nihil sit debitis amet tempora. Ex maxime eos asperiores maiores similique distinctio nisi quas quam pariatur voluptatem nostrum, animi labore qui incidunt provident aliquid unde recusandae doloribus, velit eaque, possimus libero itaque enim! Suscipit deserunt laudantium sapiente inventore quod porro voluptatum laboriosam magni beatae blanditiis quisquam voluptates, totam rem vel aut ab ut enim nemo soluta rerum ex. Magni.'
        ],
        [
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'penerbit' => 'Imam Khoiruddin',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum accusantium temporibus possimus, maiores non ipsa aliquid dolore quaerat animi consectetur enim culpa eum tempora illum accusamus quod. Nam voluptas nemo vel, magnam aliquam veniam obcaecati dolor animi quasi reiciendis accusantium praesentium officiis labore quisquam, numquam accusamus a dolore delectus! Ut qui voluptate consequuntur, id magnam doloribus vitae nostrum magni rem modi eligendi possimus nihil perferendis vel est ipsum excepturi non quod, quos ducimus commodi amet, culpa sunt minima! Culpa eum ipsum ducimus assumenda, illum dicta, architecto illo eius nulla iure dolorem rerum, quisquam corporis officiis possimus voluptatum. Eveniet excepturi deserunt rerum nisi repudiandae minima consequatur ipsum nobis blanditiis, itaque in officiis quia. Sed id nesciunt numquam, rem nobis quasi ad, aut repellat accusamus, doloremque dolore perferendis sapiente? Ipsa, explicabo minus.'
        ]
    ];

    return view('read', [
        'title' => 'read',
        'posts' => $majalah_pertama
    ]);
});


// halaman single read
Route::get('create/{slug}', function ($slug) {
    return view('post');
});