   <link rel="stylesheet" type="text/css" href="../../assets/DataTables/jquery.dataTables.min.css">
   <!-- data tables -->
   <script src="../../assets/DataTables/jquery-3.1.0.js"></script>
   <script src="../../assets/DataTables/jquery.dataTables.min.js"></script>
   <div class="col-md-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Ubah data pendaftar
        </div>
        <div class="panel-body">
            
            <table id="tabel-data" class="table table-responsive table-bordered" width="100%" cellspacing="0" >
                <thead >
                    <tr>
                        <th width="20px" >No</th>
                        <th style="text-align: center;">Nomor Ujian Nasional</th>
                        <th style="text-align: center;">Nama</th>
                        <th style="text-align: center;">Jenis Kelamin</th>
                        <th style="text-align: center;">Sekolah Asal</th>
                        <th style="text-align: center;" colspan="2">Opsi</th>
                        <th style="text-align: center;">Cetak</th>


                    </tr>
                </thead>

                <tbody style="font-size: 8pt;">
                  <?php
// buat koneksi dengan MySQL, gunakan database: universitas
                  include "../../config/koneksi.php";
                  $no=1;
// jalankan query
                  $result = mysqli_query($konek, "SELECT * FROM tb_registrasi");
// tampilkan query
                  while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                    {?>
                       <tr>
                        <td style="text-align: right;"><?php echo $no++;?></td>
                        <td style="text-align: center;"><?php echo $row['no_un']." ";?></td>
                        <td><?php echo $row['nama']." ";?></td>
                        <td style="text-align: center;"><?php echo $row['jenis_kelamin']." ";?></td>
                        <td style="text-align: center;"><?php 
                        if ($row['nama_smp2']!=="") {
                            echo $row['nama_smp2']." ";
                        }else{
                            echo $row['nama_smp']." ";
                        }
                        ?></td>
                        <td style="text-align: center;"><?php echo "<a href='#myModal' class='btn btn-success btn-xs' id='custId' data-toggle='modal' data-id=".$row['id']."><span class='glyphicon glyphicon-pencil'></span> Ubah</a>"; ?>
                    </td>
                    <td style="text-align: center;"><a href="../../process/hapus.php?no_un=<?php echo $row['no_un']; ?>" onclick="javascript: return confirm('Anda yakin hapus ?')"><button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"> </span>Hapus</button></a>
                    </td>
                    <td style="text-align: center;"><a href="pages/kartu.php?no_un=<?php echo $row['no_un']; ?>"><button class="btn btn-info btn-xs"><span class="glyphicon glyphicon-print"> </span> cetak</button></a></td>

                </tr>
            <?php }
            ?>
        </tbody>
    </table>
</div>
</div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#myModal').on('show.bs.modal', function (e) {
            var rowid = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : 'pages/ubah.php',
                data :  'rowid='+ rowid,
                success : function(data){
                $('.fetched-data').html(data);//menampilkan data ke dalam modal
            }
        });
        });
    });
</script>

<script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });
</script>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Ubah Data Pendaftar</h4>
            </div>
            <div class="modal-body">

             <div class="fetched-data"></div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>

</div>
</div>
