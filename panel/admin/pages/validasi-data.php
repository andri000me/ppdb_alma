<link rel="stylesheet" type="text/css" href="../../assets/DataTables/jquery.dataTables.min.css">
   <!-- data tables -->
   <script src="../../assets/DataTables/jquery-3.1.0.js"></script>
   <script src="../../assets/DataTables/jquery.dataTables.min.js"></script>
   <div class="col-md-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Validasi fisik data pendaftar
        </div>

        <div class="panel-body">
            <div class="col-lg-3">
                <label>Tingkatan</label>
                <select id="select" class="form-control">
                    <option>Semua</option>
                <?php
                    foreach(tingkatan() as $key=> $value){
                        echo "<option>$value</option>";
                    }
                ?>
                </select>
            </div>            
            <div id="data-tab" style="padding-top:80px"></div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $.ajax({
            type: "POST",
            url: "../../helper/admin_validasi_data.php",
            data: {tingaktan : ''},
            success: function (data) {
                $("#data-tab").html(data);
            }
        });

        $("#select").click(function(){

            var tingkatan = $("#select").val();

            $.ajax({
                type: "POST",
                url: "../../helper/admin_validasi_data.php",
                data: {tingkatan : tingkatan},
                success: function (data) {
                    // console.log(data);
                    $("#data-tab").html(data);
                }
            });

        });

    });
</script>


