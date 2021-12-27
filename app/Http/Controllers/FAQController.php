<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class FAQController extends Controller
{
    public function view(){
        $faqs = FAQ::with('categories')->get();

        return view('faq.view', compact('faqs'));
    }

    public function createView(){
        return view('faq.create');
    }

    public function create(Request $request)
    {
        $faq = new Faq;

        $validation = Validator::make($request->all(),
        array('question'=> 'required|string|min:3|max:25', 'answer'=>'required|string|min:3|max:25'));
        if ($validation->passes()){
            $faq->question = $request->question;
            $faq->answer =  $request->answer;
        }else{
            return redirect()->back()->withErrors(['error' => 'Your answer/question needs to be atleast 3 charakters and it needs to be max 25 charakters!']);
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
