<?php

class ManifestosController extends BaseController {

    /**
     * Manifesto Repository
     *
     * @var Manifesto
     */
    protected $manifesto;

    public function __construct(Manifesto $manifesto)
    {
        $this->manifesto = $manifesto;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $manifestos = $this->manifesto->all();

        return View::make('manifestos.index', compact('manifestos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('manifestos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $input = Input::all();
        $validation = Validator::make($input, Manifesto::$rules);

        if ($validation->passes())
        {
            $this->manifesto->create($input);

            return Redirect::route('manifestos.index');
        }

        return Redirect::route('manifestos.create')
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $manifesto = $this->manifesto->findOrFail($id);

        return View::make('manifestos.show', compact('manifesto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $manifesto = $this->manifesto->find($id);

        if (is_null($manifesto))
        {
            return Redirect::route('manifestos.index');
        }

        return View::make('manifestos.edit', compact('manifesto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $input = array_except(Input::all(), '_method');
        $validation = Validator::make($input, Manifesto::$rules);

        if ($validation->passes())
        {
            $manifesto = $this->manifesto->find($id);
            $manifesto->update($input);

            return Redirect::route('manifestos.show', $id);
        }

        return Redirect::route('manifestos.edit', $id)
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->manifesto->find($id)->delete();

        return Redirect::route('manifestos.index');
    }

}