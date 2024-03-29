{{-- layouts/app.blade.php or wherever your main layout is defined --}}
<!DOCTYPE html>
<html lang="en">
<head>
   
</head>
<body>
    @include('layouts/navbar', ['profileImage' => Auth::user()->profile_image ?? 'default-avatar.png'])
   
    @yield('content')
</body>
</html>
