  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
              <div class="pull-left image">
                  <img src="{{ url('images') }}/{{ auth()->user()->avatar }}" class="img-circle" alt="User Image">
              </div>
              <div class="pull-left info">
                  <p>{{ auth()->user()->name }}</p>
                  <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
              </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
              <div class="input-group">
                  <input type="text" name="q" class="form-control" placeholder="Search...">
                  <span class="input-group-btn">
                      <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i
                              class="fa fa-search"></i>
                      </button>
                  </span>
              </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
              <li><a href="{{ route('admin.index') }}">
                      <i class="fa fa-home"></i> <span>Trang quản trị</span></a>
              </li>

              <li class="treeview">
                  <a href="#">
                      <i class="fa fa-th"></i> <span>Quản lý danh mục</span> <i class="fa fa-angle-left pull-right"></i>
                      <ul class="treeview-menu">
                          <li><a href="{{ route('category.index') }}"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                          <li><a href="{{ route('category.create') }}"><i class="fa fa-circle-o"></i> Thêm mới</a></li>
                      </ul>
                  </a>
                  <ul class="treeview-menu">
                  </ul>
              </li>
              <li class="treeview">
                  <a href="#">
                      <i class="fa fa-th"></i> <span>Quản lý sản phẩm</span> <i class="fa fa-angle-left pull-right"></i>
                      <ul class="treeview-menu">
                          <li><a href="{{ route('product.index') }}"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                          <li><a href="{{ route('product.create') }}"><i class="fa fa-circle-o"></i> Thêm mới</a></li>
                      </ul>
                  </a>
                  <ul class="treeview-menu">
                  </ul>
              </li>
              <li class="treeview">
                  <a href="#">
                      <i class="fa fa-table"></i> <span>Quản lý Banner</span> <i
                          class="fa fa-angle-left pull-right"></i>
                      <ul class="treeview-menu">
                          <li><a href="{{ route('banner.index') }}"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                          <li><a href="{{ route('banner.create') }}"><i class="fa fa-circle-o"></i> Thêm mới</a></li>
                      </ul>
                  </a>
                  <ul class="treeview-menu">
                  </ul>
              </li>
              <li class="treeview">
                  <a href="#">
                      <i class="fa fa-table"></i> <span>Quản lý Blog</span> <i class="fa fa-angle-left pull-right"></i>
                      <ul class="treeview-menu">
                          <li><a href="{{ route('blog.index') }}"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                          <li><a href="{{ route('blog.create') }}"><i class="fa fa-circle-o"></i> Thêm mới</a></li>
                      </ul>
                  </a>
                  <ul class="treeview-menu">
                  </ul>
              </li>
              <li class="treeview">
                  <a href="#">
                      <i class="fa fa-table"></i> <span>Quản lý đơn hàng</span> <i class="fa fa-angle-left pull-right"></i>
                      <ul class="treeview-menu">
                          <li><a href="{{ route('order.index') }}"><i class="fa fa-circle-o"></i> Danh sách</a></li>

                      </ul>
                  </a>
                  <ul class="treeview-menu">
                  </ul>
              </li>
              
              @if (auth()->user()->status == 'boss')
              <li class="treeview">
                  <a href="#">
                      <i class="fa fa-users"></i> <span>Tài khoản</span> <i class="fa fa-angle-left pull-right"></i>
                      <ul class="treeview-menu">
                          <li><a href="{{ route('user.index') }}"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                          <li><a href="{{ route('user.create') }}"><i class="fa fa-circle-o"></i> Thêm mới</a></li>
                      </ul>
                  </a>
                  <ul class="treeview-menu">
                  </ul>
              </li>
              @endif
          </ul>
      </section>
      <!-- /.sidebar -->
  </aside>