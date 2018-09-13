

          <div id="page-wrapper">
              <div class="row">
                  <div class="col-lg-12">
                      <h1 class="page-header">Dashboard</h1>
                  </div>
                  <!-- /.col-lg-12 -->
              </div>
              <!-- /.row -->
              <div class="row">
                <div class="col-sm-12">
                  <h1>Selamat Datang Admin</h1><br>
                </div>




              </div>
              <!-- /.row -->
              <div class="row">
                  <div class="col-lg-8">
                      <div class="panel panel-default">
                          <div class="panel-heading">
                              <i class="fa fa-bar-chart-o fa-fw"></i> Statistik Pengunjung
                              <div class="pull-right">
                                  <div class="btn-group">
                                      <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                          Actions
                                          <span class="caret"></span>
                                      </button>
                                      <ul class="dropdown-menu pull-right" role="menu">
                                          <li><a href="#">Action</a>
                                          </li>
                                          <li><a href="#">Another action</a>
                                          </li>
                                          <li><a href="#">Something else here</a>
                                          </li>
                                          <li class="divider"></li>
                                          <li><a href="#">Separated link</a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                          <!-- /.panel-heading -->
                          <div class="panel-body">
                              <div id="morris-area-chart"></div>
                          </div>
                          <!-- /.panel-body -->
                      </div>
                      <!-- /.panel -->
                      <div class="panel panel-default">
                          <div class="panel-heading">
                              <i class="fa fa-bar-chart-o fa-fw"></i> Statistik Pengunjung
                              <div class="pull-right">
                                  <div class="btn-group">
                                      <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                          Actions
                                          <span class="caret"></span>
                                      </button>
                                      <ul class="dropdown-menu pull-right" role="menu">
                                          <li><a href="#">Action</a>
                                          </li>
                                          <li><a href="#">Another action</a>
                                          </li>
                                          <li><a href="#">Something else here</a>
                                          </li>
                                          <li class="divider"></li>
                                          <li><a href="#">Separated link</a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                          <!-- /.panel-heading -->

                          <!-- /.panel-body -->
                      </div>
                      <!-- /.panel -->

                      <!-- /.panel -->
                  </div>
                  <!-- /.col-lg-8 -->

                  <!-- /.col-lg-4 -->
              </div>
              <!-- /.row -->
          </div>
          <!-- /#page-wrapper -->

      </div>
      <!-- /#wrapper -->

      <!-- jQuery -->
      <script type="text/javascript">
      	var nama = <?php echo json_encode($graf); ?>;
        $(function() {

            Morris.Area({
                element: 'morris-area-chart',
                data: [
                  <?php foreach ($graf as $g): ?>
                  {
                    d: '<?php echo $g['date']; ?>',
                    visited: '<?php echo $g['counter']; ?>'
                  }
                  <?php endforeach; ?>
                ],
                xkey: 'd',
                ykeys: ['visited'],
                labels: ['visited'],
                hideHover: 'auto',
                resize: true
            });

        });

      </script>
