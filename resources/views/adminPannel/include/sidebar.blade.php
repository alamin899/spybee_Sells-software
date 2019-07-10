{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>--}}
{{----}}
<!-- jQuery Modal -->
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>--}}
{{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />--}}



<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('dashbord')}}" class="brand-link">
        <img src="{{asset('admin/images/favicon.png')}}" alt="Spybee Logo" class="brand-image img-circle elevation-3"
             style="">
{{--        opacity: .8--}}
        <span class="brand-text font-weight-light">Spybee</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
    {{--<div class="user-panel mt-3 pb-3 mb-3 d-flex">--}}
    {{--<div class="image">--}}
    {{--<img src="{{asset('admin/adminlte/dist/')}}/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">--}}
    {{--</div>--}}
    {{--<div class="info">--}}
    {{--<a href="#" class="d-block">Alexander Pierce</a>--}}
    {{--</div>--}}
    {{--</div>--}}

    <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
{{--                    {{route('admin/dashboard')}}--}}
                    <a href="{{url('dashbord')}}" class="nav-link active">
                        <i class="nav-icon fa fa-dashboard"></i>
                        <p>
                            Dashboard

                        </p>
                    </a>

                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-users"></i>
                        <p>
                            User Management
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="background-color: #15212d;">

                        <li class="nav-item">
{{--                            {{route('moderator',['role'=>"manager"])}}--}}
                            <a href="{{route('useraddview')}}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Add Software User</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('userroleview')}}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Add User Role</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('userlistview')}}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>User List</p>
                            </a>
                        </li>
                        <li class="nav-item">
{{--                            {{route('moderator',['role'=>"waiter"])}}--}}
                            <a href="{{route('customeraddview')}}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Customer Add</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            {{--                            {{route('moderator',['role'=>"waiter"])}}--}}
                            <a href="{{route('customerlist')}}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Customer List</p>
                            </a>
                        </li>




                    </ul>
                </li>

{{--                Vendor Management--}}

                <li class="nav-item has-treeview" >
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-user-plus"></i>
                        <p>
                            Vendor Management
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="background-color: #15212d;">
                        <li class="nav-item">
                            <a href="{{route('addvendorarea')}}"  class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Add Vendor Area</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('vendoraddview')}}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Add Vendor</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('vendorlist')}}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Vendor List</p>
                            </a>
                        </li>



                    </ul>
                </li>

                {{--Product Management--}}

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-pencil-square"></i>
                        <p>
                            Product management
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="background-color: #15212d;">
                        <li class="nav-item">
                            <a href="{{route('addproductwarrenty')}}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Product Warenty</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('addproductview')}}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Add Product(Camera)</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('viewproductlist')}}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>View Product(Camera)</p>
                            </a>
                        </li>



                    </ul>
                </li>



                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-archive"></i>
                        <p>
                            Stock Management
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>

                </li>

                <li class="nav-item has-treeview">
                    <a href="{{route('viewsell')}}" class="nav-link">
                        <i class="nav-icon fa fa-product-hunt"></i>
                        <p>
                            Sells Product

                        </p>
                    </a>

                </li>

                <li class="nav-item has-treeview">
                    <a href="" class="nav-link">
                        <i class="nav-icon fa fa-address-card-o"></i>
                        <p>
                            Sells Report
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="background-color: #15212d;">
                        <li class="nav-item">
{{--                            {{route('user')}}--}}
                            <a href="" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Daily Report</p>     {{--add daily bazar by one form .there we can add daily bazar--}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Weekly Report</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Monthly Report</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Yearly Report</p>
                            </a>
                        </li>



                    </ul>
                </li>



                {{--<li class="nav-item has-treeview menu-open">--}}
                {{--<a href="{{route('admin/resevation')}}" class="nav-link ">--}}
                {{--<i class="nav-icon fa fa-table"></i>--}}
                {{--<p>--}}
                {{--Sells Report--}}

                {{--</p>--}}
                {{--</a>--}}

                {{--</li>--}}





            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>


