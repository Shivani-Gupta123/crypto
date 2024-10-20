<?php include('header.php') ?>


<div class="body-content">
<div class="row gy-4">
<div class="col-12">
<div class="card py-4 px-3 radius-15">
<div class="d-flex flex-column flex-lg-row gap-3 justify-content-between align-items-center mb-3">
<h3 class="fs-24 mb-0 text-color-2 fw-medium lh-1">User</h3>
<div class="d-flex align-items-center gap-2">
<div class="border radius-10 p-1">
<button id="add-user-button" data-bs-toggle="modal" data-bs-target="#addUser" class="btn btn-save lh-sm">
<span class="me-1">Add new</span><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1 6H11M6 1V11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
</svg>
</button>
</div>
</div>
</div>

<div class="table-responsive">
<table class="table" id="users-table"><thead><tr><th title="Sl" width="30">Sl</th><th title="Name">Name</th><th title="Email">Email</th><th title="Created at">Created at</th><th title="Updated at">Updated at</th><th title="Action" width="100">Action</th></tr></thead></table>
</div>

</div>
</div>
</div>
<div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="addUserLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable modal-lg">
<div class="modal-content radius-35">
<div class="modal-header p-4">
<h5 class="modal-title text-color-5 fs-20 fw-medium" id="modelLabel">Create user
</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body p-4 pt-2">
<form action="https://nishuelaravel.bdtask-demo.com/backend/admin/user" method="post" class="needs-validation" data="showCallBackData" id="user-form" novalidate data-insert="https://nishuelaravel.bdtask-demo.com/backend/admin/user" enctype="multipart/form-data">
<input type="hidden" name="_token" value="wg4G36cOThJoNQEBu6DmGlNtTZKtBuYYQpsofzKm" autocomplete="off"> <div class="row mb-3">
<div class="col-12">
<div class="mb-3">
<label class="col-form-label text-start text-color-1 fs-16 fw-medium" for="first_name">First name <span class="text-danger">*</span>
</label>
<input type="text" name="first_name" id="first_name" value class="custom-form-control  form-control " placeholder="Enter user first name" required />
<div class="invalid-feedback" role="alert">
</div>
</div>
</div>
<div class="col-12">
<div class="mb-3">
<label class="col-form-label text-start text-color-1 fs-16 fw-medium" for="last_name">Last name <span class="text-danger">*</span>
</label>
<input type="text" name="last_name" id="last_name" value class="custom-form-control  form-control " placeholder="Enter user last name" required />
<div class="invalid-feedback" role="alert">
</div>
</div>
</div>
<div class="col-12">
<div class="mb-3">
<label class="col-form-label text-start text-color-1 fs-16 fw-medium" for="email">Email <span class="text-danger">*</span>
</label>
<input type="email" name="email" id="email" value class="custom-form-control  form-control " placeholder="Enter user email" required />
<div class="invalid-feedback" role="alert">
</div>
</div>
</div>
<div class="col-12">
<div class="mb-3">
<label class="col-form-label text-start text-color-1 fs-16 fw-medium" for="password">Password<span class="text-danger" id="password_required">*</span> </label>
<input type="password" name="password" id="password" value class="custom-form-control  form-control " placeholder="Password" required />
<div class="invalid-feedback" role="alert">
</div>
</div>
</div>
<div class="col-12">
<div class="mb-3">
<label class="col-form-label text-start text-color-1 fs-16 fw-medium" for="role_id">Role</label>
<select name="role_id[]" id="role_id" class="custom-form-control placeholder-single " data-placeholder="Role" data-fieldname="roles" data-fieldid="id" multiple>
<option value="1">Admin</option>
<option value="2">Manager</option>
</select>
<div class="invalid-feedback" role="alert">
</div>
</div>
</div>
<div class="col-12">
<div class="mb-3">
<label class="col-form-label text-start text-color-1 fs-16 fw-medium" for="image">Image</label>
<input type="file" name="image" id="image" accept="image/*" class="custom-form-control file-preview  " data-previewDiv="preview_file_image" />
<span class="text-color-1 fs-16 fw-medium">Recommended pixel (60
x 60)</span>
<div class="mb-3 p-2 radius-10 w-max-content" id="preview_file_image">
</div>
<div class="invalid-feedback" role="alert">
</div>
</div>
</div>
<div class="col-12">
<div class="d-flex justify-content-between align-items-center">
<h3 class="mb-1 text-black fs-25 fw-medium">Permission </h3>
</div>
<hr class="my-2" />
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
<input class="form-check-input module_group" type="checkbox" value="1" id="module_group_1" />
<label class="form-check-label" for="module_group_1">Dashboard</label>
</div>
</legend>
<div class="row g-3">
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Dashboard
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_1" name="permissions[]" type="checkbox" value="1" id="permission_1" />
<label class="form-check-label fs-15 fw-normal" for="permission_1">dashboard.read</label>
</div>
</div>
</div>
</fieldset>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
<input class="form-check-input module_group" type="checkbox" value="2" id="module_group_2" />
<label class="form-check-label" for="module_group_2">Customer</label>
</div>
</legend>
<div class="row g-3">
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Customer
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_2" name="permissions[]" type="checkbox" value="2" id="permission_2" />
<label class="form-check-label fs-15 fw-normal" for="permission_2">customer.read</label>
</div>
</div>
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_2" name="permissions[]" type="checkbox" value="3" id="permission_3" />
<label class="form-check-label fs-15 fw-normal" for="permission_3">customer.create</label>
</div>
</div>
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_2" name="permissions[]" type="checkbox" value="4" id="permission_4" />
<label class="form-check-label fs-15 fw-normal" for="permission_4">customer.update</label>
</div>
</div>
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_2" name="permissions[]" type="checkbox" value="5" id="permission_5" />
<label class="form-check-label fs-15 fw-normal" for="permission_5">customer.delete</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Account verification
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_2" name="permissions[]" type="checkbox" value="6" id="permission_6" />
<label class="form-check-label fs-15 fw-normal" for="permission_6">account_verification.read</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Account verified
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_2" name="permissions[]" type="checkbox" value="7" id="permission_7" />
<label class="form-check-label fs-15 fw-normal" for="permission_7">account_verified.read</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Account verified canceled
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_2" name="permissions[]" type="checkbox" value="8" id="permission_8" />
<label class="form-check-label fs-15 fw-normal" for="permission_8">account_verified_canceled.read</label>
</div>
</div>
</div>
</fieldset>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
<input class="form-check-input module_group" type="checkbox" value="3" id="module_group_3" />
<label class="form-check-label" for="module_group_3">B2x loan</label>
</div>
</legend>
<div class="row g-3">
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Available packages
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_3" name="permissions[]" type="checkbox" value="9" id="permission_9" />
<label class="form-check-label fs-15 fw-normal" for="permission_9">available_packages.read</label>
</div>
</div>
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_3" name="permissions[]" type="checkbox" value="10" id="permission_10" />
<label class="form-check-label fs-15 fw-normal" for="permission_10">available_packages.create</label>
</div>
</div>
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_3" name="permissions[]" type="checkbox" value="11" id="permission_11" />
<label class="form-check-label fs-15 fw-normal" for="permission_11">available_packages.update</label>
</div>
</div>
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_3" name="permissions[]" type="checkbox" value="12" id="permission_12" />
<label class="form-check-label fs-15 fw-normal" for="permission_12">available_packages.delete</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Pending loan
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_3" name="permissions[]" type="checkbox" value="13" id="permission_13" />
<label class="form-check-label fs-15 fw-normal" for="permission_13">pending_loan.read</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Loan summary
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_3" name="permissions[]" type="checkbox" value="14" id="permission_14" />
<label class="form-check-label fs-15 fw-normal" for="permission_14">loan_summary.read</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Withdrawal pending
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_3" name="permissions[]" type="checkbox" value="15" id="permission_15" />
<label class="form-check-label fs-15 fw-normal" for="permission_15">withdrawal_pending.read</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Close loan
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_3" name="permissions[]" type="checkbox" value="16" id="permission_16" />
<label class="form-check-label fs-15 fw-normal" for="permission_16">close_loan.read</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
The months payment
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_3" name="permissions[]" type="checkbox" value="17" id="permission_17" />
<label class="form-check-label fs-15 fw-normal" for="permission_17">the_months_payment.read</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
All loan repayment
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_3" name="permissions[]" type="checkbox" value="18" id="permission_18" />
<label class="form-check-label fs-15 fw-normal" for="permission_18">all_loan_repayment.read</label>
</div>
</div>
</div>
</fieldset>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
<input class="form-check-input module_group" type="checkbox" value="4" id="module_group_4" />
<label class="form-check-label" for="module_group_4">Finance</label>
</div>
</legend>
<div class="row g-3">
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Finance deposit list
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_4" name="permissions[]" type="checkbox" value="19" id="permission_19" />
<label class="form-check-label fs-15 fw-normal" for="permission_19">finance_deposit_list.read</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Finance pending deposit
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_4" name="permissions[]" type="checkbox" value="20" id="permission_20" />
<label class="form-check-label fs-15 fw-normal" for="permission_20">finance_pending_deposit.read</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Finance withdraw list
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_4" name="permissions[]" type="checkbox" value="21" id="permission_21" />
<label class="form-check-label fs-15 fw-normal" for="permission_21">finance_withdraw_list.read</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Finance pending withdraw
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_4" name="permissions[]" type="checkbox" value="22" id="permission_22" />
<label class="form-check-label fs-15 fw-normal" for="permission_22">finance_pending_withdraw.read</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Finance credit list
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_4" name="permissions[]" type="checkbox" value="23" id="permission_23" />
<label class="form-check-label fs-15 fw-normal" for="permission_23">finance_credit_list.read</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Finance transfer
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_4" name="permissions[]" type="checkbox" value="24" id="permission_24" />
<label class="form-check-label fs-15 fw-normal" for="permission_24">finance_transfer.read</label>
</div>
</div>
</div>
</fieldset>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
<input class="form-check-input module_group" type="checkbox" value="5" id="module_group_5" />
<label class="form-check-label" for="module_group_5">Merchant</label>
</div>
</legend>
<div class="row g-3">
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Merchant application
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_5" name="permissions[]" type="checkbox" value="25" id="permission_25" />
<label class="form-check-label fs-15 fw-normal" for="permission_25">merchant_application.read</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Merchant account
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_5" name="permissions[]" type="checkbox" value="26" id="permission_26" />
<label class="form-check-label fs-15 fw-normal" for="permission_26">merchant_account.read</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Merchant transaction
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_5" name="permissions[]" type="checkbox" value="27" id="permission_27" />
<label class="form-check-label fs-15 fw-normal" for="permission_27">merchant_transaction.read</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Merchant transaction fee
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_5" name="permissions[]" type="checkbox" value="28" id="permission_28" />
<label class="form-check-label fs-15 fw-normal" for="permission_28">merchant_transaction_fee.read</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Merchant pending withdraw
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_5" name="permissions[]" type="checkbox" value="29" id="permission_29" />
<label class="form-check-label fs-15 fw-normal" for="permission_29">merchant_pending_withdraw.read</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Merchant withdraw list
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_5" name="permissions[]" type="checkbox" value="30" id="permission_30" />
<label class="form-check-label fs-15 fw-normal" for="permission_30">merchant_withdraw_list.read</label>
</div>
</div>
</div>
</fieldset>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
<input class="form-check-input module_group" type="checkbox" value="6" id="module_group_6" />
<label class="form-check-label" for="module_group_6">Package</label>
</div>
</legend>
<div class="row g-3">
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Package
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_6" name="permissions[]" type="checkbox" value="31" id="permission_31" />
<label class="form-check-label fs-15 fw-normal" for="permission_31">package.read</label>
</div>
</div>
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_6" name="permissions[]" type="checkbox" value="32" id="permission_32" />
<label class="form-check-label fs-15 fw-normal" for="permission_32">package.create</label>
</div>
</div>
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_6" name="permissions[]" type="checkbox" value="33" id="permission_33" />
<label class="form-check-label fs-15 fw-normal" for="permission_33">package.update</label>
</div>
</div>
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_6" name="permissions[]" type="checkbox" value="34" id="permission_34" />
<label class="form-check-label fs-15 fw-normal" for="permission_34">package.delete</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Package time list
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_6" name="permissions[]" type="checkbox" value="35" id="permission_35" />
<label class="form-check-label fs-15 fw-normal" for="permission_35">package_time_list.read</label>
</div>
</div>
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_6" name="permissions[]" type="checkbox" value="36" id="permission_36" />
<label class="form-check-label fs-15 fw-normal" for="permission_36">package_time_list.create</label>
</div>
</div>
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_6" name="permissions[]" type="checkbox" value="37" id="permission_37" />
<label class="form-check-label fs-15 fw-normal" for="permission_37">package_time_list.update</label>
</div>
</div>
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_6" name="permissions[]" type="checkbox" value="38" id="permission_38" />
<label class="form-check-label fs-15 fw-normal" for="permission_38">package_time_list.delete</label>
</div>
</div>
</div>
</fieldset>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
<input class="form-check-input module_group" type="checkbox" value="7" id="module_group_7" />
<label class="form-check-label" for="module_group_7">Quick exchange</label>
</div>
</legend>
<div class="row g-3">
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Supported coin
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_7" name="permissions[]" type="checkbox" value="39" id="permission_39" />
<label class="form-check-label fs-15 fw-normal" for="permission_39">supported_coin.read</label>
</div>
</div>
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_7" name="permissions[]" type="checkbox" value="40" id="permission_40" />
<label class="form-check-label fs-15 fw-normal" for="permission_40">supported_coin.create</label>
</div>
</div>
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_7" name="permissions[]" type="checkbox" value="41" id="permission_41" />
<label class="form-check-label fs-15 fw-normal" for="permission_41">supported_coin.update</label>
</div>
</div>
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_7" name="permissions[]" type="checkbox" value="42" id="permission_42" />
<label class="form-check-label fs-15 fw-normal" for="permission_42">supported_coin.delete</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Order request
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_7" name="permissions[]" type="checkbox" value="43" id="permission_43" />
<label class="form-check-label fs-15 fw-normal" for="permission_43">order_request.read</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Transaction list
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_7" name="permissions[]" type="checkbox" value="44" id="permission_44" />
<label class="form-check-label fs-15 fw-normal" for="permission_44">transaction_list.read</label>
</div>
</div>
</div>
</fieldset>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
<input class="form-check-input module_group" type="checkbox" value="8" id="module_group_8" />
<label class="form-check-label" for="module_group_8">Reports</label>
</div>
</legend>
<div class="row g-3">
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Report transaction
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_8" name="permissions[]" type="checkbox" value="45" id="permission_45" />
<label class="form-check-label fs-15 fw-normal" for="permission_45">report_transaction.read</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Report investment
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_8" name="permissions[]" type="checkbox" value="46" id="permission_46" />
<label class="form-check-label fs-15 fw-normal" for="permission_46">report_investment.read</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Report fee
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_8" name="permissions[]" type="checkbox" value="47" id="permission_47" />
<label class="form-check-label fs-15 fw-normal" for="permission_47">report_fee.read</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Report login history
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_8" name="permissions[]" type="checkbox" value="48" id="permission_48" />
<label class="form-check-label fs-15 fw-normal" for="permission_48">report_login_history.read</label>
</div>
</div>
</div>
</fieldset>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
<input class="form-check-input module_group" type="checkbox" value="9" id="module_group_9" />
<label class="form-check-label" for="module_group_9">Stake</label>
</div>
</legend>
<div class="row g-3">
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Plan
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_9" name="permissions[]" type="checkbox" value="49" id="permission_49" />
<label class="form-check-label fs-15 fw-normal" for="permission_49">plan.read</label>
</div>
</div>
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_9" name="permissions[]" type="checkbox" value="50" id="permission_50" />
<label class="form-check-label fs-15 fw-normal" for="permission_50">plan.create</label>
</div>
</div>
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_9" name="permissions[]" type="checkbox" value="51" id="permission_51" />
<label class="form-check-label fs-15 fw-normal" for="permission_51">plan.update</label>
</div>
</div>
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_9" name="permissions[]" type="checkbox" value="52" id="permission_52" />
<label class="form-check-label fs-15 fw-normal" for="permission_52">plan.delete</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Subscription
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_9" name="permissions[]" type="checkbox" value="53" id="permission_53" />
<label class="form-check-label fs-15 fw-normal" for="permission_53">subscription.read</label>
</div>
</div>
</div>
</fieldset>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
<input class="form-check-input module_group" type="checkbox" value="10" id="module_group_10" />
<label class="form-check-label" for="module_group_10">Support</label>
</div>
</legend>
<div class="row g-3">
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Support
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_10" name="permissions[]" type="checkbox" value="54" id="permission_54" />
<label class="form-check-label fs-15 fw-normal" for="permission_54">support.read</label>
</div>
</div>
</div>
</fieldset>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
<input class="form-check-input module_group" type="checkbox" value="11" id="module_group_11" />
<label class="form-check-label" for="module_group_11">Roles manager</label>
</div>
</legend>
<div class="row g-3">
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Role
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_11" name="permissions[]" type="checkbox" value="55" id="permission_55" />
<label class="form-check-label fs-15 fw-normal" for="permission_55">role.read</label>
</div>
</div>
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_11" name="permissions[]" type="checkbox" value="56" id="permission_56" />
<label class="form-check-label fs-15 fw-normal" for="permission_56">role.create</label>
</div>
</div>
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_11" name="permissions[]" type="checkbox" value="57" id="permission_57" />
<label class="form-check-label fs-15 fw-normal" for="permission_57">role.update</label>
</div>
</div>
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_11" name="permissions[]" type="checkbox" value="58" id="permission_58" />
<label class="form-check-label fs-15 fw-normal" for="permission_58">role.delete</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
User
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_11" name="permissions[]" type="checkbox" value="59" id="permission_59" />
<label class="form-check-label fs-15 fw-normal" for="permission_59">user.read</label>
</div>
</div>
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_11" name="permissions[]" type="checkbox" value="60" id="permission_60" />
<label class="form-check-label fs-15 fw-normal" for="permission_60">user.create</label>
</div>
</div>
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_11" name="permissions[]" type="checkbox" value="61" id="permission_61" />
<label class="form-check-label fs-15 fw-normal" for="permission_61">user.update</label>
</div>
</div>
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_11" name="permissions[]" type="checkbox" value="62" id="permission_62" />
<label class="form-check-label fs-15 fw-normal" for="permission_62">user.delete</label>
</div>
</div>
</div>
</fieldset>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
<input class="form-check-input module_group" type="checkbox" value="12" id="module_group_12" />
<label class="form-check-label" for="module_group_12">Payments setting</label>
</div>
</legend>
<div class="row g-3">
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Payment gateway
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_12" name="permissions[]" type="checkbox" value="63" id="permission_63" />
<label class="form-check-label fs-15 fw-normal" for="permission_63">payment_gateway.read</label>
</div>
</div>
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_12" name="permissions[]" type="checkbox" value="64" id="permission_64" />
<label class="form-check-label fs-15 fw-normal" for="permission_64">payment_gateway.create</label>
</div>
</div>
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_12" name="permissions[]" type="checkbox" value="65" id="permission_65" />
<label class="form-check-label fs-15 fw-normal" for="permission_65">payment_gateway.update</label>
</div>
</div>
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_12" name="permissions[]" type="checkbox" value="66" id="permission_66" />
<label class="form-check-label fs-15 fw-normal" for="permission_66">payment_gateway.delete</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Accept currency
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_12" name="permissions[]" type="checkbox" value="67" id="permission_67" />
<label class="form-check-label fs-15 fw-normal" for="permission_67">accept_currency.read</label>
</div>
</div>
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_12" name="permissions[]" type="checkbox" value="68" id="permission_68" />
<label class="form-check-label fs-15 fw-normal" for="permission_68">accept_currency.create</label>
</div>
</div>
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_12" name="permissions[]" type="checkbox" value="69" id="permission_69" />
<label class="form-check-label fs-15 fw-normal" for="permission_69">accept_currency.update</label>
</div>
</div>
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_12" name="permissions[]" type="checkbox" value="70" id="permission_70" />
<label class="form-check-label fs-15 fw-normal" for="permission_70">accept_currency.delete</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Fiat currency
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_12" name="permissions[]" type="checkbox" value="71" id="permission_71" />
<label class="form-check-label fs-15 fw-normal" for="permission_71">fiat_currency.read</label>
</div>
</div>
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_12" name="permissions[]" type="checkbox" value="72" id="permission_72" />
<label class="form-check-label fs-15 fw-normal" for="permission_72">fiat_currency.create</label>
</div>
</div>
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_12" name="permissions[]" type="checkbox" value="73" id="permission_73" />
<label class="form-check-label fs-15 fw-normal" for="permission_73">fiat_currency.update</label>
</div>
</div>
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_12" name="permissions[]" type="checkbox" value="74" id="permission_74" />
<label class="form-check-label fs-15 fw-normal" for="permission_74">fiat_currency.delete</label>
</div>
</div>
</div>
</fieldset>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
<input class="form-check-input module_group" type="checkbox" value="13" id="module_group_13" />
<label class="form-check-label" for="module_group_13">CMS</label>
</div>
</legend>
<div class="row g-3">
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Menu
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_13" name="permissions[]" type="checkbox" value="75" id="permission_75" />
<label class="form-check-label fs-15 fw-normal" for="permission_75">menu.read</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Home slider
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_13" name="permissions[]" type="checkbox" value="76" id="permission_76" />
<label class="form-check-label fs-15 fw-normal" for="permission_76">home_slider.read</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Social icon
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_13" name="permissions[]" type="checkbox" value="77" id="permission_77" />
<label class="form-check-label fs-15 fw-normal" for="permission_77">social_icon.read</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Home about
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_13" name="permissions[]" type="checkbox" value="78" id="permission_78" />
<label class="form-check-label fs-15 fw-normal" for="permission_78">home_about.read</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Join us today
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_13" name="permissions[]" type="checkbox" value="79" id="permission_79" />
<label class="form-check-label fs-15 fw-normal" for="permission_79">join_us_today.read</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Package banner
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_13" name="permissions[]" type="checkbox" value="80" id="permission_80" />
<label class="form-check-label fs-15 fw-normal" for="permission_80">package_banner.read</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Merchant
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_13" name="permissions[]" type="checkbox" value="81" id="permission_81" />
<label class="form-check-label fs-15 fw-normal" for="permission_81">merchant.read</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Investment
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_13" name="permissions[]" type="checkbox" value="82" id="permission_82" />
<label class="form-check-label fs-15 fw-normal" for="permission_82">investment.read</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Why chose
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_13" name="permissions[]" type="checkbox" value="83" id="permission_83" />
<label class="form-check-label fs-15 fw-normal" for="permission_83">why_chose.read</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Satisfied customer
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_13" name="permissions[]" type="checkbox" value="84" id="permission_84" />
<label class="form-check-label fs-15 fw-normal" for="permission_84">satisfied_customer.read</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Faq
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_13" name="permissions[]" type="checkbox" value="85" id="permission_85" />
<label class="form-check-label fs-15 fw-normal" for="permission_85">faq.read</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Blog
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_13" name="permissions[]" type="checkbox" value="86" id="permission_86" />
<label class="form-check-label fs-15 fw-normal" for="permission_86">blog.read</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Contact
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_13" name="permissions[]" type="checkbox" value="87" id="permission_87" />
<label class="form-check-label fs-15 fw-normal" for="permission_87">contact.read</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Payment we accept
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_13" name="permissions[]" type="checkbox" value="88" id="permission_88" />
<label class="form-check-label fs-15 fw-normal" for="permission_88">payment_we_accept.read</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Stake
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_13" name="permissions[]" type="checkbox" value="89" id="permission_89" />
<label class="form-check-label fs-15 fw-normal" for="permission_89">stake.read</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
B2x
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_13" name="permissions[]" type="checkbox" value="90" id="permission_90" />
<label class="form-check-label fs-15 fw-normal" for="permission_90">b2x.read</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Top investor
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_13" name="permissions[]" type="checkbox" value="91" id="permission_91" />
<label class="form-check-label fs-15 fw-normal" for="permission_91">top_investor.read</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Our service
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_13" name="permissions[]" type="checkbox" value="92" id="permission_92" />
<label class="form-check-label fs-15 fw-normal" for="permission_92">our_service.read</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Our rate
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_13" name="permissions[]" type="checkbox" value="93" id="permission_93" />
<label class="form-check-label fs-15 fw-normal" for="permission_93">our_rate.read</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Team member
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_13" name="permissions[]" type="checkbox" value="94" id="permission_94" />
<label class="form-check-label fs-15 fw-normal" for="permission_94">team_member.read</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Our difference
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_13" name="permissions[]" type="checkbox" value="95" id="permission_95" />
<label class="form-check-label fs-15 fw-normal" for="permission_95">our_difference.read</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Quick exchange
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_13" name="permissions[]" type="checkbox" value="96" id="permission_96" />
<label class="form-check-label fs-15 fw-normal" for="permission_96">quick_exchange.read</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Background image
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_13" name="permissions[]" type="checkbox" value="97" id="permission_97" />
<label class="form-check-label fs-15 fw-normal" for="permission_97">background_image.read</label>
</div>
</div>
</div>
</fieldset>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
<input class="form-check-input module_group" type="checkbox" value="14" id="module_group_14" />
<label class="form-check-label" for="module_group_14">Setting</label>
</div>
</legend>
<div class="row g-3">
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
App setting
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_14" name="permissions[]" type="checkbox" value="98" id="permission_98" />
<label class="form-check-label fs-15 fw-normal" for="permission_98">app_setting.read</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Fee setting
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_14" name="permissions[]" type="checkbox" value="99" id="permission_99" />
<label class="form-check-label fs-15 fw-normal" for="permission_99">fee_setting.read</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Commission setup
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_14" name="permissions[]" type="checkbox" value="100" id="permission_100" />
<label class="form-check-label fs-15 fw-normal" for="permission_100">commission_setup.read</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Notification setup
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_14" name="permissions[]" type="checkbox" value="101" id="permission_101" />
<label class="form-check-label fs-15 fw-normal" for="permission_101">notification_setup.read</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Email gateway
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_14" name="permissions[]" type="checkbox" value="102" id="permission_102" />
<label class="form-check-label fs-15 fw-normal" for="permission_102">email_gateway.read</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Sms gateway
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_14" name="permissions[]" type="checkbox" value="103" id="permission_103" />
<label class="form-check-label fs-15 fw-normal" for="permission_103">sms_gateway.read</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Language setting
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_14" name="permissions[]" type="checkbox" value="104" id="permission_104" />
<label class="form-check-label fs-15 fw-normal" for="permission_104">language_setting.read</label>
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<div class="form-check form-switch mb-3">
Backup
</div>
</legend>
<div class="row g-3">
<div class="col-6 col-sm-4">
<div class="form-check form-switch mb-3">
<input class="form-check-input module_permissions_14" name="permissions[]" type="checkbox" value="105" id="permission_105" />
<label class="form-check-label fs-15 fw-normal" for="permission_105">backup.read</label>
</div>
</div>
</div>
</fieldset>
</div>
</fieldset>
</div>
</div>
<div class="d-flex flex-row gap-3">
<button type="reset" class="btn btn-reset py-2 resetBtn w-25" title="Reset">
<i class="fa fa-undo-alt"></i>
</button>
<button type="submit" class="actionBtn btn btn-save py-2 w-75" id="userFormActionBtn">Create</button>
</div>
</form>
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

