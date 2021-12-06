<!DOCTYPE html>
<html dir="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" type="image/png" href="" />
  <title>SalePro</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="all,follow">
  <meta name="csrf-token" content="eBYxzcH3Si5TM0mB9NGhTMchTB3yOL38rHr33YNc">
  <link rel="manifest" href="{{ asset('assets/manifest.json')}}">

  <!-- Vendor files -->
  <!-- Bootstrap CSS-->
  <link rel="stylesheet" href="{{ asset('assets/vendor/css/bootstrap.min.css')}}" type="text/css">


  <link rel="preload" href="{{ asset('assets/vendor/css/bootstrap-toggle.min.css') }}" as="style"
    onload="this.onload=null;this.rel='stylesheet'">
  <noscript>
    <link href="{{ asset('assets/vendor/css/bootstrap-toggle.min.css')}}" rel="stylesheet"></noscript>
  <link rel="preload" href="{{ asset('assets/vendor/css/bootstrap-datepicker.min.css')}}" as="style"
    onload="this.onload=null;this.rel='stylesheet'">
  <noscript>
    <link href="{{ asset('assets/vendor/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">
  </noscript>
  <link rel="preload" href="{{ asset('assets/vendor/jquery.timepicker.min.css')}}" as="style"
    onload="this.onload=null;this.rel='stylesheet'">
  <noscript>
    <link href="{{ asset('assets/vendor/jquery.timepicker.min.css')}}" rel="stylesheet">
  </noscript>
  <link rel="preload" href="{{ asset('assets/vendor/css/awesome-bootstrap-checkbox.css')}}" as="style"
    onload="this.onload=null;this.rel='stylesheet'">
  <noscript>
    <link href="{{ asset('assets/vendor/awesome-bootstrap-checkbox.css')}}" rel="stylesheet"></noscript>
  <link rel="preload" href="{{ asset('assets/vendor/css/bootstrap-select.min.css')}}" as="style"
    onload="this.onload=null;this.rel='stylesheet'">
  <noscript>
    <link href="{{ asset('assets/vendor/css/bootstrap-select.min.css')}}" rel="stylesheet">
  </noscript>
  <!-- Font Awesome CSS-->
  <link rel="preload" href="{{ asset('assets/vendor/css/font-awesome.min.css')}}" as="style"
    onload="this.onload=null;this.rel='stylesheet'">
  <noscript>
    <link href="{{ asset('assets/vendor/css/font-awesome.min.css')}}" rel="stylesheet">
  </noscript>
  <!-- Drip icon font-->
  <link rel="preload" href="{{ asset('assets/vendor/css/webfont.css')}}" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript>
    <link href="{{ asset('assets/vendor/css/webfont.css')}}" rel="stylesheet"></noscript>
  <!-- Google fonts - Roboto -->
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Nunito:400,500,700" as="style"
    onload="this.onload=null;this.rel='stylesheet'">
  <noscript>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,500,700" rel="stylesheet"></noscript>
  <!-- jQuery Circle-->
  <link rel="preload" href="{{ asset('assets/vendor/css/grasp_mobile_progress_circle-1.0.0.min.css')}}" as="style"
    onload="this.onload=null;this.rel='stylesheet'">
  <noscript>
    <link href="{{ asset('assets/vendor/css/grasp_mobile_progress_circle-1.0.0.min.css')}}" rel="stylesheet">
  </noscript>

  <!-- Custom Scrollbar-->
  <link rel="preload" href="{{ asset('assets/vendor/css/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') }}" as="style"
    onload="this.onload=null;this.rel='stylesheet'">
  <noscript>
    <link href="{{ asset('assets/vendor/css/jquery.mCustomScrollbar.css')}}" rel="stylesheet"></noscript>

  <!-- date range stylesheet-->
  <link rel="preload" href="{{ asset('assets/vendor/css/daterangepicker.min.css') }}" as="style"
    onload="this.onload=null;this.rel='stylesheet'">
  <noscript>
    <link href="{{ asset('assets/vendor/css/daterangepicker.min.css') }}" rel="stylesheet">
  </noscript>

  <!-- table sorter stylesheet-->
  <link rel="preload" href="{{ asset('assets/vendor/css/dataTables.bootstrap4.min.css')}}" as="style"
    onload="this.onload=null;this.rel='stylesheet'">
  <noscript>
    <link href="{{ asset('assets/vendor/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
  </noscript>
  <link rel="preload" href="{{ asset('assets/vendor/css/fixedHeader.bootstrap.min.css')}}" as="style"
    onload="this.onload=null;this.rel='stylesheet'">
  <noscript>
    <link href="{{ asset('assets/vendor/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
  </noscript>
  <link rel="preload" href="{{ asset('assets/vendor/css/responsive.bootstrap.min.css')}}" as="style"
    onload="this.onload=null;this.rel='stylesheet'">
  <noscript>
    <link href="{{ asset('assets/vendor/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
  </noscript>

  <link rel="stylesheet" href="{{ asset('assets/vendor/css/style.default.css') }}" id="theme-stylesheet" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets/vendor/css/dropzone.css') }}">

  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="{{ asset('assets/vendor/css/custom-default.css') }}" type="text/css" id="custom-style">

@livewireStyles
</head>

