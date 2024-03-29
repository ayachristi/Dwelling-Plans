<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/header')
    <link rel="icon" type="image/png" href="{{ asset('img/admin.png') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Account</title>

</head>

<body class="body_admin_account">
    <div class="container-admin-accounts">
        <button type="button" class="btn btn-outline-dark can_del d-flex justify-content-center align-items-center" onclick="goBack()"><span class="material-symbols-outlined">
                arrow_back
            </span></button>
        <h1 class="h1_admin_account">Admin Accounts</h1>
        <h2 class="h1_admin_account">ACCOUNT ID: {{$user -> user_id}}</h2>
        <ul class="ul_admin_account">
            <li class="li_admin_account"><strong>NAME:</strong> {{$user -> last_name}}, {{$user -> first_name}}</li>
            <li class="li_admin_account"><strong>EMAIL:</strong> {{$user -> email}}</li>
        </ul>
    </div>
</body>
<style>
    .body_admin_account {
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #f4f4f4;
        font-family: Arial, sans-serif;


    }

    .container-admin-accounts {
        background-color: #fff;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: auto;
        max-width: 600px;
        width: 500px;

    }

    .h1_admin_account {
        color: #333;
        font-size: 24px;
        text-align: center;

    }

    .ul_admin_account {
        list-style: none;
        padding: 0;
        margin-left: 80px;
        margin-top: 30px;
    }

    .li_admin_account {
        margin-bottom: 10px;
        color: #555;
    }
</style>
<script>
    function goBack() {
        window.history.back();
    }
</script>

</html>