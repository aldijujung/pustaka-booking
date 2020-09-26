<?php 
defined('BASEPATH') or exit('No Direct script access allowed'); 
 
class Laporan extends CI_Controller {    
    function __construct()  
    {  
        parent::__construct();  
        $this->load->model(['ModelUser', 'ModelBuku', 'ModelPinjam']); 
}
  
  public function laporan_buku(){
      $data['judul'] = 'Laporan Data Buku';  
      $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();  
      $data['buku'] = $this->ModelBuku->getBuku()->result_array();  
      $data['kategori'] = $this->ModelBuku->getKategori()->result_array(); 
   
      $this->load->view('templates/header', $data);   
      $this->load->view('templates/sidebar', $data);   
      $this->load->view('templates/topbar', $data); 
      $this->load->view('buku/laporan_buku', $data); 
      $this->load->view('templates/footer');  
      }
      
      public  function cetak_laporan_buku(){
          $data['buku'] = $this->ModelBuku->getBuku()->result_array();
          $data['kategori'] = $this->ModelBuku->getKategori()->result_array();
          
          $this->load->view('buku/laporan_print_buku', $data);
      }
      public function laporan_buku_pdf(){
          $this->load->library('dompdf_all');
          $data['buku'] = $this->ModelBuku->getBuku()->result_array();
//          $this->load->view('buku/laporan_pdf_buku', $data);
           $this->dompdf_all->generate('buku/laporan_pdf_buku', $data,'laporan_data_buku','A4','landscape');
      }
      public function export_excel(){
          $data= array('title' => 'Laporan Buku',
              'buku' => $this->ModelBuku->getBuku()->result_array());
          $this->load->view('buku/export_excel_buku',$data);
      }
      public function laporan_pinjam()   {       
          $data['judul'] = 'Laporan Data Peminjaman';  
          $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();   
          $data['laporan'] = $this->db->query("select * from pinjam p,detail_pinjam d, buku b,user u where d.id_buku=b.id and p.id_user=u.id and p.no_pinjam=d.no_pinjam")->result_array();
          $this->load->view('templates/header', $data);      
          $this->load->view('templates/sidebar');       
          $this->load->view('templates/topbar', $data);   
          $this->load->view('pinjam/laporan-pinjam', $data);    
          $this->load->view('templates/footer');
      }
      public function cetak_laporan_pinjam()     {   
          $data['laporan'] = $this->db->query("select * from pinjam p,detail_pinjam d, buku b,user u where d.id_buku=b.id and p.id_user=u.id and p.no_pinjam=d.no_pinjam")->result_array();
          $this->load->view('pinjam/laporan-print-pinjam', $data);  
          }
          public function laporan_pinjam_pdf()  
              {       
              $this->load->library('dompdf_all');     
              $data['laporan'] = $this->db->query("select * from pinjam p,detail_pinjam d, buku b,user u where d.id_buku=b.id and p.id_user=u.id and p.no_pinjam=d.no_pinjam")->result_array();
              $this->dompdf_all->generate('pinjam/laporan-pdf-pinjam', $data,'laporan data peminjam','A4','landscape');
              }
               public function export_excel_pinjam()   {  
                   $data = array( 'title' => 'Laporan Data Peminjaman Buku',  
                       'laporan' => $this->db->query("select * from pinjam p,detail_pinjam d, buku b,user u where d.id_buku=b.id and p.id_user=u.id and p.no_pinjam=d.no_pinjam")->result_array());  
                   $this->load->view('pinjam/export-excel-pinjam', $data); 
            }
        
            public function laporan_member(){
                    $data['judul'] = 'Laporan Data Member';  
                    $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();   
                    $data['laporan'] = $this->db->query("select nama, email, alamat, is_active from user where role_id=2")->result_array();
                    
                    $this->load->view('templates/header', $data);      
                    $this->load->view('templates/sidebar');       
                    $this->load->view('templates/topbar', $data);   
                    $this->load->view('member/laporan-member', $data);    
                    $this->load->view('templates/footer'); 
                    }
        public function cetak_laporan_member()     {   
                $data['laporan'] = $this->db->query("select nama, email, alamat, is_active from user where role_id=2")->result_array();
                $this->load->view('member/laporan-print-member', $data);  
                }
        public function laporan_member_pdf()  
              {       
              $this->load->library('dompdf_all');     
              $data['laporan'] = $this->db->query("select nama, email, alamat, is_active from user where role_id=2")->result_array();
              $this->dompdf_all->generate('member/laporan-pdf-member', $data,'laporan data member','A4','landscape');
              }
               public function export_excel_member()   {  
                   $data = array( 'title' => 'Laporan Data Member',  
                       'laporan' => $this->db->query("select nama, email, alamat, is_active from user where role_id=2")->result_array());  
                   $this->load->view('member/export-excel-member', $data); 
            }
            
            
               }
