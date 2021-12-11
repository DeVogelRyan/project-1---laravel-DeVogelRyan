<?php

namespace Database\Seeders;

use App\Models\Faq;
use App\Models\Category;
use Illuminate\Database\Seeder;

class addFAQ extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faq = new Faq();
        $faq->question = "How can you protect yourself against hackers?";
        $faq->answer =  "Use long and different password for each site and always check that the website is using https.";
        $faq->save();
        $category = Category::find(2);
        $faq->categories()->attach($category);

        $faq1 = new Faq();
        $faq1->question = "What protection uses this website?";
        $faq1->answer =  "This websites uses hashing to encrypt passwords and we host on a ubuntu server.";
        $faq1->save();
        $category1 = Category::find([1,2]);
        $faq1->categories()->attach($category1);

        $faq2 = new Faq();
        $faq2->question = "What happens to users that send malicious links?";
        $faq2->answer =  "These users will get banned when find out about.";
        $faq2->save();
        $category2 = Category::find(3);
        $faq2->categories()->attach($category2);

    }
}
