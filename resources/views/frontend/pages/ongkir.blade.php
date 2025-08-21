<div class="container">
    <h1>Ongkos Kirim</h1>

    <h2>Asal:</h2>
    <p>Propinsi: {{ $originProvince->province_name }}</p>
    <p>Kota: {{ $originCity->city_name }}</p>

    <h2>Tujuan:</h2>
    <p>Propinsi: {{ $destinationProvince->province_name }}</p>
    <p>Kota: {{ $destinationCity->city_name }}</p>

    <h2>Ongkos Kirim:</h2>
    <ul>
        @foreach ($shippingCost as $cost)
            <li>
                Layanan: {{ $cost['service'] }}
                <ul>
                    @foreach ($cost['costs'] as $costData)
                        <li>{{ $costData['description'] }}: {{ $costData['cost'][0]['value'] }} {{ $costData['cost'][0]['etd'] }} hari</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
</div>
