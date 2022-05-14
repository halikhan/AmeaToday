<?php $__env->startSection('content'); ?>
 
<div class="main-div instructor-img">
    <div class="">
        <div class="top-home-section">
            <?php echo $__env->make('Frontend.Layout.body.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="container">
                <input type="hidden" value="<?php echo e(csrf_token()); ?>" name="_token" id="_token" />
                <form>
                    <?php echo e(csrf_field()); ?>

                <div data-wow-delay="0.30s" class="first-section card-type-back-color white-backgroung-color">
                    <div class="checkout-heading mt3 mb3">
                        <h1>Payment</h1>
                    </div>
                    <div class="order-box-line mt1">
                        <span></span>
                    </div>
                    
                    
                     <div class="d-flex justify-content-center mt3 mb5 wow bounceIn">
                        <div id="paypal-button-container"></div>
                    </div>

                </div>
            </form>
            </div>
            <?php echo $__env->make('Frontend.Layout.body.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <?php
       {{  @$amountdata = session()->get('checkout')['package_amount']; }}
        // dd($data)
        ?>
    </div>

    <?php $__env->stopSection(); ?>


    <script src="https://www.paypal.com/sdk/js?client-id=test&currency=USD&intent=capture"></script>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
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
                              value: "<?php echo e($amountdata); ?>"
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
                  url: "<?php echo e(route('StorePaymentDetails')); ?>",
                  headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                  dataType: "json",
                //   data: {data: details},
                    data: {
                        data: details,
                    },
                  success: function(data){
                    if(data.status==200){
                        window.location.href = '<?php echo e(route("AmeaToday_user-dashboard")); ?>';
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

<?php echo $__env->make('Frontend.Layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Amea_Today\resources\views/Frontend/buy-now.blade.php ENDPATH**/ ?>