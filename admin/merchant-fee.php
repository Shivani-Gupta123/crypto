<?php include('header.php') ?>

<div class="body-content">
<div class="row gy-4">
<div class="col-12">
<form action="https://nishuelaravel.bdtask-demo.com/backend/admin/merchant-fee" data-insert method="post" class="needs-validation" data="showCallBackData" id="package-form" novalidate enctype="multipart/form-data" data-resetvalue="false">
<input type="hidden" name="_token" value="wg4G36cOThJoNQEBu6DmGlNtTZKtBuYYQpsofzKm" autocomplete="off"> <div class="card p-4 p-xl-5 radius-15">
<h3 class="fs-24 mb-5 text-color-2 fw-medium lh-1">Merchant fees</h3>
<div class="row">
<div class="col-lg-4">
<div class="mb-3">
<label class="col-form-label text-start text-color-1 fs-16 fw-medium">United States Dollar</label>
<div class="align-items-center border d-flex gap-3 p-1 rounded-3">
<div class="d-flex align-items-center gap-3">
<div class="bg-floral-white fee-coin p-2 radius-10">
<img src="https://nishuelaravel.bdtask-demo.com/backend/assets/img/crypto/usd.svg" alt />
</div>
<span class="text-color-4 fs-15 fw-normal">Fee*</span>
</div>
<input name="accept_currency_id[]" type="hidden" value="1" />
<input name="percent[]" class="custom-form-control border-0" type="text" placeholder="Fee Percent" value="5.00" required />
<span class="px-3">%</span>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="mb-3">
<label class="col-form-label text-start text-color-1 fs-16 fw-medium">Litecoin Testnet</label>
<div class="align-items-center border d-flex gap-3 p-1 rounded-3">
<div class="d-flex align-items-center gap-3">
<div class="bg-floral-white fee-coin p-2 radius-10">
<img src="https://nishuelaravel.bdtask-demo.com/backend/assets/img/crypto/ltct.svg" alt />
</div>
<span class="text-color-4 fs-15 fw-normal">Fee*</span>
</div>
<input name="accept_currency_id[]" type="hidden" value="4" />
<input name="percent[]" class="custom-form-control border-0" type="text" placeholder="Fee Percent" value="6.00" required />
<span class="px-3">%</span>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="mb-3">
<label class="col-form-label text-start text-color-1 fs-16 fw-medium">Bitcoin</label>
<div class="align-items-center border d-flex gap-3 p-1 rounded-3">
<div class="d-flex align-items-center gap-3">
<div class="bg-floral-white fee-coin p-2 radius-10">
<img src="https://nishuelaravel.bdtask-demo.com/backend/assets/img/crypto/btc.svg" alt />
</div>
<span class="text-color-4 fs-15 fw-normal">Fee*</span>
</div>
<input name="accept_currency_id[]" type="hidden" value="5" />
<input name="percent[]" class="custom-form-control border-0" type="text" placeholder="Fee Percent" value="7.00" required />
<span class="px-3">%</span>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="mb-3">
<label class="col-form-label text-start text-color-1 fs-16 fw-medium">Ethereum</label>
<div class="align-items-center border d-flex gap-3 p-1 rounded-3">
<div class="d-flex align-items-center gap-3">
<div class="bg-floral-white fee-coin p-2 radius-10">
<img src="https://nishuelaravel.bdtask-demo.com/backend/assets/img/crypto/eth.svg" alt />
</div>
<span class="text-color-4 fs-15 fw-normal">Fee*</span>
</div>
<input name="accept_currency_id[]" type="hidden" value="6" />
<input name="percent[]" class="custom-form-control border-0" type="text" placeholder="Fee Percent" value="8.00" required />
<span class="px-3">%</span>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="mb-3">
<label class="col-form-label text-start text-color-1 fs-16 fw-medium">Solana</label>
<div class="align-items-center border d-flex gap-3 p-1 rounded-3">
<div class="d-flex align-items-center gap-3">
<div class="bg-floral-white fee-coin p-2 radius-10">
<img src="https://nishuelaravel.bdtask-demo.com/backend/assets/img/crypto/sol.svg" alt />
</div>
<span class="text-color-4 fs-15 fw-normal">Fee*</span>
</div>
<input name="accept_currency_id[]" type="hidden" value="7" />
<input name="percent[]" class="custom-form-control border-0" type="text" placeholder="Fee Percent" value="0" required />
<span class="px-3">%</span>
</div>
</div>
</div>
</div>
<div class="col-12">
<div class="d-flex justify-content-end">
<button type="submit" class="btn btn-save actionBtn">Update</button>
</div>
</div>
<div class="col-12">
</div>
</div>
</form>
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
<script src="https://nishuelaravel.bdtask-demo.com/backend/module-assets/Merchant/js/fees.js?v=1"></script>

</body>
</html>