<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\CarouselModel;

class CarouselController extends BaseController
{

    private $db;
    private $carouselModel;

    public function __construct()
    {
        helper(['url', 'form', 'session']);
        $this->db = \Config\Database::connect();
        $this->carouselModel = new CarouselModel();
        $this->session = \Config\Services::session();
    }


    public function index()
    {
        $model = new CarouselModel();
        $data['images'] = $model->findAll();

        return view('admin/carousel/index', $data);
    }

    public function create()
    {
        return view('admin/carousel/create');
    }

    public function store()
    {
        $model = new CarouselModel();

        $file = $this->request->getFile('image');

        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move('uploads', $newName);

            $data = [
                'filename' => $newName,
                'autor' => $this->session->id,
                'titulo' => $this->request->getPost('titulo'),
                'resumen' => $this->request->getPost('resumen'),
                'contenido' => $this->request->getPost('contenido'),
                'estado' => $this->request->getPost('estado'),
                'tipo' => $this->request->getPost('tipo')
            ];

            $model->insert($data);
        }

        return redirect()->to('/admin/carousel');
    }


    public function edit($id)
    {
        $model = new CarouselModel();
        $data['image'] = $model->find($id);

        return view('admin/carousel/edit', $data);
    }

    public function update($id = null)
    {
        // Procesa la actualización de la imagen
        $model = new CarouselModel();
        $image = $model->find($id);

        // Verifica si se ha enviado una nueva imagen en el formulario
        $file = $this->request->getFile('image');

        if ($file->isValid() && !$file->hasMoved()) {
            // Si se ha enviado una nueva imagen, actualiza la imagen en la base de datos y en el sistema de archivos
            unlink('uploads/' . $image['filename']); // Elimina la imagen anterior

            $newName = $file->getRandomName();
            $file->move('uploads', $newName);

            $data = [
                'filename' => $newName,
                'autor' => $this->request->getPost('autor'),
                'titulo' => $this->request->getPost('titulo'),
                'resumen' => $this->request->getPost('resumen'),
                'contenido' => $this->request->getPost('contenido'),
                'estado' => $this->request->getPost('estado'),
                'tipo' => $this->request->getPost('tipo')
            ];

            $model->update($id, $data);
        } else {
            // Si no se ha enviado una nueva imagen, actualiza solo los otros campos en la base de datos
            $data = [
                'autor' => $this->request->getPost('autor'),
                'titulo' => $this->request->getPost('titulo'),
                'resumen' => $this->request->getPost('resumen'),
                'contenido' => $this->request->getPost('contenido'),
                'estado' => $this->request->getPost('estado'),
                'tipo' => $this->request->getPost('tipo')
            ];

            $model->update($id, $data);
        }

        // Redirecciona después de la actualización
        return redirect()->to('/admin/carousel');

    }


    public function delete($id)
    {
        $model = new CarouselModel();
        $image = $model->find($id);

        if ($image) {
            unlink('uploads/' . $image['filename']);
            $model->delete($id);
        }

        return redirect()->to('/admin/carousel');
    }
}
