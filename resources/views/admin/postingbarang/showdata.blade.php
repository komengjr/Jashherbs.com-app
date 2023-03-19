<div class="modal-header">
    <h5 class="modal-title">{{$data[0]->nama_item}}</h5>
    <button type="button" class=" btn-danger" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <div class="">
        <img class="card-img-top" src="{{ url($data[0]->file_barang, []) }}" alt="Card image cap" />
        <div class="card-body">
          <h5 class="card-title">{{$data[0]->nama_item}}</h5>
          <p class="card-text">
            @php
                echo $data[0]->deskripsi_item;
            @endphp
          </p>
        </div>
        <div class="card-footer">
          <small>Last updated 3 mins ago</small>
        </div>
      </div>
    
</div>
{{-- <div class="modal-footer">
    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>
        Close</button>
    <button type="button" class="btn btn-success"><i class="fa fa-check-square-o"></i> Save
        changes</button>
</div> --}}