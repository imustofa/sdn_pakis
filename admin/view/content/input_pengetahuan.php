<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <!-- Program Tahunan -->
      <!-- <small>New Hotel</small> -->
    </h1>
  </section>

  <!-- Main content -->
  <section class="content container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <!-- Kata Pengantar  -->
        <div class="col-lg-12 col-xs-12">
          <div class="box box-warning content">

            <!-- START CUSTOM TABS -->
                  <h2 class="page-header">Kata Ilmu Pengetahuan</h2>

                  <div class="row">
                    <div class="col-md-12">
                      <!-- Custom Tabs -->
                      <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                          <li class="active"><a href="#tab_1" data-toggle="tab">Data KIP</a></li>
                          <li><a href="#tab_2" data-toggle="tab">Laporan KIP</a></li>
                        </ul>
                        <div class="tab-content">
                          <div class="tab-pane active" id="tab_1">
                            <?php
                            $start  = $_REQUEST['start'];
                            $page   = 1;
                             ?>
                           <div class="table-responsive">
                            <table id="app" class="table table-border">
                              <tr>
                                <th width="5%" style="text-align:center">Id</th>
                                <th width="15%" style="text-align:center">Foto Buku</th>
                                <th width="25%">Judul</th>
                                <th width="25%">Siswa</th>
                                <th width="10%" style="text-align:center">Tgl Baca</th>
                                <th width="20%" style="text-align:center">Option</th>
                              </tr>
                              <template  v-for="data in info">
                                <tr>
                                  <td width="5%" style="text-align:center">{{ data.PENGETAHUAN_ID }}</td>
                                  <td width="15%" style="text-align:center">
                                  </td>
                                  <td width="20%">{{ data.PENGETAHUAN_JUDUL }}</td>
                                  <td width="25%">{{ data.PENGETAHUAN_SISWA }}</td>
                                  <td width="10%" style="text-align:center">{{ data.PENGETAHUAN_TANGGAL }}</td>
                                  <td width="20%" style="text-align:center">
                                    <button type="button" onclick="VIEW_PENGETAHUAN('tx_hdr_buku_membaca', 2,'PENGETAHUAN_ID',<?php echo $start; ?>,<?php echo $page; ?>)" class="btn btn-primary option"><i class="fa fa-eye"></i></button>
                                  </td>
                                </tr>
                              </template>
                              <tr>
                                <td colspan="3">
                                  <?php
                                    $prev = $start-25;
                                    if ($prev < 0) $prev = 0;
                                    $next = $start+25;
                                   ?>
                                  <a href="<?php echo $urlPageMembaca.$prev; ?>" type="button" name="button" class="btn btn-primary"><</a>
                                </td>
                                <td colspan="3">
                                  <a href="<?php echo $urlPageMembaca.$next; ?>" style="float:right" type="button" class="btn btn-primary">></a>
                                </td>
                              </tr>
                            </table>
                          </div>
                          </div>
                          <!-- /.tab-pane -->
                          <div class="tab-pane" id="tab_2">
                            <div class="row">
                              <div class="col-md-12">
                                <form action="app/model/MembacaModel.php?id=modalMembaca" method="post" enctype="multipart/form-data">
                                  <table class="table table-responsive">
                                    <tr>
                                      <th width="5%">No</th>
                                      <th>Kalimat Pengetahuan</th>
                                      <th>Sumber Buku</th>
                                      <th>Halaman</th>
                                    </tr>
                                  <tr>
                                    <td width="5%" style="vertical-align:middle;text-align:center">
                                      1
                                    </td>
                                    <td width="45%">
                                      <input type="text" required class="form-control" name="DTL_KALIMAT_PENGETAHUAN[]" value="">
                                    </td>
                                    <td width="35%">
                                      <input type="text" required class="form-control" name="DTL_SUMBER_BUKU[]" value="">
                                    </td>
                                    <td width="15%">
                                      <input type="text" required class="form-control" name="DTL_HALAMAN[]" value="">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td width="5%" style="vertical-align:middle;text-align:center">
                                      2
                                    </td>
                                    <td width="45%">
                                      <input type="text" required class="form-control" name="DTL_KALIMAT_PENGETAHUAN[]" value="">
                                    </td>
                                    <td width="35%">
                                      <input type="text" required class="form-control" name="DTL_SUMBER_BUKU[]" value="">
                                    </td>
                                    <td width="15%">
                                      <input type="text" required class="form-control" name="DTL_HALAMAN[]" value="">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td width="5%" style="vertical-align:middle;text-align:center">
                                      3
                                    </td>
                                    <td width="45%">
                                      <input type="text" required class="form-control" name="DTL_KALIMAT_PENGETAHUAN[]" value="">
                                    </td>
                                    <td width="35%">
                                      <input type="text" required class="form-control" name="DTL_SUMBER_BUKU[]" value="">
                                    </td>
                                    <td width="15%">
                                      <input type="text" required class="form-control" name="DTL_HALAMAN[]" value="">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td width="5%" style="vertical-align:middle;text-align:center">
                                      4
                                    </td>
                                    <td width="45%">
                                      <input type="text" required class="form-control" name="DTL_KALIMAT_PENGETAHUAN[]" value="">
                                    </td>
                                    <td width="35%">
                                      <input type="text" required class="form-control" name="DTL_SUMBER_BUKU[]" value="">
                                    </td>
                                    <td width="15%">
                                      <input type="text" required class="form-control" name="DTL_HALAMAN[]" value="">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td width="5%" style="vertical-align:middle;text-align:center">
                                      5
                                    </td>
                                    <td width="45%">
                                      <input type="text" required class="form-control" name="DTL_KALIMAT_PENGETAHUAN[]" value="">
                                    </td>
                                    <td width="35%">
                                      <input type="text" required class="form-control" name="DTL_SUMBER_BUKU[]" value="">
                                    </td>
                                    <td width="15%">
                                      <input type="text" required class="form-control" name="DTL_HALAMAN[]" value="">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td width="5%" style="vertical-align:middle;text-align:center">
                                      6
                                    </td>
                                    <td width="45%">
                                      <input type="text" required class="form-control" name="DTL_KALIMAT_PENGETAHUAN[]" value="">
                                    </td>
                                    <td width="35%">
                                      <input type="text" required class="form-control" name="DTL_SUMBER_BUKU[]" value="">
                                    </td>
                                    <td width="15%">
                                      <input type="text" required class="form-control" name="DTL_HALAMAN[]" value="">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td width="5%" style="vertical-align:middle;text-align:center">
                                      7
                                    </td>
                                    <td width="45%">
                                      <input type="text" required class="form-control" name="DTL_KALIMAT_PENGETAHUAN[]" value="">
                                    </td>
                                    <td width="35%">
                                      <input type="text" required class="form-control" name="DTL_SUMBER_BUKU[]" value="">
                                    </td>
                                    <td width="15%">
                                      <input type="text" required class="form-control" name="DTL_HALAMAN[]" value="">
                                    </td>
                                  </tr>
                                  </table>
                              </div>
                              <div class="col-md-12">
                                <button type="submit" class="btn btn-success" name="button" style="width:100%;margin-top:20px">Simpan</button>
                              </div>
                            </form>
                            </div>
                          </div>
                          <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                      </div>
                      <!-- nav-tabs-custom -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                  <!-- END CUSTOM TABS -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      <!-- End Kata Pengantar -->
    </div>

  </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php if ($session["USER_ROLE"] == "1") { ?>
  <script type="text/javascript">
    start   = <?php echo $start; ?>;
    var url = "<?php echo $urlApi; ?>";
    new Vue({
        el: '#app',
        data () {
          return {
            info: null
          }
        },
        mounted () {
          axios
          .post(url+'/index', {
            action: 'list',
            db: 'sdnpakis',
            table: 'tx_hdr_buku_membaca',
            where : [['PENGETAHUAN_SISWA','=', '<?php echo $siswa["DTL_NIS"]; ?>']],
            start: start,
            orderBy: ['PENGETAHUAN_ID', 'DESC'],
            limit: 25
          })
          .then(response => (this.info = response["data"]["result"]))
        }
      })
  </script>
<?php } else {?>
  <script type="text/javascript">
    start   = <?php echo $start; ?>;
    var url = "<?php echo $urlApi; ?>";
    new Vue({
        el: '#app',
        data () {
          return {
            info: null
          }
        },
        mounted () {
          axios
          .post(url+'/index', {
            action: 'list',
            db: 'sdnpakis',
            table: 'tx_hdr_buku_membaca',
            start: start,
            orderBy: ['PENGETAHUAN_ID', 'DESC'],
            limit: 25
          })
          .then(response => (this.info = response["data"]["result"]))
        }
      })
  </script>
<?php } ?>


<script type="text/javascript">
function DELETE_PENGETAHUAN(id, start, page) {
  var url = "<?php echo $urlApi; ?>";
  new Vue({
      el: '#app',
      data () {
        return {
          info: null
        }
      },
      mounted () {
        axios
        .post(url+'/store', {
          action: 'simpleDelete',
          db: 'sdnpakis',
          table: 'tx_hdr_buku_membaca',
          where : ["PENGETAHUAN_ID", id]
        })
        .then(response => (alert(this.info = response["data"])))
        .then(response=>(window.location = "<?php echo $urlPageMembaca; ?>"+start+"&page="+page));
      }
    })
}

function EDIT_PENGETAHUAN(id, start, page) {
  alert(id);
}
</script>
