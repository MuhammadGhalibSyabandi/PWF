<!doctype html>
  <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
  </head>
  <body>
    <nav>
        @include('Navbar.navbar')
    </nav>
    <div class="container">
        <h2>Nilai Mahasiswa</h2>
        <div class="col-md-6">
            <table class="table table-bordered table-striped">
                <tr class="text-md-center">
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Total Nilai</th>
                </tr>
                <tr>
                    <td>{{ $nama }}</td>
                    <td>{{ $nim }}</td>
                    <td>
                        @foreach ($total_nilai as $nilai) 
                            <div class="alert alert-danger d-inline-block">{{ $nilai }}</div>
                        @endforeach
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <footer>
        @include('Footer.footer')
    </footer>
</body>
</html>