<body onload="myFunction()">
  <div id="loader"></div>
  <!-- Side Navbar -->
  <nav class="side-navbar">
    <div class="side-navbar-wrapper">
      <!-- Sidebar Header    -->
      <!-- Sidebar Navigation Menus-->
      <div class="main-menu">
        <ul id="side-main-menu" class="side-menu list-unstyled">
          <li><a href=""> <i class="dripicons-meter"></i><span>Dashboard</span></a></li>
          <li><a href="#product" aria-expanded="false" data-toggle="collapse"> <i
                class="dripicons-list"></i><span>Product</span><span></a>
            <ul id="product" class="collapse list-unstyled ">
              <li id="category-menu"><a href="/category">Category</a></li>
              <li id="product-list-menu"><a href="/products">Product List</a></li>
              <li id="product-create-menu"><a href="/products/create">Add Product</a></li>
              <li id="printBarcode-menu"><a href="/products/print_barcode">Print Barcode</a>
              </li>
              <li id="adjustment-list-menu"><a href="/qty_adjustment">Adjustment List</a>
              </li>
              <li id="adjustment-create-menu"><a href="/qty_adjustment/create">Add
                  Adjustment</a></li>
              <li id="stock-count-menu"><a href="/stock-count">Stock Count</a></li>
            </ul>
          </li>
          <li><a href="#purchase" aria-expanded="false" data-toggle="collapse"> <i
                class="dripicons-card"></i><span>Purchase</span></a>
            <ul id="purchase" class="collapse list-unstyled ">
              <li id="purchase-list-menu"><a href="/purchases">Purchase List</a></li>
              <li id="purchase-create-menu"><a href="/purchases/create">Add Purchase</a></li>
              <li id="purchase-import-menu"><a href="/purchases/purchase_by_csv">Import
                  Purchase By CSV</a></li>
            </ul>
          </li>
          <li><a href="#sale" aria-expanded="false" data-toggle="collapse"> <i
                class="dripicons-cart"></i><span>Sale</span></a>
            <ul id="sale" class="collapse list-unstyled ">
              <li id="sale-list-menu"><a href="/sales">Sale List</a></li>
              <li><a href="/pos">POS</a></li>
              <li id="sale-create-menu"><a href="/sales/create">Add Sale</a></li>
              <li id="sale-import-menu"><a href="/sales/sale_by_csv">Import Sale By CSV</a>
              </li>

              <li id="gift-card-menu"><a href="/gift_cards">Gift Card List</a> </li>
              <li id="coupon-menu"><a href="/coupons">Coupon List</a> </li>
              <li id="delivery-menu"><a href="/delivery">Delivery List</a></li>
            </ul>
          </li>

          <li><a href="#expense" aria-expanded="false" data-toggle="collapse"> <i
                class="dripicons-wallet"></i><span>Expense</span></a>
            <ul id="expense" class="collapse list-unstyled ">
              <li id="exp-cat-menu"><a href="/expense_categories">Expense Category</a></li>
              <li id="exp-list-menu"><a href="/expenses">Expense List</a></li>
              <li><a id="add-expense" href=""> Add Expense</a></li>
            </ul>
          </li>
          <li><a href="#quotation" aria-expanded="false" data-toggle="collapse"> <i
                class="dripicons-document"></i><span>Quotation</span><span></a>
            <ul id="quotation" class="collapse list-unstyled ">
              <li id="quotation-list-menu"><a href="/quotations">Quotation List</a></li>
              <li id="quotation-create-menu"><a href="/quotations/create">Add Quotation</a>
              </li>
            </ul>
          </li>
          <li><a href="#transfer" aria-expanded="false" data-toggle="collapse"> <i
                class="dripicons-export"></i><span>Transfer</span></a>
            <ul id="transfer" class="collapse list-unstyled ">
              <li id="transfer-list-menu"><a href="/transfers">Transfer List</a></li>
              <li id="transfer-create-menu"><a href="/transfers/create">Add Transfer</a></li>
              <li id="transfer-import-menu"><a href="/transfers/transfer_by_csv">Import
                  Transfer By CSV</a></li>
            </ul>
          </li>

          <li><a href="#return" aria-expanded="false" data-toggle="collapse"> <i
                class="dripicons-return"></i><span>Return</span></a>
            <ul id="return" class="collapse list-unstyled ">
              <li id="sale-return-menu"><a href="/return-sale">Sale</a></li>
              <li id="purchase-return-menu"><a href="/return-purchase">Purchase</a></li>
            </ul>
          </li>
          <li class=""><a href="#account" aria-expanded="false" data-toggle="collapse"> <i
                class="dripicons-briefcase"></i><span>Accounting</span></a>
            <ul id="account" class="collapse list-unstyled ">
              <li id="account-list-menu"><a href="/accounts">Account List</a></li>
              <li><a id="add-account" href="">Add Account</a></li>
              <li id="money-transfer-menu"><a href="/money-transfers">Money Transfer</a></li>
              <li id="balance-sheet-menu"><a href="/accounts/balancesheet">Balance Sheet</a>
              </li>
              <li id="account-statement-menu"><a id="account-statement" href="">Account Statement</a></li>
            </ul>
          </li>

          <li class=""><a href="#hrm" aria-expanded="false" data-toggle="collapse"> <i
                class="dripicons-user-group"></i><span>HRM</span></a>
            <ul id="hrm" class="collapse list-unstyled ">
              <li id="dept-menu"><a href="/departments">Department</a></li>
              <li id="employee-menu"><a href="/employees">Employee</a></li>
              <li id="attendance-menu"><a href="/attendance">Attendance</a></li>
              <li id="payroll-menu"><a href="/payroll">Payroll</a></li>
              <li id="holiday-menu"><a href="/holidays">Holiday</a></li>
            </ul>
          </li>

          <li><a href="#people" aria-expanded="false" data-toggle="collapse"> <i
                class="dripicons-user"></i><span>People</span></a>
            <ul id="people" class="collapse list-unstyled ">

              <li id="user-list-menu"><a href="/user">User List</a></li>
              <li id="user-create-menu"><a href="/user/create">Add User</a></li>

              <li id="customer-list-menu"><a href="/customer">Customer List</a></li>
              <li id="customer-create-menu"><a href="/customer/create">Add Customer</a></li>

              <li id="biller-list-menu"><a href="/biller">Biller List</a></li>
              <li id="biller-create-menu"><a href="/biller/create">Add Biller</a></li>

              <li id="supplier-list-menu"><a href="/supplier">Supplier List</a></li>
              <li id="supplier-create-menu"><a href="/supplier/create">Add Supplier</a></li>
            </ul>
          </li>

          <li><a href="#report" aria-expanded="false" data-toggle="collapse"> <i
                class="dripicons-document-remove"></i><span>Reports</span></a>
            <ul id="report" class="collapse list-unstyled ">
              <li id="profit-loss-report-menu">
                <form method="POST" action="/report/profit_loss" accept-charset="UTF-8"
                  id="profitLoss-report-form"><input name="_token" type="hidden"
                    value="eBYxzcH3Si5TM0mB9NGhTMchTB3yOL38rHr33YNc">
                  <input type="hidden" name="start_date" value="2021-12-01" />
                  <input type="hidden" name="end_date" value="2021-12-06" />
                  <a id="profitLoss-link" href="">Summary Report</a>
                </form>
              </li>
              <li id="best-seller-report-menu">
                <a href="/report/best_seller">Best Seller</a>
              </li>
              <li id="product-report-menu">
                <form method="GET" action="/report/product_report" accept-charset="UTF-8"
                  id="product-report-form">
                  <input type="hidden" name="start_date" value="2021-12-01" />
                  <input type="hidden" name="end_date" value="2021-12-06" />
                  <input type="hidden" name="warehouse_id" value="0" />
                  <a id="report-link" href="">Product Report</a>
                </form>
              </li>
              <li id="daily-sale-report-menu">
                <a href="/report/daily_sale/2021/12">Daily Sale</a>
              </li>
              <li id="monthly-sale-report-menu">
                <a href="/report/monthly_sale/2021">Monthly Sale</a>
              </li>
              <li id="daily-purchase-report-menu">
                <a href="/report/daily_purchase/2021/12">Daily Purchase</a>
              </li>
              <li id="monthly-purchase-report-menu">
                <a href="/report/monthly_purchase/2021">Monthly Purchase</a>
              </li>
              <li id="sale-report-menu">
                <form method="POST" action="/report/sale_report" accept-charset="UTF-8"
                  id="sale-report-form"><input name="_token" type="hidden"
                    value="eBYxzcH3Si5TM0mB9NGhTMchTB3yOL38rHr33YNc">
                  <input type="hidden" name="start_date" value="2021-12-01" />
                  <input type="hidden" name="end_date" value="2021-12-06" />
                  <input type="hidden" name="warehouse_id" value="0" />
                  <a id="sale-report-link" href="">Sale Report</a>
                </form>
              </li>
              <li id="payment-report-menu">
                <form method="POST" action="/report/payment_report_by_date"
                  accept-charset="UTF-8" id="payment-report-form"><input name="_token" type="hidden"
                    value="eBYxzcH3Si5TM0mB9NGhTMchTB3yOL38rHr33YNc">
                  <input type="hidden" name="start_date" value="2021-12-01" />
                  <input type="hidden" name="end_date" value="2021-12-06" />
                  <a id="payment-report-link" href="">Payment Report</a>
                </form>
              </li>
              <li id="purchase-report-menu">
                <form method="POST" action="/report/purchase" accept-charset="UTF-8"
                  id="purchase-report-form"><input name="_token" type="hidden"
                    value="eBYxzcH3Si5TM0mB9NGhTMchTB3yOL38rHr33YNc">
                  <input type="hidden" name="start_date" value="2021-12-01" />
                  <input type="hidden" name="end_date" value="2021-12-06" />
                  <input type="hidden" name="warehouse_id" value="0" />
                  <a id="purchase-report-link" href="">Purchase Report</a>
                </form>
              </li>
              <li id="warehouse-report-menu">
                <a id="warehouse-report-link" href="">Warehouse Report</a>
              </li>
              <li id="warehouse-stock-report-menu">
                <a href="/report/warehouse_stock">Warehouse Stock Chart</a>
              </li>
              <li id="qtyAlert-report-menu">
                <a href="/report/product_quantity_alert">Product Quantity Alert</a>
              </li>
              <li id="user-report-menu">
                <a id="user-report-link" href="">User Report</a>
              </li>
              <li id="customer-report-menu">
                <a id="customer-report-link" href="">Customer Report</a>
              </li>
              <li id="supplier-report-menu">
                <a id="supplier-report-link" href="">Supplier Report</a>
              </li>
              <li id="due-report-menu">
                <form method="POST" action="/report/due_report_by_date"
                  accept-charset="UTF-8" id="due-report-form"><input name="_token" type="hidden"
                    value="eBYxzcH3Si5TM0mB9NGhTMchTB3yOL38rHr33YNc">
                  <input type="hidden" name="start_date" value="2021-12-01" />
                  <input type="hidden" name="end_date" value="2021-12-06" />
                  <a id="due-report-link" href="">Due Report</a>
                </form>
              </li>
            </ul>
          </li>

          <li><a href="#setting" aria-expanded="false" data-toggle="collapse"> <i
                class="dripicons-gear"></i><span>Settings</span></a>
            <ul id="setting" class="collapse list-unstyled ">
              <li id="role-menu"><a href="/role">Role Permission</a></li>
              <li id="notification-menu">
                <a href="" id="send-notification">Send Notification</a>
              </li>
              <li id="warehouse-menu"><a href="/warehouse">Warehouse</a></li>
              <li id="customer-group-menu"><a href="/customer_group">Customer Group</a></li>
              <li id="brand-menu"><a href="/brand">Brand</a></li>
              <li id="unit-menu"><a href="/unit">Unit</a></li>
              <li id="currency-menu"><a href="/currency">Currency</a></li>
              <li id="tax-menu"><a href="/tax">Tax</a></li>
              <li id="user-menu"><a href="/user/profile/1">User Profile</a></li>
              <li id="create-sms-menu"><a href="/setting/createsms">Create SMS</a></li>
              <li><a href="/backup">Backup Database</a></li>
              <li id="general-setting-menu"><a href="/setting/general_setting">General
                  Setting</a></li>
              <li id="mail-setting-menu"><a href="/setting/mail_setting">Mail Setting</a>
              </li>
              <li id="reward-point-setting-menu"><a
                  href="/setting/reward-point-setting">Reward Point Setting</a></li>
              <li id="sms-setting-menu"><a href="/setting/sms_setting">SMS Setting</a></li>
              <li id="pos-setting-menu"><a href="/setting/pos_setting">POS Settings</a></li>
              <li id="hrm-setting-menu"><a href="/setting/hrm_setting"> HRM Setting</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- navbar-->
  <header class="header">
    <nav class="navbar">
      <div class="container-fluid">
        <div class="navbar-holder d-flex align-items-center justify-content-between">
          <a id="toggle-btn" href="#" class="menu-btn"><i class="fa fa-bars"> </i></a>
          <span class="brand-big">
            <a href=""><img src="/public/logo/20210530062516.png"
                width="115"></a>
          </span>

          <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
            <li class="nav-item"><a class="dropdown-item btn-pos btn-sm" href="/pos"><i
                  class="dripicons-shopping-bag"></i><span> POS</span></a></li>

            <li class="nav-item"><a id="btnFullscreen" data-toggle="tooltip" title="Full Screen"><i
                  class="dripicons-expand"></i></a></li>
            <li class="nav-item"><a href="/cash-register" data-toggle="tooltip"
                title="Cash Register List"><i class="dripicons-archive"></i></a></li>
            <li class="nav-item" id="notification-icon">
              <a rel="nofollow" data-toggle="tooltip" title="Notifications" class="nav-link dropdown-item"><i
                  class="dripicons-bell"></i><span class="badge badge-danger notification-number">1</span>
              </a>
              <ul class="right-sidebar">
                <li class="notifications">
                  <a href="/report/product_quantity_alert" class="btn btn-link"> 1 product
                    exceeds alert quantity</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a rel="nofollow" title="Language" data-toggle="tooltip" class="nav-link dropdown-item"><i
                  class="dripicons-web"></i></a>
              <ul class="right-sidebar">
                <li>
                  <a href="/language_switch/en" class="btn btn-link"> English</a>
                </li>
                <li>
                  <a href="/language_switch/es" class="btn btn-link"> Español</a>
                </li>
                <li>
                  <a href="/language_switch/ar" class="btn btn-link"> عربى</a>
                </li>
                <li>
                  <a href="/language_switch/pt_BR" class="btn btn-link"> Portuguese</a>
                </li>
                <li>
                  <a href="/language_switch/fr" class="btn btn-link"> Français</a>
                </li>
                <li>
                  <a href="/language_switch/de" class="btn btn-link"> Deutsche</a>
                </li>
                <li>
                  <a href="/language_switch/id" class="btn btn-link"> Malay</a>
                </li>
                <li>
                  <a href="/language_switch/hi" class="btn btn-link"> हिंदी</a>
                </li>
                <li>
                  <a href="/language_switch/vi" class="btn btn-link"> Tiếng Việt</a>
                </li>
                <li>
                  <a href="/language_switch/ru" class="btn btn-link"> русский</a>
                </li>
                <li>
                  <a href="/language_switch/bg" class="btn btn-link"> български</a>
                </li>
                <li>
                  <a href="/language_switch/tr" class="btn btn-link"> Türk</a>
                </li>
                <li>
                  <a href="/language_switch/it" class="btn btn-link"> Italiano</a>
                </li>
                <li>
                  <a href="/language_switch/nl" class="btn btn-link"> Nederlands</a>
                </li>
                <li>
                  <a href="/language_switch/lao" class="btn btn-link"> Lao</a>
                </li>
              </ul>
            </li>
            <li class="nav-item mt-5">
              <a class="dropdown-item" href="/read_me" target="_blank" data-toggle="tooltip"
                title="Help"><i class="dripicons-information"></i></a>
            </li>
            <li class="nav-item ">
              <a rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false" class="nav-link dropdown-item"><i class="dripicons-user"></i> <span>Admin</span>
                <i class="fa fa-angle-down"></i>
              </a>
              <ul class="right-sidebar">
                <li>
                  <a href="/user/profile/1"><i class="dripicons-user"></i> Profile</a>
                </li>
                <li>
                  <a href="/setting/general_setting"><i class="dripicons-gear"></i>
                    Settings</a>
                </li>
                <li>
                  <a href="/my-transactions/2021/12"><i class="dripicons-swap"></i> My
                    Transactions</a>
                </li>
                <li>
                  <a href="/holidays/my-holiday/2021/12"><i class="dripicons-vibrate"></i> My
                    Holiday</a>
                </li>
                <li>
                  <a onclick="return confirm('Are you sure want to delete? If you do this all of your data will be lost.')"
                    href="/setting/empty-database"><i class="dripicons-stack"></i> Empty
                    Database</a>
                </li>
                <li>
                  <a href="/logout" onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();"><i
                      class="dripicons-power"></i>
                    Logout
                  </a>
                  <form id="logout-form" action="/logout" method="POST"
                    style="display: none;">
                    <input type="hidden" name="_token" value="eBYxzcH3Si5TM0mB9NGhTMchTB3yOL38rHr33YNc"> </form>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <div class="page">

    <!-- notification modal -->
    <div id="notification-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
      class="modal fade text-left">
      <div role="document" class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 id="exampleModalLabel" class="modal-title">Send Notification</h5>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i
                  class="dripicons-cross"></i></span></button>
          </div>
          <div class="modal-body">
            <p class="italic"><small>The field labels marked with * are required input fields.</small></p>
            <form method="POST" action="/notifications/store" accept-charset="UTF-8"><input
                name="_token" type="hidden" value="eBYxzcH3Si5TM0mB9NGhTMchTB3yOL38rHr33YNc">
              <div class="row">
                <div class="col-md-6 form-group">
                  <label>User *</label>
                  <select name="user_id" class="selectpicker form-control" required data-live-search="true"
                    data-live-search-style="begins" title="Select user...">
                    <option value="9">staff (anda@gmail.com)</option>
                    <option value="19">shakalaka (shakalaka@gmail.com)</option>
                    <option value="21">modon (modon@gmail.com)</option>
                    <option value="22">dhiman (dhiman@gmail.com)</option>
                  </select>
                </div>
                <div class="col-md-12 form-group">
                  <label>Message *</label>
                  <textarea rows="5" name="message" class="form-control" required></textarea>
                </div>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- end notification modal -->

    <!-- expense modal -->
    <div id="expense-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
      class="modal fade text-left">
      <div role="document" class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 id="exampleModalLabel" class="modal-title">Add Expense</h5>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i
                  class="dripicons-cross"></i></span></button>
          </div>
          <div class="modal-body">
            <p class="italic"><small>The field labels marked with * are required input fields.</small></p>
            <form method="POST" action="/expenses" accept-charset="UTF-8"><input
                name="_token" type="hidden" value="eBYxzcH3Si5TM0mB9NGhTMchTB3yOL38rHr33YNc">
              <div class="row">
                <div class="col-md-6 form-group">
                  <label>Expense Category *</label>
                  <select name="expense_category_id" class="selectpicker form-control" required data-live-search="true"
                    data-live-search-style="begins" title="Select Expense Category...">
                    <option value="1">washing (16718342)</option>
                    <option value="2">electric bill (60128975)</option>
                    <option value="4">snacks (1234)</option>
                  </select>
                </div>
                <div class="col-md-6 form-group">
                  <label>Warehouse *</label>
                  <select name="warehouse_id" class="selectpicker form-control" required data-live-search="true"
                    data-live-search-style="begins" title="Select Warehouse...">
                    <option value="1">warehouse 1</option>
                    <option value="2">warehouse 2</option>
                  </select>
                </div>
                <div class="col-md-6 form-group">
                  <label>Amount *</label>
                  <input type="number" name="amount" step="any" required class="form-control">
                </div>
                <div class="col-md-6 form-group">
                  <label> Account</label>
                  <select class="form-control selectpicker" name="account_id">
                    <option selected value="1">Sales Account [11111]</option>
                    <option value="3">Sa [21211]</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label>Note</label>
                <textarea name="note" rows="3" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- end expense modal -->

    <!-- account modal -->
    <div id="account-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
      class="modal fade text-left">
      <div role="document" class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 id="exampleModalLabel" class="modal-title">Add Account</h5>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i
                  class="dripicons-cross"></i></span></button>
          </div>
          <div class="modal-body">
            <p class="italic"><small>The field labels marked with * are required input fields.</small></p>
            <form method="POST" action="/accounts" accept-charset="UTF-8"><input
                name="_token" type="hidden" value="eBYxzcH3Si5TM0mB9NGhTMchTB3yOL38rHr33YNc">
              <div class="form-group">
                <label>Account No *</label>
                <input type="text" name="account_no" required class="form-control">
              </div>
              <div class="form-group">
                <label>Name *</label>
                <input type="text" name="name" required class="form-control">
              </div>
              <div class="form-group">
                <label>Initial Balance</label>
                <input type="number" name="initial_balance" step="any" class="form-control">
              </div>
              <div class="form-group">
                <label>Note</label>
                <textarea name="note" rows="3" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- end account modal -->

    <!-- account statement modal -->
    <div id="account-statement-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
      class="modal fade text-left">
      <div role="document" class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 id="exampleModalLabel" class="modal-title">Account Statement</h5>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i
                  class="dripicons-cross"></i></span></button>
          </div>
          <div class="modal-body">
            <p class="italic"><small>The field labels marked with * are required input fields.</small></p>
            <form method="POST" action="/accounts/account-statement" accept-charset="UTF-8">
              <input name="_token" type="hidden" value="eBYxzcH3Si5TM0mB9NGhTMchTB3yOL38rHr33YNc">
              <div class="row">
                <div class="col-md-6 form-group">
                  <label> Account</label>
                  <select class="form-control selectpicker" name="account_id">
                    <option value="1">Sales Account [11111]</option>
                    <option value="3">Sa [21211]</option>
                  </select>
                </div>
                <div class="col-md-6 form-group">
                  <label> Type</label>
                  <select class="form-control selectpicker" name="type">
                    <option value="0">All</option>
                    <option value="1">Debit</option>
                    <option value="2">Credit</option>
                  </select>
                </div>
                <div class="col-md-12 form-group">
                  <label>Choose Your Date</label>
                  <div class="input-group">
                    <input type="text" class="daterangepicker-field form-control" required />
                    <input type="hidden" name="start_date" />
                    <input type="hidden" name="end_date" />
                  </div>
                </div>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- end account statement modal -->

    <!-- warehouse modal -->
    <div id="warehouse-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
      class="modal fade text-left">
      <div role="document" class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 id="exampleModalLabel" class="modal-title">Warehouse Report</h5>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i
                  class="dripicons-cross"></i></span></button>
          </div>
          <div class="modal-body">
            <p class="italic"><small>The field labels marked with * are required input fields.</small></p>
            <form method="POST" action="/report/warehouse_report" accept-charset="UTF-8">
              <input name="_token" type="hidden" value="eBYxzcH3Si5TM0mB9NGhTMchTB3yOL38rHr33YNc">
              <div class="form-group">
                <label>Warehouse *</label>
                <select name="warehouse_id" class="selectpicker form-control" required data-live-search="true"
                  id="warehouse-id" data-live-search-style="begins" title="Select warehouse...">
                  <option value="1">warehouse 1</option>
                  <option value="2">warehouse 2</option>
                </select>
              </div>

              <input type="hidden" name="start_date" value="2021-12-01" />
              <input type="hidden" name="end_date" value="2021-12-06" />

              <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- end warehouse modal -->

    <!-- user modal -->
    <div id="user-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
      class="modal fade text-left">
      <div role="document" class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 id="exampleModalLabel" class="modal-title">User Report</h5>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i
                  class="dripicons-cross"></i></span></button>
          </div>
          <div class="modal-body">
            <p class="italic"><small>The field labels marked with * are required input fields.</small></p>
            <form method="POST" action="/report/user_report" accept-charset="UTF-8"><input
                name="_token" type="hidden" value="eBYxzcH3Si5TM0mB9NGhTMchTB3yOL38rHr33YNc">
              <div class="form-group">
                <label>User *</label>
                <select name="user_id" class="selectpicker form-control" required data-live-search="true" id="user-id"
                  data-live-search-style="begins" title="Select user...">
                  <option value="1">admin (12112)</option>
                  <option value="9">staff (3123)</option>
                  <option value="19">shakalaka (1212)</option>
                  <option value="21">modon (2222)</option>
                  <option value="22">dhiman (+8801111111101)</option>
                </select>
              </div>

              <input type="hidden" name="start_date" value="2021-12-01" />
              <input type="hidden" name="end_date" value="2021-12-06" />

              <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- end user modal -->

    <!-- customer modal -->
    <div id="customer-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
      class="modal fade text-left">
      <div role="document" class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 id="exampleModalLabel" class="modal-title">Customer Report</h5>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i
                  class="dripicons-cross"></i></span></button>
          </div>
          <div class="modal-body">
            <p class="italic"><small>The field labels marked with * are required input fields.</small></p>
            <form method="POST" action="customer_report" accept-charset="UTF-8">
              <input name="_token" type="hidden" value="eBYxzcH3Si5TM0mB9NGhTMchTB3yOL38rHr33YNc">
              <div class="form-group">
                <label>Customer *</label>
                <select name="customer_id" class="selectpicker form-control" required data-live-search="true"
                  id="customer-id" data-live-search-style="begins" title="Select customer...">
                  <option value="1">dhiman (+8801111111101)</option>
                  <option value="2">moinul (+8801200000001)</option>
                  <option value="3">tariq (3424)</option>
                  <option value="11">walk-in-customer (01923000001)</option>
                  <option value="19">Ashfaq (1212)</option>
                  <option value="21">Modon Miya (2222)</option>
                </select>
              </div>

              <input type="hidden" name="start_date" value="2021-12-01" />
              <input type="hidden" name="end_date" value="2021-12-06" />

              <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- end customer modal -->

    <!-- supplier modal -->
    <div id="supplier-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
      class="modal fade text-left">
      <div role="document" class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 id="exampleModalLabel" class="modal-title">Supplier Report</h5>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i
                  class="dripicons-cross"></i></span></button>
          </div>
          <div class="modal-body">
            <p class="italic"><small>The field labels marked with * are required input fields.</small></p>
            <form method="POST" action="/report/supplier" accept-charset="UTF-8"><input
                name="_token" type="hidden" value="eBYxzcH3Si5TM0mB9NGhTMchTB3yOL38rHr33YNc">
              <div class="form-group">
                <label>Supplier *</label>
                <select name="supplier_id" class="selectpicker form-control" required data-live-search="true"
                  id="supplier-id" data-live-search-style="begins" title="Select Supplier...">
                  <option value="1">abdullah (231231)</option>
                  <option value="3">ismail (23123123)</option>
                </select>
              </div>

              <input type="hidden" name="start_date" value="2021-12-01" />
              <input type="hidden" name="end_date" value="2021-12-06" />

              <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- end supplier modal -->

    {{ $slot }}


