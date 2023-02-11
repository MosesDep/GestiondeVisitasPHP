<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB; 
use Illuminate\Http\Request; 
use DataTables;
use app\Http\Models\Animal;


class AnimalController extends Controller
{


    public function index(Request $request)
    {

        if($request-> ajax()){

          $animales = DB::table('users')
        ->select('users.*')
        ->get();
            return DataTables::of($animales)
            ->addColumn('actions', function($animales){
              

            )}
            ->rawColumns(['action']);
            ->make(true);
          }
            
        return view ('Animal.animal');

        // SELECT * FROM Proyecto 
    }




}

/*

 var tablaanimal= $('tabla-animal').DataTable({

    processing=true;
    serverSide=true;
    ajax:{

      url:"{{route(Animal.animal)}}"
    },
    columns:[

      {data:'id'},
      {data:'nombre'},
      {data:'especie'},
      {data:'genero'},
      {data:'action'orderable: false}

    ]


  })
  
  
  $(document).ready(function(){ 

  $('#tabla-animal').DataTable({
             processing: true,
             serverSide: true,
             ajax: {
              url: "{{ route('Animal.animal') }}",
              type: 'GET',
             },
             columns: [
                       
      {data:'id'},
      {data:'nombre'},
      {data:'especie'},
      {data:'genero'},
      {data:'action'orderable: false}

                      ],
          
                    });  

]);*/