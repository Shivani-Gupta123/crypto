<?php include('header.php') ?>

<div class="body-content">
<div class="body-content">
<div class="row gy-4">
<div class="col-12">
<div class="card py-4 px-3 radius-15">
<h3 class="border-bottom fs-25 fw-medium mb-0 px-4 px-xl-5 py-4 text-color-2">Base currency</h3>
<div class="card-body px-4 px-xl-5">
<form action=" https://nishuelaravel.bdtask-demo.com/backend/admin/quickexchange/1 " data-insert=" https://nishuelaravel.bdtask-demo.com/backend/admin/quickexchange/1 " method="post" class="needs-validation" data="baseCurrencyCallBack" id="quick_exchange_base_coin_form" novalidate enctype="multipart/form-data" class="px-lg-5 mx-xxl-5" data-resetvalue="false">
<input type="hidden" name="_token" value="wg4G36cOThJoNQEBu6DmGlNtTZKtBuYYQpsofzKm" autocomplete="off"> <input type="hidden" name="_method" value="PUT"> <input type="hidden" name="coinType" value="1" />
<div class="row g-4 gx-xxl-5">
<div class="col-12 col-lg-6">
<label class="col-form-label text-start text-color-1 fs-16 fw-medium" for="coin_name">Coin name<i class="text-danger">*</i></label>
<input class="custom-form-control bg-transparent " type="text" name="coin_name" id="coin_name" required value="United States Dollar" />
</div>
<div class="col-12 col-lg-6">
<label class="col-form-label text-start text-color-1 fs-16 fw-medium" for="symbol">
Symbol<i class="text-danger">*</i></label>
<input class="custom-form-control bg-transparent " type="text" name="symbol" id="symbol" required value="USD" />
</div>
<div class="col-12 col-lg-6">
<label class="col-form-label text-start text-color-1 fs-16 fw-medium" for="reserve_balance">
Reserve balance<i class="text-danger">*</i></label>
<input class="custom-form-control bg-transparent " type="text" name="reserve_balance" id="reserve_balance" value="10000000" required />
</div>
<div class="col-12 col-lg-6">
<label class="col-form-label text-start text-color-1 fs-16 fw-medium" for="min_transaction">
Minimum transaction amount <i class="text-danger">*</i></label>
<input class="custom-form-control bg-transparent " type="text" name="min_transaction" id="min_transaction" value="10" required />
</div>
<div class="col-12 col-lg-6">
<label class="col-form-label text-start text-color-1 fs-16 fw-medium" for="buy_adjust_price">
Buy adjust price (USD)<i class="text-danger">*</i></label>
<input class="custom-form-control bg-transparent " type="text" name="buy_adjust_price" id="buy_adjust_price" value="0.02" required />
</div>
<div class="col-12 col-lg-6">
<label class="col-form-label text-start text-color-1 fs-16 fw-medium" for="sell_adjust_price">
Sell adjust price (USD)<i class="text-danger">*</i></label>
<input class="custom-form-control bg-transparent " type="text" name="sell_adjust_price" id="sell_adjust_price" value="0.02" required />
</div>
<div class="col-12 col-lg-6">
<label class="col-form-label text-start text-color-1 fs-16 fw-medium">Account label name<i class="text-danger">*</i></label>
<input class="custom-form-control bg-transparent " type="text" name="account_label_name[]" value="Bank Name" required />
</div>
<div class="col-12 col-lg-6 d-lg-flex flex-lg-column justify-content-lg-end account-label-field">
<div class="d-flex gap-2">
<input class="custom-form-control bg-transparent " type="text" name="account_label_value[]" value="Demo Bank" required />
<button type="button" class="btn btn-dark add-account-label">
<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1 11H21M11 1V21" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
</svg>
</button>
</div>
</div>
<div class="col-12 col-lg-6">
<label class="col-form-label text-start text-color-1 fs-16 fw-medium">Account label name<i class="text-danger">*</i></label>
<input class="custom-form-control bg-transparent " type="text" name="account_label_name[]" value="Routing No" required />
</div>
<div class="col-12 col-lg-6 d-lg-flex flex-lg-column justify-content-lg-end account-label-field">
<div class="d-flex gap-2">
<input class="custom-form-control bg-transparent " type="text" name="account_label_value[]" value="126535" required />
<button type="button" class="btn btn-danger remove-account-label"><i class="fa fa-trash" aria-hidden="true"></i></button>
</div>
</div>
<div class="col-12 col-lg-6">
<label class="col-form-label text-start text-color-1 fs-16 fw-medium">Account label name<i class="text-danger">*</i></label>
<input class="custom-form-control bg-transparent " type="text" name="account_label_name[]" value="Account No" required />
</div>
<div class="col-12 col-lg-6 d-lg-flex flex-lg-column justify-content-lg-end account-label-field">
<div class="d-flex gap-2">
<input class="custom-form-control bg-transparent " type="text" name="account_label_value[]" value="010xcd23400000040" required />
<button type="button" class="btn btn-danger remove-account-label"><i class="fa fa-trash" aria-hidden="true"></i></button>
</div>
</div>
<div class="col-12 col-lg-6">
<label class="col-form-label text-start text-color-1 fs-16 fw-medium" for="market_rate">Market rate (USD)<i class="text-danger">*</i></label>
<input class="custom-form-control bg-transparent " type="text" name="market_rate" id="market_rate" value="1" required />
</div>
<div class="col-12 col-lg-6 d-lg-flex flex-lg-column justify-content-lg-center">
<label class="col-form-label text-start text-color-1 fs-16 fw-medium">Status<i class="text-danger">*</i></label>
<div class="d-flex gap-3">
<div class="form-check">
<input class="form-check-input" type="radio" name="status" id="edit_active_status" value="1" checked>
<label class="form-check-label" for="edit_active_status"> Active </label>
</div>
<div class="form-check">
<input class="form-check-input" type="radio" name="status" id="edit_inactive_status" value="0">
<label class="form-check-label" for="edit_inactive_status"> Inactive </label>
</div>
</div>
</div>
<div class="col-12 d-lg-flex flex-lg-column justify-content-lg-end">
<div class="d-flex flex-wrap gap-3 justify-content-end">
<button class="btn btn-reset w-sm-100 w-auto" type="reset">Reset</button>
<button class="btn btn-save w-sm-100 w-auto actionBtn" type="submit">Update</button>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>

</div>

<div class="overlay"></div>
</div>

</div>


<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://nishuelaravel.bdtask-demo.com/backend/assets/vendor/jQuery/jquery.min.js"></script>
<script src="https://nishuelaravel.bdtask-demo.com/backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://nishuelaravel.bdtask-demo.com/backend/assets/vendor/metisMenu/metisMenu.min.js"></script>
<script src="https://nishuelaravel.bdtask-demo.com/backend/assets/vendor/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
<script src="https://nishuelaravel.bdtask-demo.com/backend/assets/vendor/emojionearea/dist/emojionearea.min.js"></script>
<script src="https://nishuelaravel.bdtask-demo.com/backend/assets/vendor/sweetalert/sweetalert.all.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://nishuelaravel.bdtask-demo.com/backend/assets/js/sidebar.min.js"></script>

<script src="https://nishuelaravel.bdtask-demo.com/backend/assets/vendor/select2/dist/js/select2.min.js"></script>
<script src="https://nishuelaravel.bdtask-demo.com/backend/assets/js/pages/app.select2.js"></script>
<script src="https://nishuelaravel.bdtask-demo.com/backend/assets/js/custom.js"></script>
<script src="https://nishuelaravel.bdtask-demo.com/backend/module-assets/QuickExchange/js/app.js"></script>

</body>