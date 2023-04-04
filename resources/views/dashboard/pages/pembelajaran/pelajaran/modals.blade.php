{{-- Modal hapus data --}}
<div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title" id="modal-title-notification">Peringatan</h6>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="py-3 text-center">
            <i class="ni ni-bell-55 ni-3x"></i>
            <h4 class="text-gradient text-danger mt-4">Yakin Akan Menghapus Data ini ?</h4>
            <p>data akan terhapus saat anda memilih tombol Yakin!.</p>
            <p style="font-weight: bold">menghapus mungkin akan mempengaruhi data karyawan.</p>
          </div>
        </div>
        <div class="modal-footer">
          <form method="post" id="form-delete">
            @csrf
            @method("delete")
            <button type="submit" class="btn btn-white">Yakin</button>
            <button type="button" class="btn btn-link  ml-auto" data-bs-dismiss="modal">Batal</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script>    
    $(document).on("click","#open-deletemodal", function(){
      $("#form-delete")[0].setAttribute("action","/pembelajaran/pelajaran/"+$(this).data('id')+"/delete")
    })
    </script>

{{-- modal untuk edit --}}
<div class="modal fade" id="editMapelModal" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-md" role="document">
    <div class="modal-content">
      <div class="modal-body p-0">
        <div class="card card-plain">
          <div class="card-header pb-0 text-left">
            <h3 class="font-weight-bolder card-title">Edit Data Mata Pelajaran</h3>
          </div>
          <div class="card-body">
            <i class="fa fa-spinner fa-spin"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>


<script>
$(document).ready(function($){
  $("#editMapelModal").on("show.bs.modal", function(e){
    var button = $(e.relatedTarget);
    var modal = $(this);

    modal.find(".card-body").load(button.data("remote"))
  })
})
</script>


{{-- Modal Input Data --}}
<div class="modal fade" id="inputMapelModal" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
      <div class="modal-content">
        <div class="modal-body p-0">
          <div class="card card-plain">
            <div class="card-header pb-0 text-left">
              <h3 class="font-weight-bolder">Input Data Pelajaran</h3>
            </div>
            <div class="card-body">
              <form role="form text-left" action="{{ route("pelajaran.store") }}" method="post">
                @csrf
                @method("POST")
                <label>Mata Pelajaran</label>
                <div class="input-group mb-3">
                  <input name="nama" type="text" class="form-control" placeholder="Mata Pelajaran" required>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">Tambahkan Data</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>