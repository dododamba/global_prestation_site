<?php

namespace App\Http\Controllers;

use App\Partenaire;
use Illuminate\Http\Request;

class PartenairesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $partenaires = Partenaire::orderBy('id','desc')->get();

       return view('backEnd.admin.partenaire.index',compact('partenaires'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        createLog(Partenaire::class);
        return view('backEnd.admin.partenaire.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('media');

        $data = [
            'nom' => $request->nom,
            'slug' => 'service-'.str_randomize(25).'-'.$request->nom,
            'image' => 'service-'.str_randomize(25).'-'.$file->getClientOriginalName()
         ];

         if (Partenaire::create($data)) {
            $request->media->storeAs('public/partenaires',$data['image']);
            session()->flash('message', tableName(Partenaire::class).' ajouté avec succès, id = '.lastChild(Partenaire::class));
            storeLog(Partenaire::class);
            return redirect('partenaire');

        }
        createFailureLog(Partenaire::class);
        return redirect('partenaire');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Partenaire::findOrFail($id))   {
            $partenaire = Partenaire::findOrFail($id);
            showLog(Partenaire::class,$id);
            return view('backEnd.admin.partenaire.show', compact('partenaire'));
        }

        session()->flash('error', ' l\'arcticle n\'existe pas !');
        showFailureLog(Partenaire::class,$id);
        return view('backEnd.admin.partenaire.show', compact('partenaire'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Partenaire::findOrFail($id))   {
            $partenaire = Partenaire::findOrFail($id);
            editLog(Partenaire::class,$id);
            return view('backEnd.admin.partenaire.edit', compact('partenaire'));
        }

        editFailureLog(Partenaire::class,$id);
        return view('backEnd.admin.partenaire.edit', compact('partenaire'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (Partenaire::findOrFail($id)){
            $partenaire =  Partenaire::findOrFail($id);

            $data = [
                'nom' => $request->nom,
                'slug' => 'par$partenaire-'.str_randomize(25).'-'.$request->nom,
                'image' => $partenaire->image
            ];

            if($request->hasFile('media')){
                 $file = $request->file('media');
                 $data['image'] = 'partenaire-'.str_randomize(25).'-'.$file->getClientOriginalName();
                 $request->media->storeAs('public/partenaires',$data['image']);

            }


            if ($partenaire->update($data)){
                session()->flash('success', 'Partenaire mise à jours avec succès!');
                updateLog(Partenaire::class,$id);
                return redirect('partenaire');
            }
        }


        session()->flash('error', 'Echec mise à jours , l\'arcticle n\'existe pas !');
        updateFailureLog(Partenaire::class,$id);
        return redirect('partenaire');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Partenaire::findOrFail($id))   {
            $partenaire = Partenaire::findOrFail($id);
            $partenaire->delete();
            session()->flash('success', 'mise à jours avec effectué avec succes!');
            deleteLog(Partenaire::class,$id);
            return redirect('partenaire');
        }

        session()->flash('error', 'Echec suppression , l\'arcticle n\'existe pas !');
        deleteFailureLog(Partenaire::class,$id);
        return redirect('partenaire');
    }


}
