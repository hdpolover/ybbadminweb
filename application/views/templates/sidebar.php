<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">YBB Foundation</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('dashboard');?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Partisipant
    </div>


    <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePar"
                    aria-expanded="true" aria-controls="collapsePar">
                    <i class="fas fa-user fa-cog"></i>
                    <span>Participants</span>
                </a>
                <div id="collapsePar" class="collapse" aria-labelledby="headingPar" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Submenu:</h6>
                        <a class="collapse-item" href="<?= base_url('participant');?>">Participants</a>
                        <a class="collapse-item" href="cards.html">Valid Participants</a>
                        <a class="collapse-item" href="<?= base_url('participant/full');?>">Fully Funded Participants</a>
                    </div>
                </div>
            </li>


    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('payment');?>">
            <i class="fas fa-dollar-sign fa-cog"></i>
            <span>Payment</span>
        </a>

    </li>

    <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAdmin"
                    aria-expanded="true" aria-controls="collapseAdmin">
                    <i class="fas fa-user fa-cog"></i>
                    <span>Admin</span>
                </a>
                <div id="collapseAdmin" class="collapse" aria-labelledby="headingAdmin" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Submenu:</h6>
                        <a class="collapse-item" href="<?= base_url('summit_content');?>">Summit Content</a>
                        <a class="collapse-item" href="<?= base_url('admin');?>">Admin Management</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOther"
                    aria-expanded="true" aria-controls="collapseOther">
                    <i class="fas fa-user fa-cog"></i>
                    <span>Others</span>
                </a>
                <div id="collapseOther" class="collapse" aria-labelledby="headingOther" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Submenu:</h6>
                        <a class="collapse-item" href="<?= base_url('others/index_summits');?>">Summits</a>
                        <a class="collapse-item" href="<?= base_url('others/index_timelines');?>">Summit Timelines</a>
                        <a class="collapse-item" href="<?= base_url('others/index_payment_types');?>">Payment Types</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-user fa-cog"></i>
                    <span>Attendance</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Submenu:</h6>
                        <a class="collapse-item" href="<?= base_url('attendance');?>">Meal Attendance</a>
                        <a class="collapse-item" href="<?= base_url('mealtype');?>">Meal Type </a>
                        <a class="collapse-item" href="<?= base_url('summit_days');?>">Summit Days </a>
                    </div>
                </div>
            </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Logout -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout');?>">
          <i class="fas fa-fw fa-wrench"></i>
            <span>Logout</span>
        </a>

    </li>

<!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Pages Collapse Menu -->


    <!-- Nav Item - Charts -->





    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->


<script>
// Add active class to the current button (highlight it)
var header1 = document.getElementById("collapseTwo");
var header2 = document.getElementById("collapsePar");
var header3 = document.getElementById("collapseAdmin");
var header4 = document.getElementById("collapseOther");

var btns1 = header1.getElementsByClassName("collapse-item");
for (var i = 0; i < btns1.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  if (current.length > 0) {
    current[0].className = current[0].className.replace(" active", "");
  }
  this.className += " active";
  });
}

var btns2 = header2.getElementsByClassName("collapse-item");
for (var i = 0; i < btns2.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  if (current.length > 0) {
    current[0].className = current[0].className.replace(" active", "");
  }
  this.className += " active";
  });
}

var btns3 = header3.getElementsByClassName("collapse-item");
for (var i = 0; i < btns3.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  if (current.length > 0) {
    current[0].className = current[0].className.replace(" active", "");
  }
  this.className += " active";
  });
}

var btns4 = header4.getElementsByClassName("collapse-item");
for (var i = 0; i < btns4.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  if (current.length > 0) {
    current[0].className = current[0].className.replace(" active", "");
  }
  this.className += " active";
  });
}
</script>

<script>
var header5 = document.getElementById("collapseTwo");
var header6 = document.getElementById("collapsePar");
var header7 = document.getElementById("collapseAdmin");
var header8 = document.getElementById("collapseOther");

var btnc1 = header5.getElementsByClassName("collapse");
for (var i = 0; i < btnc1.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("show");
  if (current.length > 0) {
    current[0].className = current[0].className.replace(" show", "");
  }
  this.className += " show";
  });
}

var btnc2 = header6.getElementsByClassName("collapse");
for (var i = 0; i < btnc2.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("show");
  if (current.length > 0) {
    current[0].className = current[0].className.replace(" show", "");
  }
  this.className += " show";
  });
}

var btnc3 = header7.getElementsByClassName("collapse");
for (var i = 0; i < btnc3.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("show");
  if (current.length > 0) {
    current[0].className = current[0].className.replace(" show", "");
  }
  this.className += " show";
  });
}

var btnc4 = header8.getElementsByClassName("collapse");
for (var i = 0; i < btnc4.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("show");
  if (current.length > 0) {
    current[0].className = current[0].className.replace(" show", "");
  }
  this.className += " show";
  });
}
</script>

<script>
var header9 = document.getElementById("accordionSidebar");
var btnav = header9.getElementsByClassName("nav-item");
for (var i = 0; i < btnav.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  if (current.length > 0) {
    current[0].className = current[0].className.replace(" active", "");
  }
  this.className += " active";
  });
}
</script>
