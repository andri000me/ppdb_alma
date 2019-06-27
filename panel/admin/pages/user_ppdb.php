<style>
.table th{
	font-size: 8pt;

}
.table td{
	font-size: 8pt;
}
</style>
<link rel="stylesheet" type="text/css" href="../../assets/DataTables/jquery.dataTables.min.css">
<!-- data tables -->
<script src="../../assets/DataTables/jquery-3.1.0.js"></script>
<script src="../../assets/DataTables/jquery.dataTables.min.js"></script>
<div class="col-md-12">
	<div class="panel panel-primary">

		<div class="panel-heading">
			User PPDB
			<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#ModalTambah"><span class="glyphicon glyphicon-plus"></span></button>
			<!--<a href="javascript:void(0);" data-toggle='modal' data-target="modalTambah" class="btn btn-info"><span class="glyhpicon glyphicon-plus"></span></a>-->
		</div>
		<div class="panel-body">
			<table id="tabel-data" class="table table-responsive table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama User</th>
						<th>Level</th>
						<th>Aksi</th>
					</tr>
				</thead>

				<tbody>
					<?php
// buat koneksi dengan MySQL, gunakan database: universitas
					include "../../config/koneksi.php";
					$no=1;
// jalankan query
					$result = mysqli_query($konek, "SELECT * FROM user where user_status='1'");
// tampilkan query
					while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
						{?>
							<tr>
								<td><?php echo $no++;?></td>
								
								<td><?php echo $row['username'];?></td>
								
								<td><?php echo $row['level'];?></td>
                                <td>
                                    <a href='#myModal' class='btn btn-warning' data-toggle='modal' data-id="<?php echo $row['id'];?>"><span class='glyphicon glyphicon-pencil'></span> Ubah</a>
                                    <a href="../../process/delete_user_ppdb?id=<?php echo $row['id'];?>" class="btn btn-danger" title="Hapus"><span class="glyphicon glyphicon-trash"></span></a>
                                </td>
						<?php }
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>



	<script>
		$(document).ready(function(){
			$('#tabel-data').DataTable();
		});
		
		$(document).ready(function(){
            $('#myModal').on('show.bs.modal', function (e) {
                var rowid = $(e.relatedTarget).data('id');
                //menggunakan fungsi ajax untuk pengambilan data
                $.ajax({
                    type : 'post',
                    url : 'pages/ubah_userppdb.php',
                    data :  'rowid='+ rowid,
                    success : function(data){
                    $('.fetched-data').html(data);//menampilkan data ke dalam modal
                }
                });
            });
        });
	</script>
	
	
	<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
    
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Ubah Data User PPDB</h4>
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

<div id="ModalTambah" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah User PPDB</h4>
      </div>
      <div class="modal-body">
         <form method="post" action="../../process/simpan-userppdb.php">
            <table>
                <tr>
                    <td>User</td>
                    <td>:</td>
                    <td><input type="text" class="form-control" name="username" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="password" class="form-control" name="password" required></td>
                </tr>
                <tr>
                    <td>Level</td>
                    <td>:</td>
                    <td>
                        <select class="form-control" name="level" required>
                            <option value="admin"> ADMIN </option>
                            <option value="ppdb"> PPDB </option>
                        </select>
                    </td>
                </tr>
            </table>
        
      </div>
      <div class="modal-footer">
          <button type="submit" class="btn btn-info">Tambah</button>
          </form>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
