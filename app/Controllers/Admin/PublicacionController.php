<?php

namespace App\Controllers\Admin;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;
use App\Models\PublicacionModel;

class PublicacionController extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */

    private $db;
    private $publicacionModel;

    public function __construct() {
        helper(['url', 'form', 'session']);
        $this->db = \Config\Database::connect(); 
        $this->publicacionModel = new PublicacionModel();
        $this->session = \Config\Services::session();
    }


    public function index()
    {
        $data = [
            'publicaciones' => $this->publicacionModel->orderBy('id', 'desc')->findAll()
        ];

        return view('admin/publicaciones/index', $data); 
    }

    /**
     * Return the properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function show($id = null)
    {
        
    }

    /**
     * Return a new resource object, with default properties.
     *
     * @return ResponseInterface
     */
    public function new()
    {
        return view('admin/publicaciones/create');
    }

    /**
     * Create a new resource object, from "posted" parameters.
     *
     * @return ResponseInterface
     */
    public function create()
    {
        $data = [
            'autor' => $this->session->id,
            'titulo' => $this->request->getVar('titulo'),
            'resumen' => $this->request->getVar('resumen'),
            'contenido' => $this->request->getVar('contenido'),
            'estado' => 1,
            'tipo' => $this->request->getVar('tipo')
        ];

        $rules = [
            'titulo' => 'required|min_length[3]|max_length[500]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->to('/admin/publicaciones/new')->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->publicacionModel->insert($data);

        return redirect()->to('/admin/publicaciones')->with('success', 'Publicación creada exitosamente.');
    }

    /**
     * Return the editable properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function delete($id = null)
    {
        $this->publicacionModel->delete($id);

        return redirect()->to('admin/publicaciones');
    }
}
