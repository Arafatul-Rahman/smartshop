<div class="sidebar-nav navbar-collapse">
    <ul class="nav" id="side-menu">
        <li class="sidebar-search">
            <div class="input-group custom-search-form">
                <input type="text" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
            <!-- /input-group -->
        </li>
        <li>
            <a href="{{url('/dashbord')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
        </li>
        <li>
            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Catagory<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{url('/category/add')}}">Add Catagory</a>
                </li>
                <li>
                    <a href="{{url('/category/manage')}}">Manege Catagory</a>
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
        <li>
            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Menufracturer<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{url('/menufracturer/add')}}">Add menufracturer</a>
                </li>
                <li>
                    <a href="{{url('/menufracturer/manage')}}">Manege menufracturer</a>
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
           <li>
            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Product<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{url('/product/add')}}">Add Product</a>
                </li>
                <li>
                    <a href="{{url('/product/manage')}}">Manege Product</a>
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
        <li>
            <a href="#"><i class="fa fa-table fa-fw"></i> Tables</a>
        </li>
        <li>
            <a href="#"><i class="fa fa-edit fa-fw"></i> Forms</a>
        </li>
   
  
   
    </ul>
</div>