<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- Bootstrap css library -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Bootstrap js library -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <style>
            .form-container{
                padding:10px;
                padding-bottom:25px;
                margin:0 auto;
                margin-top:4em;
                }

                .add-one{
                color:white;
                text-align:center;
                font-weigth:bolder;
                cursor:pointer;
                padding: 10px;
                background-color:
                margin 0 auto;
                }

                .delete{
                color:white;
                background-color:rgb(231, 76, 60);
                text-align:center;
                margin-top:6px;
                font-weight:700;
                border-radius:5px;
                min-width:20px;
                cursor:pointer;
                }

                #singlebutton{
                width:100%;
                margin-top:20px;
                }

                .title{
                text-align:center;
                font-size:40px;
                margin-bottom:40px;
                }

                .dynamic-element{
                margin-bottom:0px;
                }
        </style>
    </head>
    <body>
        <!--<div class="container" style="padding-top:10em;">
        <form class="form-inline" method="POST" action="{{ url('/payment') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group mb-2">
                <select class="custom-select mr-lg-8" id="inlineFormCustomSelect" name="paymentMode">
                    <option selected>Select mode of payment</option>
                    <option value="MPesa">MPesa</option>
                    <option value="Credit Card">Credit Card</option>
                    <option value="Cash">Cash</option>
                </select>
            </div>
            <div class="form-group mx-lg-3 mb-2">
                <input type="text" class="form-control" name="amount" placeholder="Enter amount">
            </div>
            <button type="submit" class="btn btn-primary mb-2">Add Payment</button>
        </form>
        @if(count($payments) > 0 )
            @foreach($payments as $payment)
                <li>
                    <h3>{{ $payment->payment_mode }}</h3>
                    <h3>{{ $payment->amount }}</h3>
                </li>
            @endforeach
        @else
            <p>Add an entry</p>
        @endif
        
        </div> -->

        <!-- HIDDEN DYNAMIC ELEMENT TO CLONE -->
        <!-- you can replace it with any other elements -->
        <div class="container" style="padding-top:10em;">
        <div class="form-group dynamic-element" style="display:none">
        <div class="row">
        <div class="col-md-2"></div>
            
        <!-- Replace these fields -->
        <div class="col-md-4">
            <select id="profesor"  class="custom-select mr-lg-8" name="profesor[]" class="">
            <option value="1">Cash</option>
            <option value="2">Credit Card</option>
            <option value="3">Mpesa</option>
            </select>
        </div>
        <div class="col-md-3">
            <input id="rol" name="rol[]" class="">
        </div>
            <!-- End of fields-->
            <div class="col-md-1">
            <p class="delete">x</p>
            </div>
        </div>
        </div>
        <!-- END OF HIDDEN ELEMENT -->





        <div class="form-container">
        <form class="form-horizontal">
        <fieldset>

        <div class="dynamic-stuff">
            <!-- Dynamic element will be cloned here -->
            <!-- You can call clone function once if you want it to show it a first element-->
        </div>
        
        <!-- Button -->
        <div class="form-group">
            <div class="row">
            <div class="col-md-2">
            <p class="btn btn-primary add-one">
                Add Payment
            </p>
            </div>
        </div>
        </fieldset>
        </form>
        </div>
        </div>

        <script>
            //Clone the hidden element and shows it
            $('.add-one').click(function(){
            $('.dynamic-element').first().clone().appendTo('.dynamic-stuff').show();
            attach_delete();
            });


            //Attach functionality to delete buttons
            function attach_delete(){
            $('.delete').off();
            $('.delete').click(function(){
                console.log("click");
                $(this).closest('.form-group').remove();
            });
            }
        </script>
    </body>
</html>
