<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ChidoDesignsContact;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function techSkills()
    {
    
        return view('pages.tech-skills');
    }

    public function workExperience()
    {

        return view('pages.work-experience');
    }

    public function clients()
    {
        return view('pages.clients');
    }

    public function projects()
    {
        return view('pages.projects');
    }

    public function about()
    {

        return view('pages.about');
    }

    public function contact()
    {

        return view('pages.contact');
    }

    public function contactForm(Request $request)
    {
    
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'budget' => 'required',
            'timeline' => 'required',

        ]);

        Mail::to('chidodesigns@gmail.com')->send(new ChidoDesignsContact($request->name, $request->email, $request->subject, $request->budget, $request->timeline ));

        return redirect('/contact-thanks');
    }

    public function contactThanks()
    {
        return view('pages.contact-thanks');
    }

}
