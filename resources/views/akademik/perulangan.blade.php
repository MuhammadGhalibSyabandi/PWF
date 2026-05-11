<!doctype html>
  <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
        <h2>Perulangan ForEarch</h2>
        <div class="col-md-6">
            <h4>Nama = {{ $nama }}, Nim = {{ $nim }}</h4>
            Nilai =
            @foreach ($total_nilai as $nilai)
                @if ($nilai < 50)
                    @break
                @endif
                <div class="alert alert-danger d-inline-block">{{ $nilai }}</div>
            @endforeach
        </div>
    </div>
</body>
</html>

