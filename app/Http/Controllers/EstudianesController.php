<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class EstudianesController extends Controller
{
    public function mostrarUsuarios(Request $request){
        $respuesta = $this->realizarPeticion('GET', 'https://randomuser.me/api/?results=1');
        
        $usuario = json_decode($respuesta)->results[0];
        // $usuario = $this->paginate($usuario,5);

        return response()->json([
            $usuario
        ],201);
        // return view('Usuarios.todos', compact('usuario'));
    }


    // PAGINADOR PERSONALIZADO USANDO PAGINATOR / COLLECTION / LENGHTAWAREPAGINATOR

    function paginate($items, $perPage)
    {
        $pageStart = request('page', 1);
        $offSet    = ($pageStart * $perPage) - $perPage;
        $itemsForCurrentPage = $items->slice($offSet, $perPage);

        return new LengthAwarePaginator($itemsForCurrentPage, $items->count(), $perPage,
            Paginator::resolveCurrentPage(),
            ['path' => Paginator::resolveCurrentPath()]
        );
    }
}
