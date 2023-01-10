<aside class="main-sidebar fixed offcanvas  shadow bg-primary text-white no-b">
    <section class="sidebar">
        <div class="w-80px mt-3 mb-3 ml-3">
            <img src="{{ asset('assets') }}/img/basic/logo-white.png" alt="">
        </div>
        <ul class="sidebar-menu hover-dark">
            <li class="header"><strong>MAIN NAVIGATION</strong></li>
            <li class="treeview">
                <a href="{{ url('') }}">
                    <i class="icon icon-sailing-boat-water purple-text s-18"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="treeview"><a href="{{ route('produk.index') }}">
                    <i class="icon icon icon-package blue-text s-18"></i>
                    <span>Produk Rental</span>
                    <span class="badge r-3 badge-primary pull-right">4</span>
                </a>
            </li>
            <li class="treeview"><a href="{{ route('supir.index') }}"><i
                        class="icon icon-account_box light-green-text s-18"></i>
                    Data Supir</a>

            </li>
            <li class="treeview no-b"><a href="#">
                    <i class="icon icon-package light-green-text s-18"></i>
                    <span>Peminjaman</span>
                    <span class="badge r-3 badge-success pull-right">20</span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('peminjaman.index') }}"><i class="icon icon-circle-o"></i>Peminjaman</a>
                    </li>
                    <li><a href="panel7-inbox.html"><i class="icon icon-circle-o"></i>Panel7 - Inbox</a>
                    </li>
                    <li><a href="panel8-inbox.html"><i class="icon icon-circle-o"></i>Panel8 - Inbox</a>
                    </li>
                    <li><a href="panel-page-inbox-create.html"><i class="icon icon-add"></i>Compose</a>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
</aside>
<!--Sidebar End-->
