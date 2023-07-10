<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            color: #5b686c;
            width: 95%;
            margin: 20px auto;
        }
        .ml-2 {
            margin-left: 20px;
        }
        .row{width:100%;display:block;padding:0 40px;clear:both;}
        .heading{
            display:inline-block; color:#121212; margin: 10px 0 5px;
            font-size: 14px;
            text-transform: capitalize;
            font-weight: bold;
        }
        .block{
            margin: 50px auto;
        }
        table{
            border-collapse: collapse;
        }
        .desc_table thead tr th{
            background-color:#948FE3;border:solid 1px #948FE3;color:#fff;text-align: left;padding:5px 10px;
        }
        .desc_table tbody tr td{padding:10px 10px;}
        .subtotal_tbl  tbody tr td{
            padding: 8px 10px;
            font-size: 14px;
            font-weight: bold;

        }
        .subtotal_tbl  tbody tr th {
            font-weight: bold;
        }
        .inner_subtotal_tbl th, .inner_subtotal_tbl td {
            /*border: solid 1px #eee;*/
        }
        .invoice_tbl td, th{
            padding: 8px 5px;
            border: solid 1px #eee;
        }
        .invoice_block {
            width: 40%;
        }
        .invoice_block div{
            width: 100%;
        }
        .details {
            width: 100%;
        }
        .invoice_block .details {
            border: solid 1px #eee;
            padding: 10px;
        }
        .invoice_block .details .d-text {
            display: inline-block;
            width: 40%;
        }
        .clear-left {
            clear: right;
        }

        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }
    </style>
</head>
<body>
<div class="" style="width: 100%; margin: 30px  auto 30px;">
    <table style="width:100%;">
        <tr>
            <td style="width: 50%;">
                <h4 style="font-size: 22px; color: #020312;">OVO Cabs Pvt. Ltd.</h4>
                <p style="margin:10px 0;font-size:12px;">SCO 8, 6TH FLOOR, Ranjit Ave, B - Block, <br/> Amritsar, Punjab 143001</p>
                <p style="margin-top:10px; font-size:12px;">
                    <b>Phone no. : </b><span style="font-size:12px;">(+91) 8558010101, (+91) 9914255754</span>
                </p>
            </td>
            <td style="width: 50%;">
                <img src="https://ovo.bmninfotech.in/web/img/ovo.png" style="width:130px; float:right;"/>
            </td>
        </tr>
    </table>
</div>


<div class="" style="width: 100%; margin: 30px  auto 30px;">
    <table style="width:100%;" class="">
        {{-- <tbody>
            <tr>
                <td colspan="2" style="color: #948FE3; text-align: center; font-size: 24px; font-weight: bold;">Tax Invoice</td>
            </tr>
            <tr>
                <td>
                    <h4 class="heading heading2">Bill To</h4>
                    <p style="margin:8px 0;font-size: 14px; font-weight: bold;">
                        @if(isset($singleBookingDetail) && count($singleBookingDetail) > 0)
                            {{strtoupper($singleBookingDetail['get_user_name']['name'])}}
                        @endif
                    </p>
                    @if($singleBookingDetail['booking_panel'] != 'admin')
                        <p style="margin:8px 0; font-size: 14px;"><b>Email : </b>@if(isset($singleBookingDetail) && count($singleBookingDetail) > 0)<span style="font-size:14px;">{{$singleBookingDetail['get_user_name']['email']}}</span>@endif</p>
                    @endif
                    @if($singleBookingDetail['booking_panel'] == 'admin')
                        @if(isset($singleBookingDetail) && count($singleBookingDetail) > 0)
                            <p>
                                <span style="font-size:14px;">
                                    {{$singleBookingDetail['get_user_name']['addressInfo']['address']}}
                                    ,
                                    {{$singleBookingDetail['get_user_name']['addressInfo']['city']}}
                                </span>
                            </p>
                        @endif
                    @endif

                    <p style="margin:8px 0;font-size: 14px;"><b>Contact no. : </b>@if(isset($singleBookingDetail) && count($singleBookingDetail) > 0)<span style="font-size:14px;">{{$singleBookingDetail['get_user_name']['mobile_no']}}</span>@endif</p>

                    @if($singleBookingDetail['booking_panel'] != 'admin')
                        @if(isset($singleBookingDetail) && count($singleBookingDetail) > 0)
                            <p><span style="font-size:14px;">{{$singleBookingDetail['get_user_name']['addressInfo']['address'], $singleBookingDetail['get_user_name']['addressInfo']['state']}}</span>
                            </p>
                        @endif
                    @endif
                </td>
                <td>
                    <div style="float: right;">
                        <p style="font-weight: bold; color: #020312; font-size: 14px; margin:8px 0;">
                            Invoice No.:
                            @if(isset($singleBookingDetail) && count($singleBookingDetail) > 0)
                                <span style="font-size:14px;"> {{$singleBookingDetail['user_booking_details_id']}}</span>
                            @endif
                        </p>
                        <p style="font-weight: bold; color: #020312; font-size: 14px; margin:8px 0;">
                            Date :
                            @if(isset($singleBookingDetail) && count($singleBookingDetail) > 0)
                                <span style="font-size:14px;">
                                    {{\Carbon\Carbon::parse($singleBookingDetail['pickup_date_time'])->format('d-m-Y')}}
                                </span>
                            @endif
                        </p>
                    </div>
                </td>
            </tr>
        </tbody> --}}
    </table>
