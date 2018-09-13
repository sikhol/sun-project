<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Kontak</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Batik
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No </th>
                                        <th>Nama </th>
                                        <th>Tanggal Masuk</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Text</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                  <?php $i = 1; foreach ($depan as $u) :?>
                                    <tr class="odd gradeX">
                                        <td><?= $i ?></td>
                                        <td><?= $u['nama']?></td>
                                        <td><?= $u['tgl_masuk']?></td>
                                        <td class="center"><?= $u['email']?></td>
                                        <td><?= $u['subject']?></td>
                                        <td class="center"><?= $u['text']?></td>
                                        <td>

                                          <a href="<?php echo
                                              base_url('admin/delete1/'.$u['id']);?>">Hapus</a>
                                        </td>
                                    </tr>
                                  <?php $i++; endforeach; ?>

                                </tbody>
                            </table>
                            <!-- /.table-responsive -->

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <!-- /.row -->

            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
