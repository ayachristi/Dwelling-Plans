<!DOCTYPE html>
<html lang="en">

<head>
   @include('layouts/header_superadmin')
    <link rel="icon" type="image/png" href="{{ asset('img/super_admin.png') }}">
  
    <title>Register</title>
  
</head>

<body class="register_new_admin">
    <form class="form_register_new_admin" action="/register/admin" method="POST">
        @csrf
        <button type="button" class="btn btn-outline-dark can_del d-flex justify-content-center align-items-center" onclick="goBack()"><span class="material-symbols-outlined">
            arrow_back
        </span></button>
        <h1 class="h1_register_new_admin">Register <br/> New Admin</h1>
        <div class="form-group">
            <label class="label_register_new_admin">First name:</label>
            <input type="text" name="first_name" class="form-control" />
        </div>
        <div class="form-group">
            <label class="label_register_new_admin">Last name:</label>
            <input type="text" name="last_name" class="form-control input_reg_admin" />
        </div>
        <div class="form-group">
            <label class="label_register_new_admin">Email address:</label>
            <input type="email" name="email" class="form-control input_reg_admin" />
        </div>
        <div class="form-group">
            <label class="label_register_new_admin">Password:</label>
            <input type="password" name="pw" class="form-control input_reg_admin" />
        </div>
        <div class="form-group">
            <label class="label_register_new_admin">Confirm password:</label>
            <input type="password" name="con_pw" class="form-control" />
        </div>
        <input type="submit" class="btn btn-dark btn_reg_ad mt-3" value="Register" />
    </form>
</body>
<style>
    .register_new_admin {
        background-color: #f0f2f5;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }
    .form_register_new_admin {
        background: #ffffff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 400px;
    }
    .h1_register_new_admin {
        text-align: center;
        margin-bottom: 24px;
    }

    .label_register_new_admin {
        font-weight: bold;
    }

    .input_reg_admin {
        width: 100%;
        padding: 10px;
        margin: 8px 0 16px;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    .btn_reg_ad {
        width: 100%;
        color: #fff;
        background-color: #757575;
        border-color: #757575;
        padding: 10px;
        border-radius: 4px;
        cursor: pointer;
    }
    .btn_reg_ad:hover {
        background-color: #2a3439;
        border-color: #2a3439;
    }
</style>
<script>
function goBack() {
window.history.back();
}
</script>
</html>