{{-- SCRIPTS --}}
     <script type="text/javascript" src="{{ asset('assets/vendor/js/jquery.min.js')}}"></script>
      <script type="text/javascript" src="{{ asset('assets/vendor/js/jquery-ui.min.js')}}"></script>
      <script type="text/javascript" src="{{ asset('assets/vendor/js/bootstrap-datepicker.min.js')}}"></script>
      <script type="text/javascript" src="{{ asset('assets/vendor/js/jquery.timepicker.min.js')}}"></script>
      <script type="text/javascript" src="{{ asset('assets/vendor/js/popper.min.js')}}">
      </script>
      <script type="text/javascript" src="{{ asset('assets/vendor/js/bootstrap.min.js')}}"></script>
      <script type="text/javascript" src="{{ asset('assets/vendor/js/bootstrap-toggle.min.js')}}"></script>
      <script type="text/javascript" src="{{ asset('assets/vendor/js/bootstrap-select.min.js')}}"></script>

      <script type="text/javascript" src="{{ asset('assets/vendor/js/grasp_mobile_progress_circle-1.0.0.min.js')}}"></script>
      <script type="text/javascript" src="{{ asset('assets/vendor/js.cookie/jquery.cookie.js')}}">
      </script>
      <script type="text/javascript" src="{{ asset('assets/vendor/js/Chart.min.js')}}"></script>
      <script type="text/javascript" src="{{ asset('assets/vendor/js/charts-custom.js')}}"></script>
      <script type="text/javascript" src="{{ asset('assets/vendor/js-validation/jquery.validate.min.js')}}"></script>
      <script type="text/javascript" src="{{ asset('assets/vendor/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script type="text/javascript" src="{{ asset('assets/vendor/js/front.js')}}"></script>


      <script type="text/javascript" src="{{ asset('assets/vendor/js/moment.min.js')}}"></script>
      <script type="text/javascript" src="{{ asset('assets/vendor/js/knockout-3.4.2.js')}}"></script>
      <script type="text/javascript" src="{{ asset('assets/vendor/js/daterangepicker.min.js')}}"></script>
      <script type="text/javascript" src="{{ asset('assets/vendor/js/tinymce.min.js')}}"></script>
      <script type="text/javascript" src="{{ asset('assets/vendor/js/dropzone.js')}}"></script>

      <!-- table sorter js-->
      <script type="text/javascript" src="{{ asset('assets/vendor/js/pdfmake.min.js')}}"></script>
      <script type="text/javascript" src="{{ asset('assets/vendor/js/vfs_fonts.js')}}"></script>
      <script type="text/javascript" src="{{ asset('assets/vendor/js/jquery.dataTables.min.js')}}"></script>
      <script type="text/javascript" src="{{ asset('assets/vendor/js/dataTables.bootstrap4.min.js')}}"></script>
      <script type="text/javascript" src="{{ asset('assets/vendor/js/dataTables.buttons.min.js')}}"></script>
      <script type="text/javascript" src="{{ asset('assets/vendor/js/buttons.bootstrap4.min.js')}}"></script>
      <script type="text/javascript" src="{{ asset('assets/vendor/js/buttons.colVis.min.js')}}"></script>
      <script type="text/javascript" src="{{ asset('assets/vendor/js/buttons.html5.min.js')}}"></script>
      <script type="text/javascript" src="{{ asset('assets/vendor/js/buttons.print.min.js')}}"></script>

      <script type="text/javascript" src="{{ asset('assets/vendor/js/sum().js')}}"></script>
      <script type="text/javascript" src="{{ asset('assets/vendor/js/dataTables.checkboxes.min.js')}}"></script>
      <script type="text/javascript" src="{{ asset('assets/vendor/js/dataTables.fixedHeader.min.js')}}"></script>
      <script type="text/javascript" src="{{ asset('assets/vendor/js/dataTables.responsive.min.js')}}"></script>
      <script type="text/javascript" src="{{ asset('assets/vendor/js/responsive.bootstrap.min.js')}}"></script>

      <script type="text/javascript">
        // Show and hide color-switcher
        $(".color-switcher .switcher-button").on('click', function () {
          $(".color-switcher").toggleClass("show-color-switcher", "hide-color-switcher", 300);
        });

        // Color Skins
        $('a.color').on('click', function () {
          /*var title = $(this).attr('title');
          $('#style-colors').attr('href', 'css/skin-' + title + '.css');
          return false;*/
          $.get('setting/general_setting/change-theme/' + $(this).data('color'), function (data) {
          });
          var style_link = $('#custom-style').attr('href').replace(/([^-]*)$/, $(this).data('color'));
          $('#custom-style').attr('href', style_link);
        });

        $(".date-btn").on("click", function () {
          $(".date-btn").removeClass("active");
          $(this).addClass("active");
          var start_date = $(this).data('start_date');
          var end_date = $(this).data('end_date');
          $.get('dashboard-filter/' + start_date + '/' + end_date, function (data) {
            dashboardFilter(data);
          });
        });

        function dashboardFilter(data) {
          $('.revenue-data').hide();
          $('.revenue-data').html(parseFloat(data[0]).toFixed(2));
          $('.revenue-data').show(500);

          $('.return-data').hide();
          $('.return-data').html(parseFloat(data[1]).toFixed(2));
          $('.return-data').show(500);

          $('.profit-data').hide();
          $('.profit-data').html(parseFloat(data[2]).toFixed(2));
          $('.profit-data').show(500);

          $('.purchase_return-data').hide();
          $('.purchase_return-data').html(parseFloat(data[3]).toFixed(2));
          $('.purchase_return-data').show(500);
        }
      </script>
    </div>

    <footer class="main-footer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <p>&copy; SalePro | Developed By <span class="external">LionCoders</span></p>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <script>
    if ('serviceWorker' in navigator) {
      window.addEventListener('load', function () {
        navigator.serviceWorker.register('/salepro/service-worker.js').then(function (registration) {
          // Registration was successful
          console.log('ServiceWorker registration successful with scope: ', registration.scope);
        }, function (err) {
          // registration failed :(
          console.log('ServiceWorker registration failed: ', err);
        });
      });
    }
  </script>
  <script type="text/javascript">

    var alert_product = 1;

    if ($(window).outerWidth() > 1199) {
      $('nav.side-navbar').removeClass('shrink');
    }
    function myFunction() {
      setTimeout(showPage, 150);
    }
    function showPage() {
      document.getElementById("loader").style.display = "none";
      document.getElementById("content").style.display = "block";
    }

    $("div.alert").delay(3000).slideUp(750);

    function confirmDelete() {
      if (confirm("Are you sure want to delete?")) {
        return true;
      }
      return false;
    }

    $("li#notification-icon").on("click", function (argument) {
      $.get('notifications/mark-as-read', function (data) {
        $("span.notification-number").text(alert_product);
      });
    });

    $("a#add-expense").click(function (e) {
      e.preventDefault();
      $('#expense-modal').modal();
    });

    $("a#send-notification").click(function (e) {
      e.preventDefault();
      $('#notification-modal').modal();
    });

    $("a#add-account").click(function (e) {
      e.preventDefault();
      $('#account-modal').modal();
    });

    $("a#account-statement").click(function (e) {
      e.preventDefault();
      $('#account-statement-modal').modal();
    });

    $("a#profitLoss-link").click(function (e) {
      e.preventDefault();
      $("#profitLoss-report-form").submit();
    });

    $("a#report-link").click(function (e) {
      e.preventDefault();
      $("#product-report-form").submit();
    });

    $("a#purchase-report-link").click(function (e) {
      e.preventDefault();
      $("#purchase-report-form").submit();
    });

    $("a#sale-report-link").click(function (e) {
      e.preventDefault();
      $("#sale-report-form").submit();
    });

    $("a#payment-report-link").click(function (e) {
      e.preventDefault();
      $("#payment-report-form").submit();
    });

    $("a#warehouse-report-link").click(function (e) {
      e.preventDefault();
      $('#warehouse-modal').modal();
    });

    $("a#user-report-link").click(function (e) {
      e.preventDefault();
      $('#user-modal').modal();
    });

    $("a#customer-report-link").click(function (e) {
      e.preventDefault();
      $('#customer-modal').modal();
    });

    $("a#supplier-report-link").click(function (e) {
      e.preventDefault();
      $('#supplier-modal').modal();
    });

    $("a#due-report-link").click(function (e) {
      e.preventDefault();
      $("#due-report-form").submit();
    });

    $(".daterangepicker-field").daterangepicker({
      callback: function (startDate, endDate, period) {
        var start_date = startDate.format('YYYY-MM-DD');
        var end_date = endDate.format('YYYY-MM-DD');
        var title = start_date + ' To ' + end_date;
        $(this).val(title);
        $('#account-statement-modal input[name="start_date"]').val(start_date);
        $('#account-statement-modal input[name="end_date"]').val(end_date);
      }
    });

    $('.selectpicker').selectpicker({
      style: 'btn-link',
    });
  </script>

  @livewireScripts
</body>

</html>