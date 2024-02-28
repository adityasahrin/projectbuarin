{{-- @dd($FakultasEkonomi) --}}
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row justify-content-center text-center mt-3">
            <h3>Data Bar Chart</h3>
            @foreach ($fakultasDataGraph as $fakultas => $data)
                @if ($data->isNotEmpty())
                    <div class="col-md-6 mt-3">
                        <h4>{{ $fakultas }}</h4>
                        <canvas id="chart-{{ $fakultas }}" class="chart-container"
                            data-fakultas="{{ $fakultas }}" data-chart-data="{{ json_encode($data) }}"></canvas>
                    </div>
                @endif
            @endforeach
        </div>

        <div class="row justify-content-center text-center my-3">
            <h4>Data Tabel</h4>
            <div class="col-md-8">
                <select id="selectFakultas" class="form-select form-select-sm fw-bold border border-dark">
                    <option value="">Pilih Fakultas</option>
                    @foreach ($fakultasList as $fakultas)
                        <option value="{{ $fakultas }}">{{ $fakultas }}</option>
                    @endforeach
                </select>
                <div id="fakultasTableContainer" class="mt-2"></div>
            </div>
        </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/gh/adityasahrin/laravel-js/chartFakultas.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/adityasahrin/laravel-js/dataTabel.js"></script>

</body>

</html>
