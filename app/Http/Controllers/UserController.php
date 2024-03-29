<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class UserController extends Controller
{



    public function showProfiles()
    {
        $users = User::all(); // Fetch all users from the database

        return view('profiles', compact('users'));
    }

    public function show_login()
    {
        return view('login');
    }


    public function login(Request $r)
    {
        $user = User::where("email", "=", $r->email)
            ->first();

        if ($user) {
            if (Hash::check($r->pw, $user->password)) {
                Session::put('user_id', $user->user_id);
                Session::put('first_name', $user->first_name);
                Session::put('last_name', $user->last_name);
                Session::put('email', $user->email);
                Session::put('account_type', $user->account_type);
                if (Session::get('account_type') == 'admin') {
                    return redirect('/admins/dashboard');
                } else if (Session::get('account_type') == 'user') {
                    return redirect('/');
                } else if (Session::get('account_type') == 'super admin') {
                    return redirect('/admin/dashboard');
                }
            } else {
                return redirect('/login');
            }
        } else {
            return redirect('/login');
        }
    }

    public function logout()
    {
        if (Session::has('user_id')) {
            Session::flush();
        }

        return redirect('login');
    }

    public function user_profile()
    {
        $user = User::query()
            ->select('*')
            ->where('user_id', '=', Session::get('user_id'))
            ->get()
            ->first();

        return view('profile', compact('user'));
    }

    public function edit_profile(Request $r, string $id)
    {
        // Validate input data
        $r->validate([
            'profile_picture' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore($id, 'user_id'),
            ],
            'mobile_number' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'birthdate' => 'required|date',
        ]);

        // Retrieve the user
        $user = User::where('user_id', $id)->first();

        if (!$user) {
            return redirect('/profile')->with('error', 'User not found');
        }

        // Update the user's information
        $user->update([
            'first_name' => $r->input('first_name'),
            'last_name' => $r->input('last_name'),
            'email' => $r->input('email'),
            'mobile_number' => $r->input('mobile_number'),
            'address' => $r->input('address'),
            'birthdate' => $r->input('birthdate'),
        ]);

        // Redirect back to the profile page with a success message
        return redirect('/profile')->with('success', 'Profile updated successfully');
    }


    public function edit_profile_form(string $id)
    {
        $user = User::where('user_id', '=', $id)
            ->join('accounts', 'accounts.user_id', '=', 'users.user_id')
            ->first();

        return view('profile', compact('user'));
    }

    public function show_register()
    {
        return view('register');
    }

    public function register(Request $r)
    {
        $user = new User;
        $user->first_name = $r->input('first_name');
        $user->last_name = $r->input('last_name');
        $user->email = $r->input('email');
        $user->password = Hash::make($r->input('pw'));
        $user->account_type = 'user';
        $user->save();

        return redirect("/login");
    }

    public function portfolio()
    {
        return view('portfolio');
    }


    public function about()
    {
        return view('about');
    }

    public function upload_profile_picture(Request $r)
    {
        $sp = new User;
        $sp->user_id = Session::get('user_id');
        if ($r->file('profile_picture')) {
            $file = $r->file('profile_picture');
            $filename = date('YmdHiu') . $file->getClientOriginalName();
            $file->move(public_path('img/user_profiles'), $filename);
            $sp->image = $filename;
        }
        $sp->save();

        return redirect('/profile')->with('success', 'Profile picture updated!');
    }

    public function FAQ()
    {
        return view('FAQ');
    }
}
