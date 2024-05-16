@extends('back.layouts.template')

@section('content')
   
 <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
   @if($message = Session::get('success'))
    <script>
        Swal.fire({
            title: "Thank You",
            text: "{{ Session::get('success') }}",
            // background: "#00C853"
            // color: "#FAFAFA",
            icon: "success"
        });
    </script>
@endif
 

      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Setting Halaman Portofolio</h1>
        
        <div class="btn-toolbar mb-2 mb-md-0">
          <button type="button" class="btn btn-sm btn-outline-secondary ">
            <span data-feather="calendar"></span>
            <span id="tanggalwaktu"></span>
          </button>
        </div>
      </div>
    
      
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">NO</th>
              <th scope="col">HALAMAN HOME</th>
              <th scope="col">HALAMAN ABOUT</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @php
               $counter = 1; // inisialisasi counter
              @endphp
            @foreach ($abouts as $data)
            <tr>
              <td>{{ $counter++ }}</td>
              <td>{{ $data->home }}</td>
              <td>{{ $data->isi }}</td>
              <td>
                <a href="{{ url('admin/setting/update/'.$data->id) }}" class="btn btn-success" >Update</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      
    </main>
  </div>
</div>
<script>
  function confirmDelete(url) {
    Swal.fire({
      title: "Are you sure?",
      text: "to delete this data",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, delete it!"
    }).then((result) => {
      if (result.isConfirmed) {
        // Redirect to the delete URL
        window.location.href = url;
      }
    });
  }
var dt = new Date();
document.getElementById("tanggalwaktu").innerHTML = dt.toLocaleDateString();

  
</script>
@endsection


