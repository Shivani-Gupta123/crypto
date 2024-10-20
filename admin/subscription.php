<?php include('header.php') ?>

<div class="body-content">
<div class="body-content">
<div class="row gy-4">
<div class="col-12">
<div class="card py-4 px-3 radius-15">
<div class="d-flex flex-column flex-lg-row gap-3 justify-content-between align-items-center mb-3">
<ul class="nav nav-pills transaction-tab" id="pills-tab" role="tablist">
<li class="nav-item allTab" data-si="all" onclick="subscriptionFilterData(this, 'all')">
<a class="default-cursor nav-link active" aria-selected="true">All staked
<span>(8)</span></a>
</li>
<li class="nav-item allTab" data-si="redeemed" onclick="subscriptionFilterData(this, 'redeemed')">
<a class="default-cursor nav-link" aria-selected="false">Redeemed <span class="text-success">(6)</span></a>
</li>
<li class="nav-item allTab" data-si="pending" onclick="subscriptionFilterData(this, 'pending')">
<a class="default-cursor nav-link" aria-selected="false">Running <span class="text-primary">(2)</span></a>
</li>
</ul>
</div>
<div class="tab-content" id="pills-tabContent">
<div class="tab-pane fade show active" id="pills-subscription" role="tabpanel" aria-labelledby="pills-subscription-tab">

<div class="table-responsive">
<table class="table" id="stake-subscription-table"><thead><tr><th title="User">User</th><th title="Accepted coin">Accepted coin</th><th title="Locked amount">Locked amount</th><th title="Approx interest">Approx interest</th><th title="Duration (days)">Duration (days)</th><th title="Status" width="60">Status</th><th title="Staked at">Staked at</th><th title="Redemption at">Redemption at</th></tr></thead></table>
</div>

</div>
<div class="tab-pane fade" id="pills-redeemed" role="tabpanel" aria-labelledby="pills-redeemed-tab">
</div>
<div class="tab-pane fade" id="pills-pending" role="tabpanel" aria-labelledby="pills-pending-tab">
</div>
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

<script src="https://nishuelaravel.bdtask-demo.com/backend/assets/vendor/yajra-laravel-datatables/assets/datatables.js"></script>
<script src="https://nishuelaravel.bdtask-demo.com/backend/assets/vendor/select2/dist/js/select2.min.js"></script>
<script src="https://nishuelaravel.bdtask-demo.com/backend/assets/js/pages/app.select2.js"></script>
<script src="https://nishuelaravel.bdtask-demo.com/backend/assets/js/custom.js"></script>
<script type="text/javascript">$(function(){window.LaravelDataTables=window.LaravelDataTables||{};window.LaravelDataTables["stake-subscription-table"]=$("#stake-subscription-table").DataTable({"serverSide":true,"processing":true,"ajax":{"url":"https:\/\/nishuelaravel.bdtask-demo.com\/backend\/admin\/subscription","type":"GET","data":function(data) {
            for (var i = 0, len = data.columns.length; i < len; i++) {
                if (!data.columns[i].search.value) delete data.columns[i].search;
                if (data.columns[i].searchable === true) delete data.columns[i].searchable;
                if (data.columns[i].orderable === true) delete data.columns[i].orderable;
                if (data.columns[i].data === data.columns[i].name) delete data.columns[i].name;
            }
            delete data.search.regex;}},"columns":[{"data":"user","name":"user","title":"User","orderable":false,"searchable":false,"className":"text-center"},{"data":"coin","name":"coin","title":"Accepted coin","orderable":false,"searchable":false,"className":"text-center"},{"data":"locked_amount","name":"locked_amount","title":"Locked amount","orderable":false,"searchable":false},{"data":"interest_amount","name":"interest_amount","title":"Approx interest","orderable":false,"searchable":false},{"data":"duration","name":"duration","title":"Duration (days)","orderable":false,"searchable":false},{"data":"status","name":"status","title":"Status","orderable":true,"searchable":true,"width":60,"className":"text-center"},{"data":"created_at","name":"created_at","title":"Staked at","orderable":true,"searchable":true},{"data":"redemption_at","name":"redemption_at","title":"Redemption at","orderable":true,"searchable":true}],"order":[[0,"desc"]],"dom":"<'row m-3'<'col-md-4'l><'col-md-4 text-center'B><'col-md-4'f>>rt<'bottom'<'row'<'col-md-6'i><'col-md-6'p>>><'clear'>","responsive":true,"autoWidth":false,"headerCallback":function(thead, data, start, end, display) {
                            $(thead).addClass("bg-primary");
                            $(thead).find("th").addClass("text-white");
                            $("#stake-subscription-table").removeClass("table-striped table-hover");
                        },"buttons":[{"extend":"excel","text":"<i class=\"fa fa-file-excel\"><\/i> Excel","className":"btn btn-success box-shadow--4dp btn-sm-menu"},{"extend":"csv","text":"<i class=\"fa fa-file-csv\"><\/i> CSV","className":"btn btn-success box-shadow--4dp btn-sm-menu"},{"extend":"pdf","text":"<i class=\"fa fa-file-pdf\"><\/i> PDF","className":"btn btn-success box-shadow--4dp btn-sm-menu"},{"extend":"print","text":"<i class=\"fa fa-print\"><\/i> Print","className":"btn btn-success box-shadow--4dp btn-sm-menu","attr":{"target":"_blank"}},{"extend":"reset","text":"<i class=\"fa fa-undo-alt\"><\/i> Reset","className":"btn btn-success box-shadow--4dp btn-sm-menu"}]});});</script>
<script src="https://nishuelaravel.bdtask-demo.com/backend/assets/js/datatables.active.min.js"></script>
<script src="https://nishuelaravel.bdtask-demo.com/backend/module-assets/Stake/js/app.js"></script>

</body>
</html>