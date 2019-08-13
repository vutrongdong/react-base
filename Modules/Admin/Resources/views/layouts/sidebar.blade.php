<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ asset('images/AdminLTELogo.png') }}"
             alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Manager</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('images/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ $adminUser->name }}</a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-dashboard"></i>
                        <p>Dashboard<i class="right fa fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="index.html" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Item1</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index2.html" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Item2</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="form.html" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Form</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="modal.html" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Modal</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="table.html" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Table</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Item 4</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Item 5</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Item 6</p>
                    </a>
                </li>
            </ul>
        </nav>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
