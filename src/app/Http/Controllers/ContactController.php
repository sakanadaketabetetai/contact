<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        return view('index');
    }

    public function confirm(Request $request){
        $contact = $request->only([
            'first_name','last_name','gender','email',
            'telNumber_1','telNumber_2','telNumber_3',
            'address','building','detail','category_id'
        ]);
        $contact['name'] = $contact['first_name']. ' '. $contact['last_name'];
        $contact['tel'] = $contact['telNumber_1']. $contact['telNumber_2']. $contact['telNumber_3'];
        return view('confirm', compact('contact'));
    }

    public function store(Request $request){
        $contact = $request->only([
            'first_name','last_name','gender','email',
            'name','tel','telNumber_1','telNumber_2',
            'telNumber_3','address','building','detail',
            'category_id'
        ]);
        //不要な要素を削除
        unset($contact['name']);
        unset($contact['telNumber_1']);
        unset($contact['telNumber_2']);
        unset($contact['telNumber_3']);

        Contact::create($contact);
        return view('thanks');
    }

}
