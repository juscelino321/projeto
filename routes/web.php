<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;
use App\Models\Livro;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/home', function(){
        return redirect("/dashboard");
    });
    Route::post('criar-livros', [LivroController::class, 'store'])->name("livros.store");
    Route::get('criar-livros', function(){
        return view("livros.create");
    });
    Route::post('editar-livros/{id}', [LivroController::class, 'edit'])->name("livros.update");
    Route::get('editar-livros/{id}', function($id){
        $livro = Livro::where("id", $id)->first();
        return view("livros.edit")->with("livro", $livro);
    });
    Route::get('deletar-livros/{id}', [LivroController::class, 'delete'])->name("livros.delete");

});

