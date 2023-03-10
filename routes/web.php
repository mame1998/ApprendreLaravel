<?php
use App\Models\Etudiant;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


//premier methode
// Route::get('/', function () {
//     return view('base')->with("nom", "sarr");
// });


//Route::get('/about', function () {
   // return view('pages/about')
    //->with("prenom", "Modou")
    //->with("nom", "Sarr");
//});

 // 2em Methode
//  Route::get('/about', function () {
//     return view('pages/about')
//     ->withPrenom ("gnoror")
//     ->withNom("Sarr");
// });

    // troixiem methode
// Route::get('/about', function () {
//     return view('pages/about')
//     ->with([
//         'prenom'=> "Modou",
//         'nom' => "sarr"
//     ]);
    
// });


// cinquieme methode
// Route::get('/about', function () {
//     $view = view('pages/about');
//     $view->nom = "sarr";
//     $view->prenom = "Mame ndiaye";
//     $view->adresse = "Pikine";
    
//         return $view;
//     });
    

Route::view('/about', 'pages/about');
Route::view('/contact', 'pages/service');
Route::view('/service', 'pages/contact');
Route::view('etudiant', 'pages/contact');



// ________________Apprendre SQL_________________

// Route::get('/', function () {
//     $articles = DB::select('select * from articles');
//     dd($articles);
//     return view('base');
// });

//___________selectionner le premier article______________
// Route::get('/', function () {
//     $articles = DB::select('select * from articles')[0];
//     dd($articles);
//     return view('base');
// });

//___________selectionner le premier article______________
// Route::get('/', function () {
//     $articles = DB::select('select * from articles limit 1');
//     dd($articles);
//     return view('base');
// });


//___________A partir du 2em article ,recupere 1 article______________
// Route::get('/', function () {
//     $articles = DB::select('select * from articles limit 1 offset 2');
//     dd($articles);
//     return view('base');
// });

// ____________INSERT un article__________________
// Route::get('/', function()
// {
// $articles=DB::insert("INSERT INTO articles VALUES (null, :titre, :contenu, :etat, :date)", [
//     'titre'=> 'Titre4',
//     'contenu'=> 'contenu4',
//     'etat'=> 1,
//     'date'=> date( 'Y-m-d h-i:s')
// ]);
// dd($articles);
// return view('base');
// });



//________Inserer un article : 2eme methode____________
    // $titre = 'Titre 5';
    // $contenu = 'Contenu 5';
    //  $etat = 0;
    // $date = date('Y-m-d H:i:s');

    // $ok = DB::insert("INSERT INTO articles
    //  values(null, :titre, :contenu, :etat,  :date)",
    // compact('titre', 'contenu', 'etat', 'date'));
    // dd($ok);

      //_____________Inserer un article : 3eme methode__________
    // $titre = 'Titre 6';
    //  $contenu = 'Contenu 6';
    //  $etat = 0;
    //  $date = date('Y-m-d H:i:s');

    //  $ok = DB::insert("INSERT INTO articles values(
    //     null, ?, ?, ?, ?)",
    //    [$titre, $contenu, $etat, $date]
    //  );
    // dd($ok);


    // _________Modifier le titre du deuxieme article_________________
    // $ok = DB::update("UPDATE articles SET titre='Titre 2 modifié' WHERE id =2");
    // dd($ok);



    // selectioner tout les article (uniquement les colonne id)//
    // Route::get('/',function()
    //  {
    //  $articles =DB::table('articles') ->get(['id , contenu']) ;
    //  dd($articles);
    //  return view('base');
    //  });


    // ____________selectionner le premier article_______//
    //   Route::get('/',function()
    //   {
    //  $articles =DB::table('articles') ->first();
    //  dd($articles);
    //  return view('base');
    //  });

//__________selectionner le titre du premier article______//
    //  Route::get('/',function()
    //  {
    // $articles =DB::table('articles') ->first();
    // dd($articles->contenu);
    // return view('base');
    // });

//__________selectionner l'article qui a pour titre "Titre 2"______//

    // Route::get('/',function()
    //  {
    // $articles =DB::table('articles')->whereId(2)->get();
    // dd($articles);
    // return view('base');
    // });

    //__________selectionner tout les articles don leur id est >=2______//

    // Route::get('/',function()
    //  {
    // $articles =DB::table('articles')->where('id', '>',2)->get();
    // dd($articles);
    // return view('base');
    // });


    //__________selectionner l'article  dont le titre est "Titre 2" et le contenu "contenu 2 1er methode______//

    // Route::get('/',function()
    //  {
    // $articles =DB::table('articles')->whereTitreAndContenu('titre 5 ', 'contenu 5')->get();
    // dd($articles);
    // return view('base');
    // });

    //__________selectionner l'article  dont le titre est "Titre 2" et le contenu "contenu 2 2em methode______//

    // Route::get('/',function()
    //  {
    // $articles =DB::table('articles')
    // ->where('titre', 'Titre 5')
    // ->where('contenu', 'Contenu 5')
    // ->get();
    // dd($articles);
    // return view('base');
    // });

    //__________selectionner l'article  dont le titre est "Titre 2" ou  le contenu "contenu 2 1er methode______//

    // Route::get('/',function()
    //  {
    // $articles =DB::table('articles')
    // ->whereTitreOrContenu('titre 5 ', 'contenu 5')
    // ->get();
    // dd($articles);
    // return view('base');
    // });

    //__________selectionner l'article  dont le titre est "Titre 2" ou le contenu "contenu 2 2em methode______//

    // Route::get('/',function()
    //  {
    // $articles =DB::table('articles')
    // ->where('titre', 'Titre 5')
    // ->orwhere('contenu', 'Contenu 5')
    // ->get();
    // dd($articles);
    // return view('base');
    // });


     //__________selectionner le deux article______//

    //  Route::get('/',function()
    //  {
    // $articles =DB::table('articles')->take(2)->get();
    // dd($articles);
    // return view('base');
    // });

    //__________A partire du deuxiem article selectionner le troi  articles______//

