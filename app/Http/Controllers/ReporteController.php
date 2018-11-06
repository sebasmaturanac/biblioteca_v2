<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLibroRequest;
use App\Http\Requests\UpdateLibroRequest;
use App\Repositories\LibroRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ReporteController extends AppBaseController
{
    /** @var  LibroRepository */
    private $libroRepository;

    public function __construct(LibroRepository $libroRepo)
    {
        $this->libroRepository = $libroRepo;
    }

    /**
     * Display a listing of the Libro.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->libroRepository->pushCriteria(new RequestCriteria($request));
        $libros = $this->libroRepository->all();

        return view('reporte.index')->with('libros', $libros);
    }


}
