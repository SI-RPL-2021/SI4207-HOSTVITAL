<!DOCTYPE html>
<html>

<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #e92b2b;
            color: white;
        }
    </style>
</head>

<body>
    <center>
        <div class="row text-center">
            <h1>Laporan Data Rawat Inap</h1>
            <h3>Total Data Rawat Inap : {{ $jumklahdata }} </h3>
            <h3>Total Biaya Rawat Inap : IDR {{ number_format($jumlahharga, 0, ',', '.') }}   </h3>
        </div>
    </center>
    <table id="customers">
        <tr>
            <th>No</th>
            <th>Nama Pasien</th>
            <th>Nama Rumah Sakit</th>
            <th>Tipe Kamar</th>
            <th>Harga</th>
            <th>Tanggal</th>
            <th>Status</th>
        </tr>
        @php
        $no =1;
        @endphp
            @foreach ($data as $row)
        <tr>
            <td>{{ $no++ }}</td>
            <td>
                @php
                $user = App\Models\User::find($row->id_user)
                @endphp
                {{ $user->firstname}} {{ $user->lastname}}
            </td>
            <td>{{ $row->namars }}</td>
            <td>{{ $row->tipekamar }}</td>
            
            <td>IDR {{ number_format($row->harga, 0, ',', '.') }}</td>

            @php
            $bukti = App\Models\reservasi::find($row->reservasi_id)
            @endphp
             <td>{{   date('d-m-Y', strtotime($bukti->created_at))}} </td>
             <td>{{ $row->status }}</td>
        </tr>
            @endforeach
       
    </table>

</body>

</html>