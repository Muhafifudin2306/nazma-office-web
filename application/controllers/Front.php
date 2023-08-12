<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Front extends CI_Controller
{

      function __construct()
      {
            parent::__construct();
            $this->load->model('Modelproject');
            $this->load->model('Modeltestimony');
            $this->load->model('Modelcertifiedtrainers');
            $this->load->model('Modelcreativecrew');
            $this->load->model('Modelpartnership');
            $this->load->model('Modelblog');
            $this->load->model('Modelevent');
      }

      public function index()
      {
            $data = [
                  'page_title' => 'Nazma Office - We Will Finish It With Excelence',
                  'page_keyword' => 'NaZMa Office, Konsultan IT dan Manajemen, nazma, nazma office com',
                  'frontdataproject' => $this->Modelproject->get_data_project(),
                  'frontdatatestimony' => $this->Modeltestimony->get_data_testimony(),
                  'frontdatacertifiedtrainers' => $this->Modelcertifiedtrainers->get_data_certifiedtrainers(),
                  'frontdatacreativecrew' => $this->Modelcreativecrew->get_data_creativecrew(),
                  'frontdatapartnership' => $this->Modelpartnership->get_data_partnership()
            ];
            $this->load->view('layout/header', $data);
            $this->load->view('index', $data);
            $this->load->view('layout/footer');
      }

      public function about()
      {
            $data = ['page_title' => 'Tentang | Nazma Office'];
            $this->load->view('layout/header', $data);
            $this->load->view('about');
            $this->load->view('layout/footer');
      }
      public function service()
      {
            $data = ['page_title' => 'Layanan | Nazma Office'];
            $this->load->view('layout/header2', $data);
            $this->load->view('service');
            $this->load->view('layout/footer');
      }

      public function it_service()
      {
            $data = [
                  'page_title' => 'Layanan IT | Nazma Office',
                  'page_keyword' => 'layanan konsultan IT'
            ];
            $this->load->view('layout/header2', $data);
            $this->load->view('service/it-service');
            $this->load->view('layout/footer');
      }

      public function management_service()
      {
            $data = [
                  'page_title' => 'Layanan Manajemen | Nazma Office',
                  'page_keyword' => 'layanan konsultan manajemen'
            ];
            $this->load->view('layout/header2', $data);
            $this->load->view('service/management');
            $this->load->view('layout/footer');
      }



      public function project()
      {
            $data = ['page_title' => 'Projek | Nazma Office'];
            $this->load->view('layout/header2', $data);
            $this->load->view('project');
            $this->load->view('layout/footer');
      }
      public function blog()
      {
            $data = [
                  'page_title' => 'Blog | Nazma Office',
                  'page_keyword' => 'blog nazma office',
                  'frontdatablog' => $this->Modelblog->get_data_blog()
            ];
            $this->load->view('layout/header2', $data);
            $this->load->view('blog', $data);
            $this->load->view('layout/footer');
      }

      public function detail_blog($slug = null)
      {
            $checkSlug = $this->Modelblog->getBlogBySlug($slug);

            if ($checkSlug) {
                  $data = [
                        'page_title' => 'Blog Nazma Office | Baca',
                        'page_keyword' => 'blog nazma office',
                        'blogDetail' => $checkSlug,
                        'frontotherdatablog' => $this->Modelblog->get_other_data_blog()

                  ];
                  $this->load->view('layout/header2', $data);
                  $this->load->view('detail_blog', $data);
                  $this->load->view('layout/footer');
            } else {
                  $this->session->set_flashdata(
                        'warning',
                        'Blog Data Not Found'
                  );

                  redirect('front/blog');
            }
      }

      public function gallery()
      {
            $data = [
                  'page_title' => 'Galeri | Nazma Office',
                  'page_keyword' => 'galeri nazma office',
                  'frontdatablog' => $this->Modelblog->get_data_blog()
            ];
            $this->load->view('layout/header2', $data);
            $this->load->view('gallery', $data);
            $this->load->view('layout/footer');
      }

      public function event()
      {
            $data = [
                  'page_title' => 'Event | Nazma Office',
                  'page_keyword' => 'acara nazma office',
                  'frontdataevent' => $this->Modelevent->get_data_event()
            ];
            $this->load->view('layout/header2', $data);
            $this->load->view('event', $data);
            $this->load->view('layout/footer');
      }
}