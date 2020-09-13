<?php

namespace App\Http\Controllers;

use App\APropo;
use App\Carousel;
use App\Front;
use App\Media;
use App\MediaObject;
use App\MessageBienvenu;
use App\Produit;
use App\Service;
use App\Icon;
use App\Contact;
use App\Coordonee;
use App\ServiceIntro;
use App\Technologie;
use App\CarouselCitation;
use App\MessageContact;
use App\Models\Blog\Article;
use App\Partenaire;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function home()
    {
        $apropos = APropo::all()->first();
        $produits = Produit::all();
        $services = Service::all();
       // $messagebienvenu  = MessageBienvenu::all()->first();
        $carousel = Carousel::all();
        $contact = Contact::all()->first();

        $partenaires = Partenaire::all();
        $articles = Article::orderBy('id','desc')->paginate(3);

        defaultLog(Front::class);
        return view('home',
                    compact(
                        'apropos',
                        'produits',
                        'services',
                        'carousel',
                       // 'messagebienvenu',
                        'contact',
                        'partenaires',
                        'articles'
                    ));
    }


    public function apropos()
    {
        $apropos = APropo::all()->first();
        $services = Service::all();
        $partenaires = Partenaire::all();
        $articles = Article::orderBy('id','desc')->get();

        defaultLog(Front::class);

        return view('about',
            compact('apropos', 'services',
            'partenaires',
            'articles'));
    }


    public function service()
    {

        $produits = Produit::all();
        $services = Service::all();
        $contact = Contact::all()->first();
        $coordonee = Coordonee::all()->first();
        $icons = Icon::orderBy('created_at','desc')->get();
        $citation = CarouselCitation::all();
        $partenaires = Partenaire::all();
        $articles = Article::orderBy('id','desc')->get();

        defaultLog(Front::class);

        return view('service',
            compact('produits', 'services',
            'icons',
            'contact',
            'coordonee',
            'citation',
            'partenaires',
            'articles'));
    }


    public function produit()
    {

        $produits = Produit::all();
        $contact = Contact::all()->first();
        $coordonee = Coordonee::all()->first();
        $icons = Icon::orderBy('created_at','desc')->get();
        $citation = CarouselCitation::all();


        defaultLog(Front::class);

        return view('produit',
            compact('produits',
            'icons',
            'contact',
            'coordonee',
            'citation'));
    }



    public function serviceFindDetail($slug)
    {
        $item = Service::where('slug',$slug)->first();
        $partenaires = Partenaire::all();
        $articles = Article::orderBy('id','desc')->get();

        defaultLog(Front::class);

        return view('service_detail',compact(
            'item',
            'partenaires',
            'articles'
        ));
    }


    public function contact()
    {
        $contact = Contact::all()->first();
        $partenaires = Partenaire::all();
        $articles = Article::orderBy('id','desc')->get();

        defaultLog(Front::class);

        return view('contact',compact('contact','partenaires','articles'));
    }

    public function messageFromUser(Request $request)
    {

      $data = [
        'nom' => $request->nom,
        'email' => $request->email,
        'sujet' => $request->sujet,
        'message' => $request->message
      ];

      if (MessageContact::create($data)) {
        storeLog(MessageContact::class);
        session()->flash('succes','Votre message a été envoyé avec succès, veuillez consulter votre boite email pour une eventuelle reponse');
        return redirect('contacts');

      }
      storeFailureLog(MessageContact::class);
      session()->flash('error','Erreur, veuillez recommencer svp !');
      return redirect('contacts');

    }
}
