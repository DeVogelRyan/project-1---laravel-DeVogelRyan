<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use App\Models\Category;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    public function view(){
        return view('faq.view');
    }

    public function createView(){
        return view('faq.create');
    }

    public function create(Request $request)
    {

        $product = new FAQ;
        if((strlen($request->question) || strlen($request->answer)) > 0 ){
            $product->question = $request->question;
            $product->answer =  $request->answer;
        }else{
            return redirect()->back()->withErrors(['error' => 'You have to fill something in!']);
        }

        $product->save();
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

        $product->categories()->attach($category);

        return redirect()->back()->withSuccess('FAQ item succesfully created!');
    }
}
