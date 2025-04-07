<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/memeriksa" class="nav-link {{ request()->is('memeriksa') ? 'active' : '' }}">
              <i class="nav-icon fas fa-stethoscope"></i>
              <p>
                Memeriksa
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/obat" class="nav-link {{ request()->is('obat') ? 'active' : '' }}">
              <i class="nav-icon fas fa-capsules"></i>
              <p>
                Obat
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link {{ request()->is('') ? 'active' : '' }}">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>