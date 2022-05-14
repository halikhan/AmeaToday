@extends('Frontend.Layout.master')
@section('content')
 {{-- <?php
$data['checkout'] = Session::get('checkout');
$data['User_Signup'] = Session::get('User_Signup');
// dd($data);
?> --}}
<div class="main-div instructor-img">
    <div class="">
        <div class="top-home-section">
            @include('Frontend.Layout.body.navbar')

            <div class="container">
                <input type="hidden" value="{{ csrf_token() }}" name="_token" id="_token" />
                <form>
                    {{ csrf_field() }}
                <div data-wow-delay="0.30s" class="first-section card-type-back-color white-backgroung-color">
                    <div class="checkout-heading mt3 mb3">
                        <h1>Payment</h1>
                    </div>
                    <div class="order-box-line mt1">
                        <span></span>
                    </div>
                    {{-- <div class="box-payment-style">
                        <div class="card-line">
                            <div class="credit-card">
                                <input type="radio" name="fav_language" id="" value="credit-cards">
                                <label for="">Credit/Debit Cards</label>
                            </div>
                            <div class="visacard-img">
                                <img src="{{ asset('frontend/assets/image/1x/card.png') }}" alt="">
                            </div>
                        </div>
                        <div class="cards-cardits for-grey-color wow bounceIn">
                            <div class="payment-content">
                                <h4>Your payment is secure.</h4>
                            </div>
                            <div class="payment-input">
                                <label for="">Card number</label>
                                <input type="text">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="Expiration-input">
                                        <label for="">Expiration date</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="Expiration-input">
                                        <label for="">Security code (CVV)</label>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="card-holder-input">
                                <label for="">Card holder name</label>
                                <input type="text">
                            </div>
                            <div class="payment-check-box">
                                <input type="checkbox" name="" id="">
                                <label for="">Save card details for next time</label>
                            </div>
                        </div>
                        <div  class="PayPal-line">
                            <div class="credit-card">
                                <input type="radio" name="fav_language" id="" value="paypal">
                                <label for="">PayPal</label>
                                <div class="paypal-image">
                                    <img src="{{ asset('frontend/assets/image/1x/paypal-logo.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="d-flex justify-content-center mt3 mb5 wow bounceIn">
                        <a href="{{ route('payment') }}" class="btn-width"><button class="black-btn">Pay Now</button></a>
                    </div> --}}
                     <div class="d-flex justify-content-center mt3 mb5 wow bounceIn">
                        <div id="paypal-button-container"></div>
                    </div>

                </div>
            </form>
            </div>
            @include('Frontend.Layout.body.footer')
        </div>
        <?php
       {{  @$amountdata = session()->get('checkout')['package_amount']; }}
        // dd($data)
        ?>
    </div>

    @endsection


    <script src="https://www.paypal.com/sdk/js?client-id=test&currency=USD&intent=capture"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
   <script>

      const paypalButtonsComponent = paypal.Buttons({
          // optional styling for buttons
          // https://developer.paypal.com/docs/checkout/standard/customize/buttons-style-guide/
          style: {
            color: "gold",
            shape: "rect",
            layout: "vertical"
          },

          // set up the transaction
          createOrder: (data, actions) => {
              // pass in any options from the v2 orders create call:
              // https://developer.paypal.com/api/orders/v2/#orders-create-request-body
              const createOrderPayload = {
                  purchase_units: [
                      {
                          amount: {
                              value: "{{ $amountdata }}"
                          }
                      }
                  ]
              };

              return actions.order.create(createOrderPayload);
          },

          // finalize the transaction

        //   onApprove: function (data, actions){
        //     return fetch('/api/paypal/StorePaymentDetails',{
        //         method: 'POST',
        //         body: JSON.stringify({
        //             orderId: data.orderId
        //         })

        //     }).then(function (response){
        //         return response.json();
        //     }).then(function (response))

        //   }
          onApprove: (data, actions) => {
              const captureOrderHandler = (details) => {
                  const payerName = details.payer.name.given_name;
                //   console.log(details);

                // const TOKEN = $("#token").val();

                  $.ajax({
                  method:"POST",
                  url: "{{ route('StorePaymentDetails') }}",
                  headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                  dataType: "json",
                //   data: {data: details},
                    data: {
                        data: details,
                    },
                  success: function(data){
                    if(data.status==200){
                        window.location.href = '{{ route("AmeaToday_user-dashboard") }}';
                    };
                    }
                });
                console.log('Transaction completed');
                };

            return actions.order.capture().then(captureOrderHandler);

            // success: function(data)
            // {
            // alert(data);
            // }
          },

          // handle unrecoverable errors
          onError: (err) => {
              console.error('An error prevented the buyer from checking out with PayPal');
          }
      });

      paypalButtonsComponent
          .render("#paypal-button-container")
          .catch((err) => {
              console.error('PayPal Buttons failed to render');
          });
    </script>
