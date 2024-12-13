<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        /* Inline styles here */
        body {
            font-family: Arial, sans-serif;
        }

        .card {
            margin-top: 3%;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #464AC8;
            color: #fff;
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }

        .card-body {
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .card-footer {
            padding: 10px;
            background-color: #f8f9fa;
            border-top: 1px solid #ccc;
        }
    </style>
</head>

<body>
    <div class="card" style="margin-top: 3%; border: 1px solid #ccc; border-radius: 5px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <div class="card-header" style="background-color: #464AC8; color: #fff; padding: 10px; border-bottom: 1px solid #ccc;">
            <h2 class="text-light">Thank you {{$name}}  for choosing to order with us #{{$orderId}}</h2>
        </div>
        <div class="card-body" style="padding: 20px;">
            <table style="width: 100%; border-collapse: collapse; margin-top: 10px;">
                <thead>
                    <tr>
                        <th style="border: 1px solid #ddd; padding: 8px; text-align: left; background-color: #f2f2f2;">product</th>
                        <th style="border: 1px solid #ddd; padding: 8px; text-align: left; background-color: #f2f2f2;">price</th>
                        <th style="border: 1px solid #ddd; padding: 8px; text-align: left; background-color: #f2f2f2;">Duration</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th style="border: 1px solid #ddd; padding: 8px; text-align: left;">IPTV</th>
                        <th style="border: 1px solid #ddd; padding: 8px; text-align: left;">{{$price}}$</th>
                        @if ($price == 19)
                        <th style="border: 1px solid #ddd; padding: 8px; text-align: left;">1 month</th>
                        @elseif ($price == 55)
                        <th style="border: 1px solid #ddd; padding: 8px; text-align: left;">6 months</th>
                        @elseif ($price == 49)
                        <th style="border: 1px solid #ddd; padding: 8px; text-align: left;">12 months</th>
                        @elseif ($price == 59 )
                        <th style="border: 1px solid #ddd; padding: 8px; text-align: left;">12 months</th>
                        @else
                        <th style="border: 1px solid #ddd; padding: 8px; text-align: left;">12 months</th>
                        @endif
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer" style="padding: 10px; background-color: #f8f9fa; border-top: 1px solid #ccc;">
            <p>Thanks a bunch for filling that out.</p>
            <p>Your order will be delivered within a timeframe of 15 minutes to a maximum of 8 hours. If you haven't received your subscription within this time, please contact us via email at  : smarterstivi@gmail.com.
            </p>
            <p>We truly appreciate you taking the time to do this today. Thank you for being you.</p>
        </div>
    </div>
</body>

</html>