<script src="https://nishuelaravel.bdtask-demo.com/backend/assets/vendor/yajra-laravel-datatables/assets/datatables.js"></script>
<script src="https://nishuelaravel.bdtask-demo.com/backend/assets/vendor/select2/dist/js/select2.min.js"></script>
<script src="https://nishuelaravel.bdtask-demo.com/backend/assets/js/pages/app.select2.js"></script>
<script src="https://nishuelaravel.bdtask-demo.com/backend/assets/js/custom.js"></script>
<script type="text/javascript">$(function(){window.LaravelDataTables=window.LaravelDataTables||{};window.LaravelDataTables["users-table"]=$("#users-table").DataTable({"serverSide":true,"processing":true,"ajax":{"url":"https:\/\/nishuelaravel.bdtask-demo.com\/backend\/admin\/user","type":"GET","data":function(data) {
            for (var i = 0, len = data.columns.length; i < len; i++) {
                if (!data.columns[i].search.value) delete data.columns[i].search;
                if (data.columns[i].searchable === true) delete data.columns[i].searchable;
                if (data.columns[i].orderable === true) delete data.columns[i].orderable;
                if (data.columns[i].data === data.columns[i].name) delete data.columns[i].name;
            }
            delete data.search.regex;}},"columns":[{"data":"DT_RowIndex","name":"DT_RowIndex","title":"Sl","orderable":false,"searchable":false,"width":30,"className":"text-center"},{"data":"name","name":"name","title":"Name","orderable":false,"searchable":false},{"data":"email","name":"email","title":"Email","orderable":true,"searchable":true},{"data":"created_at","name":"created_at","title":"Created at","orderable":true,"searchable":true},{"data":"updated_at","name":"updated_at","title":"Updated at","orderable":true,"searchable":true},{"data":"action","name":"action","title":"Action","orderable":false,"searchable":false,"width":100,"className":"text-center"}],"order":[[0,"desc"]],"dom":"<'row m-3'<'col-md-3'l><'col-md-5 d-flex align-items-center'B><'col-md-4'f>>rt<'bottom'<'row'<'col-md-6'i><'col-md-6'p>>><'clear'>","responsive":true,"autoWidth":false,"headerCallback":function(thead, data, start, end, display) {
                    $(thead).addClass("bg-primary");
                    $(thead).find("th").addClass("text-white");
                },"buttons":[{"extend":"excel","text":"<i class=\"fa fa-file-excel\"><\/i> Excel","className":"btn btn-success box-shadow--4dp btn-sm-menu"},{"extend":"csv","text":"<i class=\"fa fa-file-csv\"><\/i> CSV","className":"btn btn-success box-shadow--4dp btn-sm-menu"},{"extend":"pdf","text":"<i class=\"fa fa-file-pdf\"><\/i> PDF","className":"btn btn-success box-shadow--4dp btn-sm-menu"},{"extend":"print","text":"<i class=\"fa fa-print\"><\/i> Print","className":"btn btn-success box-shadow--4dp btn-sm-menu","attr":{"target":"_blank"}},{"extend":"reset","text":"<i class=\"fa fa-undo-alt\"><\/i> Reset","className":"btn btn-success box-shadow--4dp btn-sm-menu"}]});});</script>
<script src="https://nishuelaravel.bdtask-demo.com/backend/assets/js/datatables.active.min.js"></script>
<script src="https://nishuelaravel.bdtask-demo.com/backend/assets/js/setting/user.min.js"></script>

</body>
</html>