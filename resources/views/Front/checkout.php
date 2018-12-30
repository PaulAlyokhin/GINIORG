<?php include "./includes/header.php"; ?>
<section class="checkout">
    <div class="container">
        <div class="row">
            <div class="col welcome">
                <h5>Welcome John Doe</h5>
            </div>
        </div>
        <form action="" class="account-form">
            <div class="row mb-5">
                <div class="col-sm-6">
                    <h3>Billing Details</h3>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="fname">First Name *</label>
                            <input type="text" class="form-control" id="fname" placeholder="First Name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lname">Last Name *</label>
                            <input type="text" class="form-control" id="lname" placeholder="Last Name" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="cname">Company Name</label>
                            <input type="text" class="form-control" id="cname" placeholder="Your Company Name">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="address">Address *</label>
                            <input type="text" class="form-control mb-3" id="address" placeholder="Street Adress" required>
                        </div>
                        <div class="form-group col-12">
                            <input type="text" class="form-control" id="address" placeholder="Apartment, suite, unit etc." required>
                        </div>
                    </div>
                    <div class="form-row">

                        <div class="form-group col-md-12">
                            <label for="city">Town/City*</label>
                            <select class="custom-select form-control" name="cities[]" multiple="multiple">
                                <option value="AL">Alabama</option>
                                <option value="WY">Wyoming</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="states">State*</label>
                            <select class="custom-select form-control" name="states[]" multiple="multiple" required>
                                <option value="AL">Alabama</option>
                                <option value="WY">Wyoming</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="states">Postcode/Zip*</label>
                            <input type="tel" class="form-control" id="phone" placeholder="Postcode/Zip" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="country">Country*</label>
                            <select class="custom-select form-control form-country" name="countries[]" multiple="multiple" required>
                                <option value="AL">Alabama</option>
                                <option value="WY">Wyoming</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="email">Contact Info*</label>
                            <input type="email" class="form-control" id="email" placeholder="Email Address" required>
                        </div>
                        <div class="form-group col-12">
                            <input type="tel" class="form-control" id="phone" placeholder="Phone Number" required>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6">
                   <div class="d-flex ship-different">
                    <h3><label for="different-location">Ship to a different address</label></h3>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="different-location">
                        <label class="custom-control-label" for="different-location"></label>
                    </div>
                   </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="email">Order Note*</label>
                            <textarea name="" id="" cols="30" class="form-control" rows="10"></textarea>
                        </div>

                    </div>
                </div>
            </div>
        </form>
        <h2 class="order-title">Your Order</h2>
        <div class="row px-0">
            <div class="col-md-12">
                <div class="row bg-secondary">
                    <div class="col-sm-6"><span class="title">PRODUCT</span></div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="title">PRICE</div>
                            </div>
                            <div class="col-sm-4">
                                <div class="title">QUANTITY</div>
                            </div>
                            <div class="col-sm-4">
                                <div class="title">TOTAL</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-product mb-5">
                    <div class="col-sm-6"><span class="title">PRODUCT</span></div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="title">PRICE</div>
                            </div>
                            <div class="col-sm-4">
                                <div class="title">QUANTITY</div>
                            </div>
                            <div class="col-sm-4">
                                <div class="title">TOTAL</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-sub-container mb-5">
                    <div class="col-sm-6"></div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                            </div>
                            <div class="col-sm-4 col-sub-container">
                                <div class="sub-title">Cart Subtotal</div>
                            </div>
                            <div class="col-sm-4 col-sub-container">
                                <div class="sub-title">$800</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                            </div>
                            <div class="col-sm-4 col-sub-container">
                                <div class="sub-title">Cart Subtotal</div>
                            </div>
                            <div class="col-sm-4 col-sub-container">
                                <div class="sub-title">$800</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                            </div>
                            <div class="col-sm-4 col-sub-container">
                                <div class="sub-title">Cart Subtotal</div>
                            </div>
                            <div class="col-sm-4 col-sub-container">
                                <div class="sub-title">$800</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row chose-method align-items-center py-3">
                    <div class="col-8">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="credit-card" name="payment-method" class="custom-control-input">
                            <label class="custom-control-label" for="credit-card">Credit Card</label>
                        </div>
                    </div>
                    <div class="col-4"> <img src="./assets/img/credit-card.png" alt="" class="w-100"> </div>
                    <div class="col-12 mt-2">
                        <div class="message-bar">Make your payment directly with your Credit Card.</div>
                    </div>
                </div>
                <div class="row chose-method align-items-center">
                    <div class="col-8">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="bank-transfer" name="payment-method" class="custom-control-input">
                            <label class="custom-control-label" for="bank-transfer">Direct Bank Transfer</label>
                        </div>
                    </div>
                    <div class="col-4"> <i class="icofont-bank-transfer"></i></div>
                </div>
                <div class="row chose-method align-items-center">
                    <div class="col-8">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="paypal" name="payment-method" class="custom-control-input">
                            <label class="custom-control-label" for="paypal">PayPal</label>
                        </div>
                    </div>
                    <div class="col-4"> <i class="icofont-paypal"></i></div>
                </div>
                <button type="submit" class="btn btn-primary d-block ml-lg-auto mt-5">Place Order</button>
            </div>
        </div>
    </div>

</section>
<?php include "./includes/footer.php"; ?>
