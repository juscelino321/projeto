<?php

namespace App\Http\Controllers;
use App\Models\Livro;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $livro = Livro::where("user_id", auth()->user()->id)->paginate();

        return view('dashboard')->with("livros", $livro->all());
    }
}
