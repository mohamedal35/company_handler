<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Info;
use App\Models\Product;
use App\Models\Section;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class Sections extends Controller
{
    public function index(Request $request)
    {
        $sections = new Section;
        $info = new Info;
        $sections_in_order = $sections->get_sections_in_order();
        $sections_html = '';
        foreach ($sections_in_order as $value) {
            $placeholders_aray = explode(',', $value['placeholders']);
            foreach ($placeholders_aray as $placeholder) {
                if (strpos($value['template'], '7oda:text') !== false) {
                    $string = preg_replace('/7oda:text/', $placeholder, $value['template'], 1);
                    $value['template'] = $string;
                }
            }
            // print_r($placeholders_aray);
            $sections_html .= ($value['template']);
        }
        return view('index.index', [
            'sections_html' => $sections_html,
            'info' => $info->get_all_info()
        ]);
    }
    public function get_products(Request $request)
    {
        $product = new Product;
        $category = new Category;
        $info = new Info;

        $products = $product->get_products();
        $categories = $category->get_categories();
        return view('portfolio.portfolio', [
            'categories' => $categories,
            'products' => $products,
            'info' => $info->get_all_info()

        ]);
    }
    public function contact(Request $request)
    {
        $product = new Product;
        $category = new Category;
        $products = $product->get_products();
        $categories = $category->get_categories();
        $info = new Info;
        return view('portfolio.contact', [
            'categories' => $categories,
            'products' => $products,
            'info' => $info->get_all_info()

        ]);
    }
    public function new_contact(Request $request)
    {

        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'msg_subject' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'message' => 'required|string',
        ];
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            echo "تأكد من صحة البيانات المدخلة";
        }

        $contact = new Contact;

        $contact->create_contact($request->name, $request->email, $request->phone_number, $request->msg_subject, $request->message);

        return response()->json("success", 200);
    }
}