<?php
namespace App\Http\Controllers;

use App\Models\MainModel;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index(){
        return view('index', ['data' => MainModel::models()]);
    }

    // public function pageone(){
    //     return view('pages.pageone');
    // }

    // public function pagetwo(){
    //     return view('pages.pagetwo');
    // }



}
