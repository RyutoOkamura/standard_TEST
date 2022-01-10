<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;
use App\Http\Requests\UserRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view('contacts.contact');
    }

    public function confirm(UserRequest $request)
    {
        $inputs = $request->all();
        return view('contacts.confirm', ['inputs' => $inputs]);
    }

    public function process(Request $request)
    {
        $action = $request->get('action', 'return');
        $inputs = $request->except('action');

        if ($action === 'submit') {

            // DBに値を保存
            $contact = new Contact();
            $contact->fill($inputs);
            $contact->save();

            // メール送信
            // Mail::to($input['email'])->send(new ContactMail('mails.comtact', 'お問い合わせ有難うございます', $input));

            return redirect()->route('complete');
        } else {
            return redirect()->route('contact')->withInput($inputs);
        }
    }

    public function complete()
    {
        return view('contacts.complete');
    }
}
