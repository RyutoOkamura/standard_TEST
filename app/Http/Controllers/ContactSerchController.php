<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactSerchController extends Controller
{
    public function serch()
    {
        $contacts = Contact::all();
        return view('serch.serch')->with('contacts', $contacts);
    }

    public function result(Request $request)
    {
        $keyword_fullname = $request->fullname;
        $keyword_gender = $request->gender;
        $keyword_email = $request->email;
        
        $action = $request->get('action', 'return');

        if ($action === 'submit') {
            // 性別で検索
            if (empty($keyword_fullname) && !empty($keyword_gender) && empty($keyword_email)  && empty($keyword_created_at)) {

                $query = Contact::query();
                $query->where('gender', 'like', '%' . $keyword_gender . '%')->get();

                $contacts = $query->get();

                return view('serch.serch')->with('contacts', $contacts);
            }


            // メールアドレス・性別で検索
            elseif (empty($keyword_fullname) && !empty($keyword_gender) && !empty($keyword_email)) {

                $query = Contact::query();
                $query->where('fullname', 'like', '%' . $keyword_email . '%')->where('gender', 'like', '%' . $keyword_gender . '%')->get();

                $contacts = $query->get();

                return view('serch.serch')->with('contacts', $contacts);
            }

            // 名前・性別で検索
            elseif (!empty($keyword_fullname)&& !empty($keyword_gender) && empty($keyword_email)) {

                $query = Contact::query();
                $query->where('fullname', 'like', '%' . $keyword_fullname . '%')->where('gender', 'like', '%' . $keyword_gender . '%')->get();

                $contacts = $query->get();

                return view('serch.serch')->with('contacts', $contacts);
            }

            // 名前・性別・メールアドレスで検索
            elseif (!empty($keyword_fullname) && !empty($keyword_gender) && !empty($keyword_email)) {

                $query = Contact::query();
                $query->where('fullname', 'like', '%' . $keyword_fullname . '%')->where('gender', 'like', '%' . $keyword_gender . '%')->where('email', 'like', '%' . $keyword_email . '%')->get();

                $contacts = $query->get();

                return view('serch.serch')->with('contacts', $contacts);
            }
            
        } else {
            return redirect('/serch');
        }
    }
}
