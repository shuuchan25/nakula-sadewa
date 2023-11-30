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
      (0355) 793449
    </p>
    <p class="header-info">
      nakulasadewa.ub@gmail.com
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