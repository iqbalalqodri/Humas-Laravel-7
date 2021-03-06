<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{asset('AdminLTE/dist/img/admin.jpg')}}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{\Auth::user()->name}}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
    <li class="{{ Request::is('admin/Home') ? "active treeview":"" }}"><a href="{{url('admin/Home')}}"><i class="fa fa-dashboard"></i> <span>Dahasboard</span></a></li>
    <li class="treeview {{ Request::is('admin/Profil-Latar-Belakang')||Request::is('admin/Profil-Dasar-Pemikiran')||Request::is('admin/Profil-Visi-Misi-Moto') ? "active treeview":"" }}">
      <a href="#">
        <i class="fa fa-circle-o"></i> <span>Profil</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
         <li class="{{ Request::is('admin/Profil-Latar-Belakang')||Request::is('admin/Profil-Latar-Belakang/add')||Request::is('admin/Profil-Latar-Belakang/edit') ? "active treeview":"" }}"><a href="{{url('admin/Profil-Latar-Belakang')}}"><i class="fa fa-circle-o"></i> <span>Latar Belakang</span></a></li>
         <li class="{{ Request::is('admin/Profil-Dasar-Pemikiran')||Request::is('admin/Profil-Dasar-Pemikiran/add')||Request::is('admin/Profil-Dasar-Pemikiran/edit') ? "active treeview":"" }}"><a href="{{url('admin/Profil-Dasar-Pemikiran')}}"><i class="fa fa-circle-o"></i> <span>Dasar Pemikiran</span></a></li>
         <li class="{{ Request::is('admin/Profil-Visi-Misi-Moto')||Request::is('admin/Profil-Visi-Misi-Moto/add')||Request::is('admin/Profil-Visi-Misi-Moto/edit') ? "active treeview":"" }}"><a href="{{url('admin/Profil-Visi-Misi-Moto')}}"><i class="fa fa-circle-o"></i> <span>Visi Misi Moto</span></a></li>

      </ul>
    </li>
    <li class="{{ Request::is('admin/Kegiatan')||Request::is('admin/Kegiatan/add')||Request::is('admin/Kegiatan/edit') ? "active treeview":"" }}"><a href="{{url('admin/Kegiatan')}}"><i class="fa fa-circle-o"></i> <span>Kegiatan</span></a></li>
    <li class="{{ Request::is('admin/Pengumuman')||Request::is('admin/Pengumuman/add')||Request::is('admin/Pengumuman/edit') ? "active treeview":"" }}"><a href="{{url('admin/Pengumuman')}}"><i class="fa fa-circle-o"></i> <span>Pengumuman</span></a></li>
    <li class="{{ Request::is('admin/Berita')||Request::is('admin/Berita/add')||Request::is('admin/Berita/edit') ? "active treeview":"" }}"><a href="{{url('admin/Berita')}}"><i class="fa fa-circle-o"></i> <span>Berita</span></a></li>
    <li class="{{ Request::is('admin/Kontak')||Request::is('admin/Kontak/add')||Request::is('admin/Kontak/edit') ? "active treeview":"" }}"><a href="{{url('admin/Kontak')}}"><i class="fa fa-circle-o"></i> <span>Kontak</span></a></li>
      
    
    
<li class="header">Pengaturan</li>
      <li class="{{ Request::is('admin/Password')? "active treeview":"" }}"><a href="{{url('admin/Password')}}"><i class="fa fa-key text-yellow"></i> <span>Ganti Password</span></a></li>
    </ul>
  </section>