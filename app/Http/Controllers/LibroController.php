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

class LibroController extends AppBaseController
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

        return view('libros.index')
            ->with('libros', $libros);
    }

    /**
     * Show the form for creating a new Libro.
     *
     * @return Response
     */
    public function create()
    {
        return view('libros.create');
    }

    /**
     * Store a newly created Libro in storage.
     *
     * @param CreateLibroRequest $request
     *
     * @return Response
     */
    public function store(CreateLibroRequest $request)
    {
        $input = $request->all();

        $libro = $this->libroRepository->create($input);

        Flash::success('Libro saved successfully.');

        return redirect(route('libros.index'));
    }

    /**
     * Display the specified Libro.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $libro = $this->libroRepository->findWithoutFail($id);

        if (empty($libro)) {
            Flash::error('Libro not found');

            return redirect(route('libros.index'));
        }

        return view('libros.show')->with('libro', $libro);
    }

    /**
     * Show the form for editing the specified Libro.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $libro = $this->libroRepository->findWithoutFail($id);

        if (empty($libro)) {
            Flash::error('Libro not found');

            return redirect(route('libros.index'));
        }

        return view('libros.edit')->with('libro', $libro);
    }

    /**
     * Update the specified Libro in storage.
     *
     * @param  int              $id
     * @param UpdateLibroRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLibroRequest $request)
    {
        $libro = $this->libroRepository->findWithoutFail($id);

        if (empty($libro)) {
            Flash::error('Libro not found');

            return redirect(route('libros.index'));
        }

        $libro = $this->libroRepository->update($request->all(), $id);

        Flash::success('Libro updated successfully.');

        return redirect(route('libros.index'));
    }

    /**
     * Remove the specified Libro from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $libro = $this->libroRepository->findWithoutFail($id);

        if (empty($libro)) {
            Flash::error('Libro not found');

            return redirect(route('libros.index'));
        }

        $this->libroRepository->delete($id);

        Flash::success('Libro deleted successfully.');

        return redirect(route('libros.index'));
    }






    public function buscar(Request $request)
    {
        dd($request->tomo);
        Flash::success('Libro deleted successfully.');
        return redirect(route('libros.index'));
    }s




}
