<?php

namespace App\Http\Controllers;

use App\City;
use App\Contact;
use App\Http\Requests\CreateValidation;
use App\Http\Requests\EditValidation;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index(Request $request)
    {
        $query = Contact::whereNotNull('mail')->with(['city','city.country']);
        if ($request->filled('search')) {
            $query->where(function($query) use ($request) {
                foreach (['name', 'phone', 'website', 'mail'] as $colonne) {
                    $query->orWhere($colonne, 'like', '%'.$request->get('search').'%');
                }
            });
        }
        $contacts = $query->orderBy('name')->paginate(15);
        return view('index', compact('contacts'));

    }
    public function create()
    {
        $cities = City::all();
        $contact = new Contact();

        return view('editContact', compact('cities' , 'contact'));

    }

    public function postCreate(CreateValidation $request)
    {
        $contact = Contact::create($request->all());
        request()->session()->flash('success', 'L\' enregistrement a bien été créé');
        return redirect()->route('contact.edit' , $contact->id);
    }

    public function edit($id)
    {
        $cities = City::all();
        $contact = Contact::where('id', $id)->firstOrFail();
        return view('editContact' , compact('contact', 'cities'));
    }

    public function putEdit(EditValidation $request, $id)
    {
        $contact = Contact::where('id', $id)->firstOrFail();
        $contact->fill($request->all())->save();

        request()->session()->flash('success', 'L\' enregistrement a bien été modifié');
        return redirect()->route('contact.edit' , $contact->id);
    }

    public function delete($id)
    {

        Contact::destroy($id);
        request()->session()->flash('warning', 'L\' enregistrement a bien été supprimé');
        return redirect('contact');
    }
    public function test()
    {
        $contact= \App\Contact::all() ;
        return compact('contact');
    }


}
