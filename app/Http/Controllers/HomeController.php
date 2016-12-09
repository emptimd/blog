<?php

namespace App\Http\Controllers;

use App\Models\Back\Family;
use App\Models\Back\FamilyImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\Finder\Finder;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {





//        dd($request);

//        Cookie::queue('name', 'aee', 60);

//        $cookie = cookie('name', 'value', 11);

//        dd($cookie);


//        Cookie::queue('lang', 'aa', 10);
//        dd($value = $request->cookie('lang'));

//        dd(Cookie::get('lang'));

//        dd(\App::getLocale());

//        return redirect('login');
//
//        if(Auth::user()) {
//            dd(12);
//        }

//        Auth::logout();
//        dd(Auth::user());

//        $data = \App\Models\Back\Family::pluck('title', 'id');
//
//        dd($data->toArray());

//        $model = FamilyImages::all()->where('family_id', '=', '23');
//
//        dd($model->first());

//        $model = Family::find(23);
////
//        foreach($model->images()->get() as $image) {
//            $image->delete();
//        }

//        dd($model->images()->get(['id'])->toArray());

//        $ids_to_delete = array_map(function($item){ return $item['id']; }, $model->images()->get(['id'])->toArray());


        return view('home');
    }


    public function findTranslations($path = null)
    {

//        dd(\Config::get('translation-manager.exclude_groups'));
        $path = $path ?: base_path();
        $keys = array();
        $functions =  array('trans', 'trans_choice', 'Lang::get', 'Lang::choice', 'Lang::trans', 'Lang::transChoice', '@lang', '@choice');
        $pattern =                              // See http://regexr.com/392hu
            "[^\w|>]".                          // Must not have an alphanum or _ or > before real method
            "(".implode('|', $functions) .")".  // Must start with one of the functions
            "\(".                               // Match opening parenthese
            "[\'\"]".                           // Match " or '
            "(".                                // Start a new group to match:
            "[a-zA-Z0-9_-]+".               // Must start with group
            "([.][^\1)]+)+".                // Be followed by one or more items/keys
            ")".                                // Close group
            "[\'\"]".                           // Closing quote
            "[\),]";                            // Close parentheses or new parameter

        // Find all PHP + Twig files in the app folder, except for storage
        $finder = new Finder();
        $finder->in($path)->exclude(['storage', 'vendor', 'node_modules'])->name('*.php')->files();

        /** @var \Symfony\Component\Finder\SplFileInfo $file */
        foreach ($finder as $file) {
            // Search the current file for the pattern
            if(preg_match_all("/$pattern/siU", $file->getContents(), $matches)) {
                dd($matches);
                // Get all matches
                foreach ($matches[2] as $key) {
                    $keys[] = $key;
                }
            }
        }




        dd($keys);
        // Remove duplicates
        $keys = array_unique($keys);

        // Add the translations to the database, if not existing.
//        foreach($keys as $key){
//            // Split the group and item
//            list($group, $item) = explode('.', $key, 2);
//            $this->missingKey('', $group, $item);
//        }

        // Return the number of found translations
        return count($keys);
    }
}