</div>


<div class="clearfix" style="margin-top: 20px;">

    <div  style="float:left; width: 33%;">
        <h4 class="heading">Booking Info</h4>
        <p style="margin:8px 0;font-size: 14px;"><b>From : </b>
            @if(isset($singleBookingDetail) && count($singleBookingDetail) > 0)
                <span style="font-size:14px;">{{\Carbon\Carbon::parse($singleBookingDetail['pickup_date_time'])->format('d-m-Y')}}
                    @if($singleBookingDetail['booking_panel'] != 'admin')
                        ({{\Carbon\Carbon::parse($singleBookingDetail['pickup_date_time'])->format('g:i a')}})
                    @endif
                            </span>
            @endif
        </p>
        <p style="margin:8px 0;font-size: 14px;"><b>To : </b> @if(isset($singleBookingDetail) && count($singleBookingDetail) > 0)<span style="font-size:14px;">{{\Carbon\Carbon::parse($singleBookingDetail['dropoff_date_time'])->format('d-m-Y')}}
                @if($singleBookingDetail['booking_panel'] != 'admin')
                    ({{\Carbon\Carbon::parse($singleBookingDetail['dropoff_date_time'])->format('g:i a')}})
                @endif
                            </span>
            @endif</p>

        <p style="margin:10px 0;"><b>Vehicle</b>
            @if(isset($singleBookingDetail) && count($singleBookingDetail) > 0)
                <span style="margin:8px 0;font-size: 14px;">{{$singleBookingDetail['car_model_name']}}</span>
            @endif
            @if(isset($singleBookingDetail['getvehicle_registrations_veh_number']) && !empty($singleBookingDetail['getvehicle_registrations_veh_number']))
                (<span style="font-size:14px">{{$singleBookingDetail['getvehicle_registrations_veh_number'][0]['reg_no']}}</span>)@endif
        </p>
    </div>

    <div  style="float:right; width: 33%;">
        <h4 class="heading heading2">Trip Info</h4>
        <p style="margin:8px 0;font-size: 14px;"> <b>From: </b>
            @if(isset($singleBookingDetail) && count($singleBookingDetail) > 0)

                @if($singleBookingDetail['from'] != null)
                    {{$singleBookingDetail['from']}}
                @endif

                {{--                @if($singleBookingDetail['pickup_other_parent_location_name'] != null)--}}
{{--                    Other ({{$singleBookingDetail['pickup_other_parent_location_name']}})--}}
{{--                @endif--}}

{{--                <span style="font-size:14px;">{{$singleBookingDetail['picklocation']['location_name']}} {{$singleBookingDetail['picklocation']['location_name']}}</span>--}}

{{--                @if($singleBookingDetail['pickup_other_location_name'] != null)--}}
{{--                    ({{$singleBookingDetail['pickup_other_location_name']}})--}}
{{--                @endif--}}

            @endif
        </p>
        {{-- <p style="margin:8px 0;font-size: 14px;"><b>To: </b>
            @if($singleBookingDetail['to'] != null)
                {{$singleBookingDetail['to']}}
            @endif
        </p> --}}
    </div>


</div>


{{--  --}}


</body>

</html>