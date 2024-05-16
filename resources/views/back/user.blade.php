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
 @if($message = Session::get('admin'))
    <script>
        Swal.fire({
            title: "Berhasil Login",
            text: "{{ Session::get('admin') }}",
            // background: "#00C853"
            // color: "#FAFAFA",
            icon: "success"
        });
    </script>
@endif

      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">User</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <a href="{{ url('cetak-user') }}" class="btn btn-sm btn-outline-secondary" target="_blank">Cetak Data</a>
            
            <!--<button type="button" class="btn btn-sm btn-outline-secondary">Export</button>-->
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary ">
            <span data-feather="calendar"></span>
            <span id="tanggalwaktu"></span>
          </button>
        </div>
      </div>
    
      <h2>Daftar User</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">NO</th>
              <th scope="col">NAME</th>
              <th scope="col">USERNAME</th>
              <th scope="col">EMAIL</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @php
               $counter = 1; // inisialisasi counter
              @endphp
            @foreach ($users as $data)
            <tr>
                @if ($data->level == 'user')
                
                <td>{{ $counter++ }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->username }}</td>
                <td>{{ $data->email }}</td>
                <td>
                  {{-- <a href="{{ url('/admin/user/delete/'.$data->id) }}" class="btn btn-danger">Delete</a> --}}
                  <a href="#" class="btn btn-danger" onclick="confirmDelete('{{ url('/admin/user/delete/'.$data->id) }}')">Delete</a>
                  {{--<a href="{{ url('back/portofolio/update/'.$data->id) }}" class="btn btn-success" >Update</a>--}}
                </td>
                @endif
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


