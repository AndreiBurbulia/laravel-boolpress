<?php
namespace App\Http\Controllers\Admin;

use App\Email;
use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::id() === 1){
            $n_articles = count(Article::all());
            $public_articles = count(Article::where('public', '1')->get());
            $private_articles = count(Article::where('public', '0')->get());
            
            $n_contacts = count(Email::all());
            return view('admin.home', compact('n_articles', 'n_contacts', 'public_articles', 'private_articles'));
        }

        return view('guest.welcome');
    }

    public function contact()
    {
        if(Auth::id() === 1){

            $emails = Email::all();
            return view('admin.contact', compact('emails'));
        }

        return view('guest.welcome');
    }

    function responseSend( Email $email){
        $email->delete();

        return redirect()->route('admin.contact');
    }
}