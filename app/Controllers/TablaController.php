<?php

namespace App\Controllers;

use App\Models\TablaModel;
use CodeIgniter\Controller;

class TablaController extends Controller
{
    public function index()
    {
        $model = new TablaModel();
        $data['datos'] = $model->findAll();
        return view('tabla/index', $data);
    }

    public function create()
    {
        return view('tabla/create');
    }

    public function store()
    {
        $model = new TablaModel();
        $data = [
            'nombre'   => $this->request->getPost('nombre'),
            'apellido' => $this->request->getPost('apellido'),
            'telefono' => $this->request->getPost('telefono'),
        ];
        
        $model->insert($data);
        return redirect()->to('/tabla');
    }

    public function edit($id)
    {
        $model = new TablaModel();
        $data['dato'] = $model->find($id);
        return view('tabla/edit', $data);
    }

    public function update($id)
    {
        $model = new TablaModel();
        $data = [
            'nombre'   => $this->request->getPost('nombre'),
            'apellido' => $this->request->getPost('apellido'),
            'telefono' => $this->request->getPost('telefono'),
        ];
        
        $model->update($id, $data);
        return redirect()->to('/tabla');
    }

    public function delete($id)
    {
        $model = new TablaModel();
        $model->delete($id);
        return redirect()->to('/tabla');
    }
}
