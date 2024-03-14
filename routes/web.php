<?php

use App\Models\Info;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Section;
use App\Models\Category;
use App\Models\Marketer;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
// use Illuminate\Http\Client\Request;
use App\Http\Controllers\Sections;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [Sections::class, 'index']);
Route::get('/portfolio', [Sections::class, 'get_products']);
Route::get('/contact', [Sections::class, 'contact']);
Route::post('/contact', [Sections::class, 'new_contact']);
Route::get('/marketing', [Sections::class, 'marketing']);


Route::get('/dashboard', function () {

    $section = new Section;
    $product = new Product;
    $contact = new Contact;
    $num_sections = ($section->get_total_sections()->stats);
    $num_products = ($product->get_total_products()->stats);
    $num_contacts = ($contact->number_contacts()->stats);
    $latest_contacts = $contact->latest_contacts();
    $latest_products = $product->latest_products();
    return view(
        'dashboard',
        [
            'num_sections' => $num_sections,
            'num_products' => $num_products,
            'num_contacts' => $num_contacts,
            'latest_contacts' => $latest_contacts,
            'latest_products' => $latest_products
        ]
    );
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/dashboard', function () {

    $section = new Section;
    $product = new Product;
    $contact = new Contact;
    $num_sections = ($section->get_total_sections()->stats);
    $num_products = ($product->get_total_products()->stats);
    $num_contacts = ($contact->number_contacts()->stats);
    $latest_contacts = $contact->latest_contacts();
    $latest_products = $product->latest_products();
    return view(
        'dashboard',
        [
            'num_sections' => $num_sections,
            'num_products' => $num_products,
            'num_contacts' => $num_contacts,
            'latest_contacts' => $latest_contacts,
            'latest_products' => $latest_products
        ]
    );
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/marketers', function () {

    $section = new Section;
    $product = new Product;
    $contact = new Contact;
    $marketers = new Marketer;
    $num_sections = ($section->get_total_sections()->stats);
    $num_products = ($product->get_total_products()->stats);
    $num_contacts = ($contact->number_contacts()->stats);
    return view(
        'marketers',
        [
            'num_sections' => $num_sections,
            'num_products' => $num_products,
            'num_contacts' => $num_contacts,
            'marketers'    =>$marketers->get_marketers()
        ]
    );
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/contact-info', function () {

    $section = new Section;
    $product = new Product;
    $contact = new Contact;
    $marketers = new Marketer;
    $num_sections = ($section->get_total_sections()->stats);
    $num_products = ($product->get_total_products()->stats);
    $num_contacts = ($contact->number_contacts()->stats);
    $info = new Info;

    return view(
        'informations',
        [
            'num_sections' => $num_sections,
            'num_products' => $num_products,
            'num_contacts' => $num_contacts,
            'sections'    =>$info->get_all_info()
        ]
    );
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/information', function (Request $request) {

    $section = new Section;
    $product = new Product;
    $contact = new Contact;
    $marketers = new Marketer;
    $num_sections = ($section->get_total_sections()->stats);
    $num_products = ($product->get_total_products()->stats);
    $num_contacts = ($contact->number_contacts()->stats);
    $info = new Info;

    return view(
        'information',
        [
            'num_sections' => $num_sections,
            'num_products' => $num_products,
            'num_contacts' => $num_contacts,
            'section'    =>$info::where('id', $request->id)->first()
        ]
    );
})->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/information', function (Request $request) {

    $section = new Section;
    $product = new Product;
    $contact = new Contact;
    $marketers = new Marketer;
    $num_sections = ($section->get_total_sections()->stats);
    $num_products = ($product->get_total_products()->stats);
    $num_contacts = ($contact->number_contacts()->stats);
    $info = new Info;
    $info2 =$info::where('id', $request->id)->first();
    $info2->value = $request->value;
    $info2->update();
    return view(
        'information',
        [
            'num_sections' => $num_sections,
            'num_products' => $num_products,
            'num_contacts' => $num_contacts,
            'section'    => $info2
        ]
    );
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/new-marketer', function () {

    $section = new Section;
    $product = new Product;
    $contact = new Contact;
    $marketers = new Marketer;
    $num_sections = ($section->get_total_sections()->stats);
    $num_products = ($product->get_total_products()->stats);
    $num_contacts = ($contact->number_contacts()->stats);
    return view(
        'newmarketer',
        [
            'num_sections' => $num_sections,
            'num_products' => $num_products,
            'num_contacts' => $num_contacts,
            'marketers'    =>$marketers->get_marketers()
        ]
    );
})->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/new-marketer', function (Request $request) {

    $section = new Section;
    $product = new Product;
    $contact = new Contact;
    $marketers = new Marketer;
    $num_sections = ($section->get_total_sections()->stats);
    $num_products = ($product->get_total_products()->stats);
    $num_contacts = ($contact->number_contacts()->stats);
    $marketers->for = $request->for;
    $marketers->name = $request->name;
    $marketers->email = $request->email;
    $marketers->phone = $request->phone;
    $marketers->loc = $request->location;
    $marketers->save();
    return view(
        'newmarketer',
        [
            'num_sections' => $num_sections,
            'num_products' => $num_products,
            'num_contacts' => $num_contacts,
            'marketers'    =>$marketers->get_marketers()
        ]
    );
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/marketer', function (Request $request) {

    $section = new Section;
    $product = new Product;
    $contact = new Contact;
    $marketers = new Marketer;
    $num_sections = ($section->get_total_sections()->stats);
    $num_products = ($product->get_total_products()->stats);
    $num_contacts = ($contact->number_contacts()->stats);
    $marketer = $marketers::where('id', $request->id)->first();

    return view(
        'marketer',
        [
            'num_sections' => $num_sections,
            'num_products' => $num_products,
            'num_contacts' => $num_contacts,
            'section'    =>$marketer
        ]
    );
})->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/marketer', function (Request $request) {

    $section = new Section;
    $product = new Product;
    $contact = new Contact;
    $marketers = new Marketer;
    $num_sections = ($section->get_total_sections()->stats);
    $num_products = ($product->get_total_products()->stats);
    $num_contacts = ($contact->number_contacts()->stats);
    $marketer = $marketers::where('id', $request->id)->first();


    $marketer->for = $request->for;
    $marketer->name = $request->name;
    $marketer->email = $request->email;
    $marketer->phone = $request->phone;
    $marketer->loc = $request->location;
    $marketer->update();
    return view(
        'marketer',
        [
            'num_sections' => $num_sections,
            'num_products' => $num_products,
            'num_contacts' => $num_contacts,
            'section'    =>$marketer
        ]
    );
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/sections', function (Request $request) {

    $section = new Section;
    $product = new Product;
    $contact = new Contact;
    $num_sections = ($section->get_total_sections()->stats);
    $num_products = ($product->get_total_products()->stats);
    $num_contacts = ($contact->number_contacts()->stats);

    $sections = $section->get_all_sections();


    return view(
        'sections',
        [
            'num_sections' => $num_sections,
            'num_products' => $num_products,
            'num_contacts' => $num_contacts,
            'sections' => $sections
        ]
    );
})->middleware(['auth', 'verified']);


