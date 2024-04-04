<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\CarouselModel;
use App\Models\PublicacionModel;

class FrontendController extends BaseController
{


    private $db;
    private $carouselModel;

    public function __construct() {
        helper(['url', 'form', 'session']);
        $this->db = \Config\Database::connect();
        $this->carouselModel = new CarouselModel();
        $this->session = \Config\Services::session();
    }



    public function index()
    {
        $model = new CarouselModel();
        $data['images'] = $model->where('estado', 'activo')->findAll();

        // return view('frontend/partials/carousel', $data);
        return view('frontend/index', $data);
    }


    public function publicaciones()
    {
        $publicacionModel = new PublicacionModel();
        $data = [
            'publicaciones' => $publicacionModel->findAll()
        ];
        return view('frontend/publicaciones', $data);
    }


    public function noticias()
    {
        return view('frontend/noticias');
    }


    public function carousel()
    {
        $model = new CarouselModel();
        $data['images'] = $model->where('estado', 'activo')->findAll();

        return view('frontend/partials/carousel', $data);
    }


    public function contacto()
    {
        return view('frontend/contacto/index');
    }

}
