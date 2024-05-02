<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Participant;

Route::get('/', function () {
    return view('welcome');
});

// Aqui, você deve usar a palavra-chave 'use' para passar a variável $req para dentro da função closure
Route::post('/create-participants', function (Request $req) {
    // Certifique-se de que os nomes dos campos no método create correspondem aos nomes das colunas no banco de dados
    Participant::create([
        'name' => $req->input('name_participant'), // Use o método input() para pegar dados do Request
        'phone' => $req->input('phone_participant')
    ]);

    // Você pode querer redirecionar o usuário ou retornar uma resposta JSON em vez de apenas imprimir uma mensagem
    return "Candidato Criado com Sucesso!";
    // return redirect('/')->with('success', 'Candidato Criado com Sucesso!'); // para redirecionar com uma mensagem de sessão
    // return response()->json(['message' => 'Candidato Criado com Sucesso!']); // para responder com JSON
});