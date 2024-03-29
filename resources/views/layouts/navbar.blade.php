@if (Session::get('account_type') == 'admin')
@include('layouts/navbar_admin')
@elseif (Session::get('account_type') == 'super admin')
@include('layouts/navbar_superadmin')
@else
@include('layouts/navbar_user')
@endif