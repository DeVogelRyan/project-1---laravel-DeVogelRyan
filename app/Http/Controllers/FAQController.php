<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FAQController extends Controller
{
    public function view(){
        $faqs = FAQ::with('categories')->get();


        // $faqs = FAQ::with(['categories'=>function($query){
        //     // $query->select('categories.id');
        //     // $query->groupBy('id');
        // }])->get();

        // $faqs = FAQ::with('categories')->get()->groupBy('categories.category_id');

    //    $faqs = FAQ::with(['categories' => function($query){
    //         $query->groupBy('id');
    //     }])->get();


        return view('faq.view', compact('faqs'));
    }

    public function createView(){
        return view('faq.create');
    }

    public function create(Request $request)
    {
        $faq = new Faq;
        if((strlen($request->question) || strlen($request->answer)) > 0 ){
            $faq->question = $request->question;
            $faq->answer =  $request->answer;
        }else{
            return redirect()->back()->withErrors(['error' => 'You have to fill something in!']);
        }

        $faq->save();
        if($request->has('category1') && $request->has('category2')){
            if($request->category1 > 0 && $request->category1 < 4){
                $category = Category::find([$request->category1, $request->category2]);
            }
        }
        else if($request->has('category1')){
            $category = Category::find([$request->category1]);
        }
        else if($request->has('category2')){
            $category = Category::find([$request->category2]);
        }
        else {
            return redirect()->back()->withErrors(['error' => 'Wrong category chosen!']);
        }

        $faq->categories()->attach($category);

        return redirect()->back()->withSuccess('FAQ item succesfully created!');
    }
}
