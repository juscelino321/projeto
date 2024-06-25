<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LivroController extends Controller
{
    public function store(Request $request)
    {
        // Validação dos dados do formulário
        $validatedData = $request->validate([
            'autor' => 'required|string|max:255',
            'titulo' => 'required|string|max:255',
            'subtitulo' => 'nullable|string|max:255',
            'edicao' => 'nullable|string|max:255',
            'editora' => 'nullable|string|max:255',
            'ano_publicacao' => 'nullable|integer',
        ]);

        // Verifica se o usuário está autenticado
        if (Auth::check()) {
            // Cria o livro associado ao usuário autenticado
            $livro = new Livro($request->except("_token"));
            $livro->user_id = Auth::id(); // Associando o ID do usuário autenticado
            $livro->save();

            return redirect()->route('home')->with('success', 'Livro cadastrado com sucesso!');
        } else {
            // Tratamento de erro: usuário não autenticado
            return redirect()->route('login')->with('error', 'Você precisa estar logado para cadastrar um livro.');
        }
    }
    // Outros métodos do controlador

    public function edit(Request $request, $id){
        $validatedData = $request->validate([
            'autor' => 'required|string|max:255',
            'titulo' => 'required|string|max:255',
            'subtitulo' => 'nullable|string|max:255',
            'edicao' => 'nullable|string|max:255',
            'editora' => 'nullable|string|max:255',
            'ano_publicacao' => 'nullable|integer',
        ]);

        // Verifica se o usuário está autenticado
        if (Auth::check()) {
            // Cria o livro associado ao usuário autenticado
            // $livro = new Livro($request->except("_token"));
            $livro = Livro::where("id", $id);
            
            // $livro->user_id = Auth::id(); // Associando o ID do usuário autenticado
            $livro->update($request->except("_token"));

            return redirect()->route('home')->with('success', 'Livro cadastrado com sucesso!');
        } else {
            // Tratamento de erro: usuário não autenticado
            return redirect()->route('login')->with('error', 'Você precisa estar logado para cadastrar um livro.');
        }
    }

    public function delete($id){
        Livro::where("id", $id)->delete();
        return redirect()->route("home");
    }
}

