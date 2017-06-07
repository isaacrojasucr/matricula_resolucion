<?php
/**
 * Created by PhpStorm.
 * User: kevsa
 * Date: 6/6/2017
 * Time: 4:01 PM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use App;
use lang;


class LanguageController extends Controller
{

    /**
     * @desc To chance the current language
     * @request Ajax
     */

    public function changeLanguage(Request $request) {
        if ($request->ajax()) {
            $request->session()->put('locale', $request->locale);
            $request->session()->flash('alert-success', ('app.Locale_Chance_Success'));
        }
    }


    public function english(Request $request) {
        $locale='en';
        $request->session()->put('locale', $locale);

        return \Redirect::back();
    }

    public function spanish(Request $request) {
        $locale='es';
        $request->session()->put('locale', $locale);
        return \Redirect::back();
    }
}