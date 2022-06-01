<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      if(isLoggedIn()){
        redirect('posts');
      }
      $data = [
        'title' => 'SharePosts',
        'description' => 'tugas MVC',
        'info' => 'Halo selamat datang',
        'name' => 'Kikuk',
        'location' => 'Di Indonesia',
        'contact' => '+68',
        'mail' => 'kikuk@gmail.com'
      ];
     
      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'Tentang kami',
        'description' => 'Untuk berbagi ke semua'
      ];

      $this->view('pages/about', $data);
    }

    public function contact(){
      $data = [
          'title' => 'Hubungi kami',
          'description' => 'Bisa kok hubungi saya',
          'info' => 'hanya jika urusan penting',
          'name' => 'Kikuk',
          'location' => 'Di Indonesia',
          'contact' => '+68',
          'mail' => 'kikuk@gmail@gmail.com'
      ];

      $this->view('pages/contact', $data);
    }
  }