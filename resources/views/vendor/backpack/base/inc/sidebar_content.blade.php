<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>

<!-- Users, Roles Permissions -->
@if(backpack_user()->hasRole('admin'))
<li class="treeview">
    <a href="#"><i class="fa fa-group"></i> <span>Users, Roles, Permissions</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
        <li><a href="{{ backpack_url('user') }}"><i class="fa fa-user"></i> <span>Users</span></a></li>
        <li><a href="{{ backpack_url('role') }}"><i class="fa fa-group"></i> <span>Roles</span></a></li>
        <li><a href="{{ backpack_url('permission') }}"><i class="fa fa-key"></i> <span>Permissions</span></a></li>
    </ul>
</li>
@endif

<li><a href='{{ backpack_url('vehicle') }}'><i class='fa fa-car'></i> <span>Vehicles</span></a></li>

<li><a href='{{ backpack_url('driver') }}'><i class='fa fa-drivers-license'></i> <span>Drivers</span></a></li>

<li class="treeview">
    <a href="{{ backpack_url('rents') }}"><i class="fa fa-book"></i> <span>Rents</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
        <li><a href="{{ backpack_url('rents') }}"><i class="fa fa-flag"></i> <span>All</span></a></li>
        <li><a href="{{ backpack_url('rents/confirmed') }}"><i class="fa fa-check"></i> <span>Confirmed</span></a></li>
        <li><a href="{{ backpack_url('rents/cancelled') }}"><i class="fa fa-times"></i> <span>Cancelled</span></a></li>
        <li><a href="{{ backpack_url('rents/not-reviewed') }}"><i class="fa fa-question-circle"></i> <span>Not Reviewed</span></a></li>
    </ul>
</li>

<li class="treeview">
    <a href="#"><i class="fa fa-cog"></i> <span>Settings</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
        <li><a href="{{ backpack_url('settings/id') }}"><i class="fa fa-flag"></i> <span>Identification</span></a></li>
        <li><a href="{{ backpack_url('settings/slider') }}"><i class="fa fa-sliders"></i> <span>slider</span></a></li>
        <li><a href="{{ backpack_url('settings/colors') }}"><i class="fa fa-paint-brush"></i> <span>Colors</span></a></li>
        <li><a href="{{ backpack_url('settings/contacts') }}"><i class="fa fa-address-card"></i> <span>Contacts</span></a></li>
    </ul>
</li>

<li class="treeview">
  <a href="#"><i class="fa fa-globe"></i> <span>Translations</span> <i class="fa fa-angle-left pull-right"></i></a>
  <ul class="treeview-menu">
    <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/language') }}"><i class="fa fa-flag-checkered"></i> Languages</a></li>
    <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/language/texts') }}"><i class="fa fa-language"></i> Site texts</a></li>
  </ul>
</li>