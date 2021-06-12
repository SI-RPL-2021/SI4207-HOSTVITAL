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
            <h1>Laporan Data Penjualan Obat</h1>
            <h3>Total Transaksi Penjualan Obat  : {{ $jumklahdata }} </h3>
            <h3>Total Biaya Penjualan Obat : IDR {{ number_format($jumlahharga, 0, ',', '.') }}   </h3>
        </div>
    </center>
    <table id="customers">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Pembeli</th>
            <th scope="col">Nama Obat</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Harga</th>
            <th scope="col">Total</th>
            <th scope="col">status</th>
        </tr>
        @php
        $no =1;
        @endphp
            @foreach ($data as $row)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $row->nama_lengkap }}</td>
            <td>
                    @php
                        $obat = App\Models\Obat::find($row->obat_id);
                    @endphp
                    {{ $obat->nama }}
            </td>
            <td>{{ $row->qty }}</td>
            <td>IDR {{ number_format($obat->harga, 0, ',', '.') }}</td>
            <td>IDR {{ number_format($row->total, 0, ',', '.') }}</td>
             <td>{{ $row->status }}</td>
        </tr>
            @endforeach
       
    </table>

</body>

</html>