<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
  function __construct(){
      parent::__construct();
        $this->load->model('batik_model');
      $this->load->helper('url');
      if($this->session->userdata('status') != "login"){
        redirect(base_url("login"));
          $this->session->set_userdata('username','1');
      }

  }


  public function index($halaman='index'){

    $data['depan']=$this->batik_model->get_frontend();
    $data['gambar']=$this->batik_model->get_batik('head');
    $data['ongkir']=$this->batik_model->get_batik('ongkir');
    $data['online']=$this->batik_model->get_batik('online');
    $data['garansi']=$this->batik_model->get_batik('garansi');
    $data['batik']=$this->batik_model->get_batik('produk');
    $data['graf'] = $this->batik_model->get_counter();

    $this->load->view('templates/header');
    $this->load->view('admin/'.$halaman,$data);
    $this->load->view('templates/footer');
  }

  public function create(){
      $this->load->helper('form');
    $this->load->library('form_validation');


     $this->form_validation->set_rules('nama','nama','required');
     $this->form_validation->set_rules('harga','harga','required');

     $this->form_validation->set_rules('deskripsi','deskripsi','required');


       $nama = 'file_'.time();

      $config['upload_path']	 = './assets/img/uploads/';

      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size']		 = '5000';
      $config['max_width']	 = '5000';
      $config['max_height']	 = '5000';
      $config['file_name']	 = $nama;

    $this->load->library('upload', $config);


     if ($this->form_validation->run() == TRUE && $this->upload->do_upload('foto'))
      {

        $gambar = $this->upload->data();

        $data = array(
        'nama_product'=> $this->input->post('nama',TRUE),
        'harga'=> $this->input->post('harga',TRUE),
        'gambar'		=> $gambar['file_name'],
        'deskripsi'=> $this->input->post('deskripsi',TRUE)

      );

      $this->batik_model->insert($data,'produk');
        echo "<script> alert('data berhasil ditambahkan');
        window.location.href = '" . base_url() . "admin/table';

        </script>";

      }  else   {
        $data['foto'] = '';
        if (! $this->upload->do_upload('foto'))
        {

           $error = array('error' => $this->upload->display_errors());
                      $this->load->view('templates/header');
                      $this->load->view('admin/post', $error);

        }


  }
 }


 public function update($id){
   $this->load->helper('form');
   $this->load->library('form_validation');

   $this->form_validation->set_rules('nama','nama','required');
   $this->form_validation->set_rules('harga','harga','required');
   $this->form_validation->set_rules('deskripsi','deskripsi','required');

   $nama = 'file_'.time();
   $config['upload_path']  = './assets/img/uploads/';
   $config['allowed_types'] = 'gif|jpg|png';
   $config['max_size']     = '5000';
   $config['max_width']  = '5000';
   $config['max_height']   = '5000';
   $config['file_name']  = $nama;

   $this->load->library('upload', $config);

   if ($this->form_validation->run()=== FALSE) {
       $data['batik'] = $this->batik_model->get_batik_id($id,'produk');
       $this->load->view('templates/header');
       $this->load->view('admin/update',$data);
       $this->load->view('templates/footer');
   } else {
       if ($this->upload->do_upload('foto')) {
           $gambar = $this->upload->data();
           $data = array(
               'nama_product'=> $this->input->post('nama',TRUE),
               'harga'=> $this->input->post('harga',TRUE),
               'gambar'   => $gambar['file_name'],
               'deskripsi'=> $this->input->post('deskripsi',TRUE)
           );
       } else {
           $data = array(
               'nama_product'=> $this->input->post('nama',TRUE),
               'harga'=> $this->input->post('harga',TRUE),
               'deskripsi'=> $this->input->post('deskripsi',TRUE)
           );
      }
       if ($this->batik_model->update($id, $data,'produk') === TRUE ) {
            //$data['id'] = ;

           redirect('admin/update/'.$id);
       }else {
           echo "salah";
       }
   }
}


//  public function ubah($id){
//    $this->load->helper('form');
//    $this->load->library('form_validation');

   

//    $nama = 'file_'.time();
//    $config['upload_path']  = './assets/img/uploads/';
//    $config['allowed_types'] = 'gif|jpg|png';
//    $config['max_size']     = '5000';
//    $config['max_width']  = '5000';
//    $config['max_height']   = '5000';
//    $config['file_name']  = $nama;

//    $this->load->library('upload', $config);
//    $this->upload->overwrite=true;

   
//        $data['coba'] = $this->batik_model->get_ubah_id($id);
       
//        $this->load->view('templates/header');
//        $this->load->view('admin/edit',$data);
//        $this->load->view('templates/footer');
   
