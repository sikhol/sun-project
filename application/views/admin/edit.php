<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Product</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Edit Product
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">

                                      <?php echo validation_errors(); ?>

                                      <?php echo form_open_multipart('admin/ubah/'.$coba['id'], ['role'=>'form']);?>




                                        <div class="form-group">
                                            <label>Gambar Product</label>
                                          </div>
                                            <input type="file" name="foto" required><br>
                                            <img src="<?php echo base_url().'assets/img/uploads/';?><?php echo $coba['gambar'] ?>" width="100"/><br><br>






                                        <button name="edit-head" type="submit" class="btn btn-default" value="upload" >edit</button>
                                        <?php echo form_close(); ?>

                                </div>
                                <!-- /.col-lg-6 (nested) -->

                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?php echo base_url('assets/vendor/metisMenu/metisMenu.min.js') ?>"></script>

        <!-- Morris Charts JavaScript -->
        <script src="<?php echo base_url('assets/vendor/raphael/raphael.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/vendor/morrisjs/morris.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/data/morris-data.js') ?>"></script>
        <script src="<?php echo base_url('assets/vendor/datatables/js/jquery.dataTables.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/vendor/datatables-plugins/dataTables.bootstrap.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/vendor/datatables-responsive/dataTables.responsive.js') ?>"></script>

        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                    responsive: true
                });
            });
        </script>
        <!-- Custom Theme JavaScript -->
        <script src="<?php echo base_url('assets/js/sb-admin-2.js') ?>"></script>

        </body>

        </html>
