<ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="{{ request()->is('arsip') ? 'active' : ''}}"><a href="/arsip"><i class="fa fa-book"></i> <span>Arsip</span></a></li>
        <li class="{{ request()->is('about') ? 'active' : ''}}"><a href="/about"><i class="fa fa-book"></i> <span>About</span></a></li>
      </ul>