//        if (!$this->upload->do_upload('foto')) {

//           echo "";
//        } else {
           
//            $gambar = $this->upload->data();
           
//            $data = array(
              
//                'gambar'   => $gambar['file_name']

//            );
//             if ($this->batik_model->updategambar($id, $data) === TRUE ) {
//              echo "
//          <script>
//            alert('data berhasil diubah');
//            window.location.href = '" . base_url() . "admin/ubah/$id';
//          </script>
//          ";
//        }else {
//            echo "salah";
//        }
//       }

      
   
// }









  public function ubah($id){
    $this->load->helper('form');
    $this->load->library('form_validation');


   

    $nama = 'file_'.time();
    $config['upload_path']	 = './assets/img/uploads/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size']		 = '5000';
    $config['max_width']	 = '5000';
    $config['max_height']	 = '5000';
    $config['file_name']	 = $nama;

    $this->load->library('upload', $config);

  
        $data['coba'] = $this->batik_model->get_batik_id($id,'head');
        $this->load->view('templates/header');
        $this->load->view('admin/edit',$data);
        $this->load->view('templates/footer');
    
        if ($this->upload->do_upload('foto')) {
            $gambar = $this->upload->data();
            $data = array(
                'gambar'		=> $gambar['file_name']
            );
            if ($this->batik_model->update($id, $data,'head') === TRUE ) {
          echo "
          <script>
            alert('data berhasil diubah');
            window.location.href = '" . base_url() . "admin/image';
          </script>
          ";
        }
       
        

        else {
            echo   " <script>
                 alert('data gagal diubah');

               </script>
               ";
        }
    
 }
}


 public function update1($id){
   $this->load->helper('form');
   $this->load->library('form_validation');

   $this->form_validation->set_rules('judul','judul','required');
   $this->form_validation->set_rules('deskripsi','deskripsi','required');



   if ($this->form_validation->run()=== FALSE) {
       $data['ongkir'] = $this->batik_model->get_batik_id($id,'ongkir');
       $this->load->view('templates/header');
       $this->load->view('admin/update_ongkir',$data);
       $this->load->view('templates/footer');
   } else {
     $data = array(
       'judul'=> $this->input->post('judul',TRUE),
       'deskripsi'=> $this->input->post('deskripsi',TRUE)
          );



       if ($this->batik_model->update($id, $data,'ongkir') === TRUE ) {

         echo "
         <script>
           alert('data berhasil diubah');
           window.location.href = '" . base_url() . "admin/ongkir';
         </script>
         ";
       }else {
           echo "salah";
       }
     }
   }


   public function update2($id){
     $this->load->helper('form');
     $this->load->library('form_validation');

     $this->form_validation->set_rules('judul','judul','required');
     $this->form_validation->set_rules('deskripsi','deskripsi','required');



     if ($this->form_validation->run()=== FALSE) {
         $data['garansi'] = $this->batik_model->get_batik_id($id,'garansi');
         $this->load->view('templates/header');
         $this->load->view('admin/update_garansi',$data);
         $this->load->view('templates/footer');
     } else {
       $data = array(
         'judul'=> $this->input->post('judul',TRUE),
         'deskripsi'=> $this->input->post('deskripsi',TRUE)
            );



         if ($this->batik_model->update($id, $data,'garansi') === TRUE ) {

           echo "
           <script>
             alert('data berhasil diubah');
             window.location.href = '" . base_url() . "admin/garansi';
           </script>
           ";
         }else {
             echo "salah";
         }
       }
     }



     public function update3($id){
       $this->load->helper('form');
       $this->load->library('form_validation');

       $this->form_validation->set_rules('judul','judul','required');
       $this->form_validation->set_rules('deskripsi','deskripsi','required');



       if ($this->form_validation->run()=== FALSE) {
           $data['online'] = $this->batik_model->get_batik_id($id,'online');
           $this->load->view('templates/header');
           $this->load->view('admin/update_online',$data);
           $this->load->view('templates/footer');
       } else {
         $data = array(
           'judul'=> $this->input->post('judul',TRUE),
           'deskripsi'=> $this->input->post('deskripsi',TRUE)
              );



           if ($this->batik_model->update($id, $data,'online') === TRUE ) {

             echo "
             <script>
               alert('data berhasil diubah');
               window.location.href = '" . base_url() . "admin/online';
             </script>
             ";
           }else {
               echo "salah";
           }
         }
       }




public function delete($id){
  $this->batik_model->delete_data($id);
  redirect('admin/table');
}
public function delete1($id){
  $this->batik_model->delete_data1($id);
  redirect('admin/kontak');
}






}