//     Route::get('/',function()
//     {
//    $articles =DB::table('articles')-> where('id', '>',  '2')
//    ->take(3)
//    ->get();
//    dd($articles);
//    return view('base');
//    });


   //__________selectionner tous les article en faissant un trie assandant( ordre alphabatique)______//

//    Route::get('/',function()
//    {
//   $articles =DB::table('articles')
//   ->orderBy('titre', 'asc') 
//   ->get();
//   dd($articles);
//   return view('base');
//   });

  //__________selectionner tous les article en faissant un trie dessandant( inverse ordre alphabatique)______//

//   Route::get('/',function()
//   {
//  $articles =DB::table('articles')->orderBy('titre', 'desc') ->get();
//  dd($articles);
//  return view('base');
//  });


 //__________selectionner tous les articles dont les id >2 es faisant un trie ascendant______//

//  Route::get('/',function()
//  {
// $articles =DB::table('articles')->where('id' , '>' ,'2')->orderBy('titre', 'desc') ->get();
// dd($articles);
// return view('base');
// });


 //__________Afficher le nombre d'article______//

//  Route::get('/',function()
//  {
// $articles =DB::table('articles')->count();
// dd($articles);
// return view('base');
// });


//__________Inserer un article ______//

// Route::get('/',function()
// {
// $articles =DB::table('articles')->insert(
//    [
//     [
//         'titre' => 'Titre 7',
//         'contenu' => 'Contenu 7',
//         'etat' => 0,
//         'date' => date('Y-m-d H:i:s'),
//     ],
//     [
//         'titre' => 'Titre 8',
//         'contenu' => 'Contenu 8',
//         'etat' => 1,
//         'date' => date('Y-m-d H:i:s'),
//     ]
//     ],
// );
// dd($articles);
// return view('base');
// });

// //__________Modifier le titre et le contenu de l'article dont l'd =2_____//

// Route::get('/',function()
// {
// $articles =DB::table('articles')->whereId(2)->update(
   
//     [
//         'titre' => 'Titre 7',
//         'contenu' => 'Contenu 7 modifier',
    
//     ],
// );
// dd($articles);
// return view('base');
// });


// //__________Modifier le titre et le contenu de l'article dont l'd =2_____//

// Route::get('/',function()
// {
// $articles =DB::table('articles')->where('id' , 7)->delete();
// dd($articles);
// return view('base');
// });



//____________________ Apprendre Eloquent (ORM)__________________________
//  Route::get('/',function()
//   {
//  $etudiants = Etudiant::get();
//  dd($etudiants);
//  return view('base');
//   });

//   //____________________ recuperer l'etudiant qui a id 2__________________________
//  Route::get('/',function()
//  {
// $etudiants = Etudiant::find(2);
// dd($etudiants);
// return view('base');
//  });

  //____________________ recuperer le nom et prenom de  l'etudiant qui a id 2__________________________
//   Route::get('/',function()
//   {
//  $etudiants = Etudiant::whereId(2)->get(['nom', 'prenom']);
//  dd($etudiants);
//  return view('base');
//   });
 
  //____________________ recuperer le nom et prenom de  l'etudiant   dont son prenom est different de 
  //"modou" et son age > 13___________________
//   Route::get('/',function()
//   {
//  $etudiants = Etudiant::where('prenom', '!=','Mame ndiaye')
//  ->where('age', '>', 13)
//  ->get(['nom', 'prenom']);
//  dd($etudiants);
//  return view('base');
//   });

//  ________ recuperer le nom du premier etudiant (premier methode)_______________________
//   Route::get('/',function()
//   {
//     $nomPremierEtudiant = Etudiant::first()->nom;
//  dd($nomPremierEtudiant);
//  return view('base');
//   });
 
  //  ________ Ajouter un etudiant (1er methode)_______________________
//   Route::get('/',function()
//     {
//    $etudiant = new Etudiant();
//    $etudiant->nom ="Ndour" ;
//    $etudiant->prenom ="Astou" ;
//    $etudiant->matricule="12345" ;
//    $etudiant->age=16 ;
//    $etudiant->save();

//     dd($etudiant);
//    return view('base');
//      });

     //  ________ Ajouter un etudiant (2em methode)_______________________
//   Route::get('/',function()
//   {
//  $etudiant = new Etudiant(
//     [
//         'nom' =>"Mbaye",
//         'prenom' =>"ibrahima",
//         'matricule' =>"1234568",
//         'age' =>17
//     ]
//  );
//  $etudiant->save();

//   dd($etudiant);
//  return view('base');
//    });
    
    //  ________ Ajouter un etudiant (3em methode)_______________________
//   Route::get('/',function()
//   {
//  $etudiant = Etudiant::create(
//     [
//         'nom' =>"sow",
//         'prenom' =>"Daba",
//         'matricule' =>"127890",
//         'age' =>18
//     ]
//  );
//  dd("L'edudiant " . $etudiant->prenom .' ' .$etudiant->nom .
//  ' a été crée avec succés !!!');

//   dd($etudiant);
//  return view('base');
//    });