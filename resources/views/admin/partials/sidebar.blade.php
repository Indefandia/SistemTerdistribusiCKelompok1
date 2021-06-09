<aside id="sidebar-wrapper">
  <div class="sidebar-brand">
    <a href="{{ route('admin.dashboard') }}">ChitChat</a>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
    <a href="index.html">St</a>
  </div>
  <ul class="sidebar-menu">
      <li class="{{ Request::route()->getName() == 'admin.dashboard' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.dashboard') }}"><i class="fa fa-columns"></i> <span>Tentang Kita</span></a></li>
      <li class="{{ Request::route()->getName() == 'chats' ? ' active' : '' }}"><a class="nav-link" href="{{ url('chats') }}"><i class="fa fa-comment-alt"></i> <span>Forum Chat</span></a></li>
      <li class="{{ Request::route()->getName() == 'admin.info' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.info') }}"><i class="fa fa-info-circle"></i> <span>Info</span></a></li>
      @if(Auth::user()->can('manage-users'))
      <li class="menu-header">Users</li>
      <li class="{{ Request::route()->getName() == 'admin.users' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.users') }}"><i class="fa fa-users"></i> <span>Users</span></a></li>
      @endif
    </ul>
</aside>