Route::get('/products', function (Request $request) {

    $section = new Section;
    $product = new Product;
    $contact = new Contact;
    $num_sections = ($section->get_total_sections()->stats);
    $num_products = ($product->get_total_products()->stats);
    $num_contacts = ($contact->number_contacts()->stats);

    $sections = $product->get_products();


    return view(
        'products',
        [
            'num_sections' => $num_sections,
            'num_products' => $num_products,
            'num_contacts' => $num_contacts,
            'sections' => $sections
        ]
    );
})->middleware(['auth', 'verified']);

Route::get('/categories', function (Request $request) {

    $section = new Section;
    $product = new Product;
    $contact = new Contact;
    $category = new Category;
    $num_sections = ($section->get_total_sections()->stats);
    $num_products = ($product->get_total_products()->stats);
    $num_contacts = ($contact->number_contacts()->stats);

    $sections = $category->get();

    return view(
        'categories',
        [
            'num_sections' => $num_sections,
            'num_products' => $num_products,
            'num_contacts' => $num_contacts,
            'sections' => $sections
        ]
    );
})->middleware(['auth', 'verified']);

Route::get('/product', function (Request $request) {

    $section = new Section;
    $product = new Product;
    $contact = new Contact;
    $num_sections = ($section->get_total_sections()->stats);
    $num_products = ($product->get_total_products()->stats);
    $num_contacts = ($contact->number_contacts()->stats);

    $sections = $product->where('id', $request->id)->first();

    return view(
        'product',
        [
            'num_sections' => $num_sections,
            'num_products' => $num_products,
            'num_contacts' => $num_contacts,
            'section' => $sections
        ]
    );
})->middleware(['auth', 'verified']);
Route::post('/product', function (Request $request) {

    $section = new Section;
    $product = new Product;
    $contact = new Contact;
    $num_sections = ($section->get_total_sections()->stats);
    $num_products = ($product->get_total_products()->stats);
    $num_contacts = ($contact->number_contacts()->stats);

    $sections = $product::where('id', $request->id)->first();

    $photo = $request->file('image');
    if ($photo) {

        $path = $photo->storeAs('uploads', $photo->getClientOriginalName(), 'public'); // Assuming 'uploads' is the desired directory within 'public'
        $sections->img = $photo->getClientOriginalName();
    }

    $sections->header = $request->title;
    $sections->body = $request->body;
    $sections->link = $request->link;
    $sections->price = $request->price;
    $sections->save();
    return view(
        'product',
        [
            'num_sections' => $num_sections,
            'num_products' => $num_products,
            'num_contacts' => $num_contacts,
            'section' => $sections
        ]
    );
})->middleware(['auth', 'verified']);

