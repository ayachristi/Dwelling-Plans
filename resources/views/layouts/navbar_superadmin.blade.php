<button class="sidebar-tg">
    <div class="top"></div>
    <div class="middle"></div>
    <div class="bottom"></div>
</button>

<div class="sidebar-bg"></div>

<div class="sidebar default text-center">

    <div class="brand-logo">
        <img class="mt-5 mb-2" src="https://i.imgur.com/ZbvY1Zl.png" alt="brand logo">
    </div>


    <div class="profile">
        <ul>
            <li class="profile-img mb-1">
                <img src="https://img.freepik.com/free-photo/black-businessman-happy-expression_1194-2539.jpg" alt="profile picture">
            </li>
            <li>
                <h5>Jorge</h5>
            </li>
        </ul>
    </div>

    <ul class="mt-5 mb-5 d-grid gap-3">
        <li><a href="/admin/dashboard">Dashboard</a></li>
        <li><a href="/admin/accounts">Admin</a></li>
        <li><a href="/admin/products">Products</a></li>
        <li><a href="/admin/orders">Orders</a></li>
        <!-- <li><a href="#">Settings</a></li> -->

    </ul>

    <div class="logout">
        <a href="{{route('logout')}}">Logout</a>
    </div>
</div>