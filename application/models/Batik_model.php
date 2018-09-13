<?php
class Batik_model extends CI_Model{

	public function __construct(){

		$this->load->database();
	}

	function data($number,$offset){
		$output='';
		$batik = $this->db->order_by('id','desc')->get('produk',$number,$offset)->result_array();
		$i=0; $scp = base_url("assets/js/ninja-slider.js");
		foreach ($batik as $u ) {
			$src = base_url()."assets/img/uploads/".$u['gambar'];
			$nm = $u['nama_product'];
			$hr = $u['harga'];
			$des = $u['deskripsi'];
			$output.='
				<script src="'; $output.=$scp; $output.='"></script>
				<div class="col-sm-3 produk-item" onclick="lightbox('; $output .= $i; $output .=')">
					<div class="col-sm-12 col-xs-6">
						<img src="'; $output .= $src; $output .='" alt="" class="img-responsive" id="zoom"/>
					</div>
					<div class="col-sm-12 col-xs-6">
						<h3 class="sub-jdl-produk">'; $output .= $nm; $output.='</h3>
						<h4 class="sub-jdl-produk" style="color:#555">'; $output .= $hr; $output.='</h4>
						<p class="p-about" style="text-align: left">'; $output .= $des; $output.='</p>
					</div>
				</div>
			';
			$i++;
		}
		$output .='
			<br><br><br>
			<div id="ninja-slider" style="display:none">
	            <div class="slider-inner">
	                <ul>
		';
		foreach ($batik as $slide) {
			$src = base_url()."assets/img/uploads/".$slide['gambar'];
			$nm = $slide['nama_product'];
			$hrga = $slide['harga'];
			$des = $slide['deskripsi'];
			$output .='
                <li>
                    <a class="ns-img" href="'; $output .= $src; $output .='"></a>
                    <div class="caption">

                        <h3>'; $output .= $nm; $output.='</h3>
												<h4>'; $output .= $hrga; $output.='<h4>
                        <p>'; $output .= $des; $output.='</p>
                    </div>
                </li>
		    ';
		}
		$output .='
					</ul>
			    <div id="fsBtn" class="fs-icon" title="Expand/Close"></div>
			</div>
		';
		return $output;
	}

	public function get_batik($table){
		if($table == 'produk'){
		$this->db->order_by('tgl_produk', 'DESC');
	}
		$query=$this->db->get($table);
		return $query->result_array();
	}
	// public function get_about(){
	// 	$query=$this->db->get('ongkir');
	// 	return $query->result_array();
	// }

	public function get_counter(){
		$query=$this->db->get('data');
		return $query->result_array();
	}

	public function batik_paginate($number, $offset) {
		return $this->db->get('produk',$number, $offset)->result_array();
	}

	public function jum_batik() {

		return $this->db->get('produk')->num_rows();
	}
	public function get_frontend(){
		$this->db->order_by('tgl_masuk', 'DESC');
    $query=$this->db->get('kontak');
    return $query->result_array();
  }

  public function insert($data,$table)
  {
   $this->db->insert($table, $data);
  }

  	public function counter() {
  		$dnow = date('Y-m-d');
  		$cek = $this->db->get_where('data',array('date'=>$dnow))->num_rows();
  		if ($cek > 0) {
  			$this->db->set('counter','counter+1', FALSE)->where('date',$dnow)->update('data');
  		} else {
  			$this->db->insert('data', array('date'=>$dnow, 'counter'=>1));
  		}
	}

	public function get_batik_id($id,$table){
	 $query=$this->db->get_where($table, array('id'=>$id));
	 return $query->row_array();
	}
	public function get_ubah_id($id){
	 $query=$this->db->get_where('head', array('id'=>$id));
	 return $query->row_array();
	}


	public function update($id, $data, $table){
	 $this->load->helper('url');

	 $this->db->where('id',$id);
	 return $this->db->update($table, $data);

	}
	public function updategambar($id,$data){
	 $this->load->helper('url');

	 $this->db->where('id',$id);
	 return $this->db->update('head', $data);

	}

	  public function set_batik(){
	    $this->load->helper('url');

	    $data=array(
	      'nama'=> $this->input->post('nama'),
	      'email'=> $this->input->post('email'),
	      'subject'=> $this->input->post('subject'),
	      'text'=> $this->input->post('text')
	    );
	    return $this->db->insert('kontak', $data);

	  }




		public function delete_data($id){
		 return $this->db->delete('produk',array('id'=>$id));
		}
		public function delete_data1($id){
		 return $this->db->delete('kontak',array('id'=>$id));
		}

		function cek_login($table,$where){
				return $this->db->get_where($table,$where);
		}







}
