<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Invoice</title>

<style type="text/css">
    * {
        font-family: Verdana, Arial, sans-serif;
    }
    table{
        font-size: x-small;
    }
    tfoot tr td{
        font-weight: bold;
        font-size: x-small;
    }
    .gray {
        background-color: lightgray
    }
    .font{
      font-size: 15px;
    }
    .authority {
        /*text-align: center;*/
        float: right
    }
    .authority h5 {
        margin-top: -10px;
        color: green;
        /*text-align: center;*/
        margin-left: 35px;
    }
    .thanks p {
        color: green;;
        font-size: 16px;
        font-weight: normal;
        font-family: serif;
        margin-top: 20px;
    }
</style>

</head>
<body>
    @php
    $setting = App\Models\SiteSetting::find(1);
    @endphp

  <table width="100%" style="background: #F7F7F7; padding:0 20px 0 20px;">
    <tr>
        <td valign="top">
         <img src="{{ $setting->logo }}" alt="" width="150"/>
          {{-- <h2 style="color: green; font-size: 26px;"><strong>Code Tree</strong></h2> --}}
        </td>
        <td align="right">
            <div class="font" >
               <p>Email:{{ $setting->email }} </p>
               <p>Mob: +88{{ $setting->phone }}  </p>
               <p>House: {{ $setting->address }}</p>

            </div>
        </td>
    </tr>

  </table>


  <table width="100%" style="background:white; padding:2px;"></table>

  <table width="100%" style="background: #F7F7F7; padding:0 5 0 5px;" class="font">
    <tr>
        <td>
          <p class="font" style="margin-left: 20px;">
           <strong>Name:</strong> {{ $payment->name }} <br>
           <strong>Email:</strong> {{ $payment->email }} <br>
           <strong>Phone:</strong> {{ $payment->phone }} <br>

           <strong>Address:</strong> {{ $payment->address }} <br>

         </p>
        </td>
        <td>
          <p class="font">
            <h3><span style="color: green;">Invoice:</span> #{{ $payment->invoice_no }}</h3>
            Order Date: {{ $payment->order_date }} <br>
             Delivery Date: {{ $payment->order_date }} <br>
            Payment Type : {{ $payment->payment_type }} </span>
         </p>
        </td>
    </tr>
  </table>
  <br/>
<h3>Products</h3>


  <table width="100%">
    <thead style="background-color: green; color:#FFFFFF;">
      <tr class="font">
        <th>Image</th>
        <th>Course Name</th>
        <th>Category Name</th>
        <th>Instructor Name</th>
        <th>Course Price </th>

      </tr>
    </thead>
    <tbody>

     @foreach ($orderItem as $item)


      <tr class="font">
        <td align="center">
            <img src="{{ public_path($item->course->course_image) }}" height="60px;" width="60px;" alt="">
        </td>
        <td align="center">{{ $item->course->course_name }}</td>
        <td align="center">{{ $item->course->category->category_name }}</td>
        <td align="center">{{ $item->instructor->name }}</td>
        <td align="center">${{ $item->price }}</td>

      </tr>
      @endforeach

    </tbody>
  </table>
  <br>
  <table width="100%" style=" padding:0 10px 0 10px;">
    <tr>
        <td align="right" >
            <h2><span style="color: green;">Subtotal:</span> {{ $payment->total_amount }}</h2>
            <h2><span style="color: green;">Total:</span> {{ $payment->total_amount }}</h2>

        </td>
    </tr>
  </table>
  <div class="mt-3 thanks">
    <p>Thanks For Buying Course..!!</p>
  </div>
  <div class="float-right mt-5 authority">
      <p>-----------------------------------</p>
      <h5>Authority Signature:</h5>
    </div>
</body>
</html>
