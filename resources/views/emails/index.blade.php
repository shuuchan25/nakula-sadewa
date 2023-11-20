<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Nakula Sadewa</title>
  <style>
    .container {
      text-align: center;
    }
    .header-title {
      line-height: 0;
    }
    .header-info {
      line-height: 2px;
      font-size: 10px;
    }
    .header-table {
      margin-top: 20px;
      font-size: 13px;
      width: 100%;
      padding: 5px 0 5px 0;
      border: 0.5px solid black;
      border-left: 0;
      border-right: 0;
    }
    .header-table .dua {
      text-align: center;
      border: 0.5px solid black;
      border-top: 0;
      border-bottom: 0;
    }
    .header-table .tiga {
      text-align: right;
    }
    .content-table {
      margin-top: 3px;
      font-size: 12px;
      color: #575757;
      width: 100%;
      padding: 5px 0 5px 0;
      border: 0.5px solid black;
      border-left: 0;
      border-right: 0;
    }
    .content-table .dua {
      text-align: right;
    }
    .subtotal-table {
      font-size: 12px;
      color: #575757;
      width: 100%;
      padding: 5px 0 5px 0;
      border: 0.5px solid black;
      border-top: 0;
      border-left: 0;
      border-right: 0;
    }
    .subtotal-table .dua {
      text-align: right;
    }
    .total-table {
      margin-bottom: 20px;
      font-size: 12px;
      font-weight: bold;
      width: 100%;
      padding: 5px 0 5px 0;
      border: 0.5px solid black;
      border-top: 0;
      border-left: 0;
      border-right: 0;
    }
    .total-table .dua {
      text-align: right;
    }
    .footer-info {
      font-size: 8px;
      color: #575757;
    }
  </style>
</head>
<body>
  <div class="container">
    <h3 class="header-title">NAKULA SADEWA</h3>
    <p class="header-info">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="10" height="10">
        <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/>
      </svg>
      021-345-6897
    </p>
    <p class="header-info">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="10" height="10">
        <path d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z"/>
      </svg>
      nakulasadewa@gmail.com
    </p>
    <p class="header-info">Dinas Pariwisata dan Kebudayaan</p>
    <p class="header-info">Kab. Trenggalek</p>
  </div>
  <table class="header-table">
    <tr>
      <td width="33%" class="satu">KODE NO. {{ $transaction->id }}</td>
      <td width="33%" class="dua">RECEIPT</td>
      <td width="33%" class="tiga">DATE {{ date('d-m-Y', strtotime($transaction->created_at)) }}</td>
    </tr>
  </table>
  <table class="content-table">
    @foreach($allItems as $item)
      @if($item['category'] === 'Attraction')
        <tr>
          <td width="70%" class="satu">{{ $item['name'] }}</td>
        </tr>
        <tr>
          <td width="70%" class="satu">{{ $item['quantity'] }} item</td>
          <td width="30%" class="dua">Rp{{ number_format($item['subtotal'], 0, ',', '.') }}</td>
        </tr>
      @endif
      @if($item['category'] === 'Hotel')
        <tr>
          <td width="70%" class="satu">{{ $item['name']}} - {{ $item['room'] }}</td>
        </tr>
        <tr>
          <td width="70%" class="satu">{{ $item['quantity'] }} item x {{ $item['sub_quantity'] }} malam</td>
          <td width="30%" class="dua">Rp{{ number_format($item['subtotal'], 0, ',', '.') }}</td>
        </tr>
      @endif
      @if($item['category'] === 'Culinary')
        <tr>
          <td width="70%" class="satu">{{ $item['name']}} - {{ $item['menu'] }}</td>
        </tr>
        <tr>
          <td width="70%" class="satu">{{ $item['quantity'] }} item</td>
          <td width="30%" class="dua">Rp{{ number_format($item['subtotal'], 0, ',', '.') }}</td>
        </tr>
      @endif
      @if($item['category'] === 'Travel')
        <tr>
          <td width="70%" class="satu">{{ $item['name'] }}</td>
        </tr>
        <tr>
          <td width="70%" class="satu">{{ $item['quantity'] }} item</td>
          <td width="30%" class="dua">Rp{{ number_format($item['subtotal'], 0, ',', '.') }}</td>
        </tr>
      @endif
    @endforeach
  </table>
  <table class="subtotal-table">
    <tr>
      <td width="50%" class="satu">Subtotal</td>
      <td width="50%" class="dua">Rp{{ number_format($transaction->total, 0, ',', '.') }}</td>
    </tr>
    <tr>
      <td width="50%" class="satu">Taxes</td>
      <td width="50%" class="dua">Rp0</td>
    </tr>
  </table>
  <table class="total-table">
    <tr>
      <td width="50%" class="satu">Total</td>
      <td width="50%" class="dua">Rp{{ number_format($transaction->total, 0, ',', '.') }}</td>
    </tr>
  </table>
  <div class="container">
    <h3 class="footer-title">""THANK YOU""</h3>
    <p class="footer-info">Copyright © Nakula Sadewa All rights reserved.</p>
  </div>
</body>
</html>