Route::get('/category', function (Request $request) {

    $section = new Section;
    $product = new Product;
    $contact = new Category;
    $num_sections = ($section->get_total_sections()->stats);
    $num_products = ($product->get_total_products()->stats);

    $sections = $contact::where('id', $request->id)->first();


    return view(
        'category',
        [
            'num_sections' => $num_sections,
            'num_products' => $num_products,
            'section' => $sections
        ]
    );
})->middleware(['auth', 'verified']);

Route::post('/category', function (Request $request) {

    $section = new Section;
    $product = new Product;
    $contact = new Category;
    $num_sections = ($section->get_total_sections()->stats);
    $num_products = ($product->get_total_products()->stats);

    $sections = $contact::where('id', $request->id)->first();
    $sections->name = $request->name;
    $sections->cat_id = $request->cat_id;

    $sections->save();
    return view(
        'category',
        [
            'num_sections' => $num_sections,
            'num_products' => $num_products,
            'section' => $sections
        ]
    );
})->middleware(['auth', 'verified']);

Route::get('/section', function (Request $request) {

    $section = new Section;
    $product = new Product;
    $contact = new Contact;
    $num_sections = ($section->get_total_sections()->stats);
    $num_products = ($product->get_total_products()->stats);
    $num_contacts = ($contact->number_contacts()->stats);

    $section = $section->get_section($request->id);
    return view(
        'section',
        [
            'num_sections' => $num_sections,
            'num_products' => $num_products,
            'num_contacts' => $num_contacts,
            'section' => $section
        ]
    );
})->middleware(['auth', 'verified']);

Route::get('/new-product', function (Request $request) {

    $section = new Section;
    $product = new Product;
    $contact = new Contact;
    $num_sections = ($section->get_total_sections()->stats);
    $num_products = ($product->get_total_products()->stats);
    $num_contacts = ($contact->number_contacts()->stats);

    $section = $section->get_section($request->id);
    return view(
        'newproduct',
        [
            'num_sections' => $num_sections,
            'num_products' => $num_products,
            'num_contacts' => $num_contacts,
            'section' => $section
        ]
    );
})->middleware(['auth', 'verified']);

Route::post('/new-product', function (Request $request) {

    $section = new Section;
    $product = new Product;
    $contact = new Contact;
    $num_sections = ($section->get_total_sections()->stats);
    $num_products = ($product->get_total_products()->stats);
    $num_contacts = ($contact->number_contacts()->stats);

    $section = $section->get_section($request->id);
    $photo = $request->file('image');
    $path = $photo->storeAs('uploads', $photo->getClientOriginalName(), 'public'); // Assuming 'uploads' is the desired directory within 'public'

    $product->header = $request->title;
    $product->body = $request->body;
    $product->link = $request->link;
    $product->img = $photo->getClientOriginalName();
    $product->price = $request->price;
    $product->save();
    foreach (explode(',', $request->cats) as $cat) {
        $product_cat = new ProductCategory;
        $product_cat->product_id = $product->id;
        $product_cat->category_id = $cat;
        $product_cat->save();
    }
    return view(
        'newproduct',
        [
            'num_sections' => $num_sections,
            'num_products' => $num_products,
            'num_contacts' => $num_contacts,
            'section' => $section
        ]
    );
})->middleware(['auth', 'verified']);

Route::post('/section', function (Request $request) {

    $section = new Section;
    $product = new Product;
    $contact = new Contact;
    $num_sections = ($section->get_total_sections()->stats);
    $num_products = ($product->get_total_products()->stats);
    $num_contacts = ($contact->number_contacts()->stats);

    $section = $section->get_section($request->id);

    $section->order = $request->order;
    $section->placeholders = implode(',', $request->placeholders);
    $section->page = $request->page;
    $section->save();
    return view(
        'section',
        [
            'num_sections' => $num_sections,
            'num_products' => $num_products,
            'num_contacts' => $num_contacts,
            'section' => $section
        ]
    );
})->middleware(['auth', 'verified']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
