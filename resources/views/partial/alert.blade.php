@if ($message = Session::get('success'))

<div class="alert alert-success alert-dismissible fade show" role="alert" id="alert">

  <strong>{{ $message }}</strong>

</div>

@endif 

    

@if ($message = Session::get('danger'))

<div class="alert alert-danger alert-dismissible fade show" role="alert" id="alert">

  <strong>{{ $message }}</strong>

</div>

@endif

     

@if ($message = Session::get('warning'))

<div class="alert alert-warning alert-dismissible fade show" role="alert" id="alert">

  <strong>{{ $message }}</strong>

</div>

@endif

     

@if ($message = Session::get('info'))

<div class="alert alert-info alert-dismissible fade show" role="alert" id="alert">

  <strong>{{ $message }}</strong>

</div>

@endif

@if(session()->has('failures'))
<table class="table table-warning">
    <tr>
        <th>Baris</th>
        <th>Attribute</th>
        <th>Error</th>
        <th>Value</th>
    </tr>

    @foreach (session()->get('failures') as $validasi)
        <tr>
            <td>{{ $validasi->row() }}</td>
            <td>{{ $validasi->attribute() }}</td>
            <td>
                <ul>
                    @foreach ($validasi->errors() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </td>
            <td>{{ $validasi->values()[$validasi->attribute()] }}</td>
        </tr>
    @endforeach
</table>
@endif

    

@if ($errors->any())

<div class="alert alert-danger alert-dismissible fade show" role="alert" id="alert">
  {{-- <strong>Periksa kembali setiap inputan yang dimasukkan</strong> --}}
  <ul>
    @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
  </ul>

</div> 

@endif


<!-- set timer alert -->
{{-- <script>
  window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
      $(this).remove(); 
    });
  }, 5000);
</script> --}}

<script>
  setTimeout(function() {
    $('#alert').fadeOut('fast');
  }, 5000); // <-- time in milliseconds
</script>