<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" type="image/png" href="{{ asset('img/profile.png') }}">
  @include('layouts/header')
  <script src="/js/profile.js"></script>
  <script src="/js/footer.js"></script>

  <title>Profile</title>
</head>

<body class="profile_body">
  <div class="profile_wrapper">
    @include('layouts/navbar')

   
      <form id="edit_profile_form" action="{{ url('/profile/'.$user->user_id) }}" method="POST" enctype="multipart/form-data" class="container-fluid">
        @csrf @method('PUT')
        <h1 id="your_profile">Your Profile</h1>

        <div class="row">
          <div class="col-lg-12">

          
            <img id="profile_picture" src="{{ $user->profile_image ? asset('img/' . $user->profile_image) : '/img/avatar.png' }}" alt="Profile Picture" />
         
          <input type="file" name="profile_picture" id="profile_picture_upload" style="display: none;" onchange="previewImage();" />
          
       
          
            <h2>{{$user -> first_name}}, {{$user -> last_name}}</h2>
            <h5>{{$user -> email}}</h5>

            {{--
          <img
            id="profile_picture"
            src="{{ $user->profile_picture }}"
            alt="Profile Picture"
            />
            --}} {{--
          <label for="profile_picture_upload">Upload Profile Picture:</label>
          <br />
          <input
            type="file"
            name="profile_picture"
            class="input_profile text-center"
            id="profile_picture_upload"
          /><br />
          <button
            type="button"
            id="upload_button"
            class="btn btn-primary button_profile"
          >
            Upload
          </button>
          --}}
            <strong>
              <p class="mt-5 fs-4">Edit Your Profile Here:</p>
            </strong>

            <label for="email" class="label_profile mt-4">First Name:</label>
            <input class="input_profile" type="text" name="first_name" value="{{ $user->first_name }}" required disabled />

            <label for="email" class="label_profile">Last Name:</label>
            <input class="input_profile" type="text" name="last_name" value="{{ $user->last_name }}" required disabled />

            <label for="email" class="label_profile">Email:</label>
            <input class="input_profile" type="email" name="email" value="{{ $user->email }}" required disabled /><br />
            <button type="button" id="edit_button" class="btn btn-dark button_profile">
              Edit
            </button>
            <button type="submit" style="display: none" id="save_button" class="btn btn-dark button_profile">
              Save Changes
            </button>

          </div>
        </div>

      </form>
  </div>
  @include('layouts/footer')

</body>
<script>
  document.getElementById('change_picture_button').onclick = function() {
    document.getElementById('profile_picture_upload').click();
  };
  
  document.getElementById('profile_picture_upload').onchange = function(event) {
    if (event.target.files && event.target.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        document.getElementById('profile_picture').src = e.target.result;
      };
      reader.readAsDataURL(event.target.files[0]);
    }
  };
  document.getElementById('change_picture_button').addEventListener('click', function() {
    document.getElementById('profile_picture_upload').click();
  });

  function previewImage() {
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById('profile_picture_upload').files[0]);

    oFReader.onload = function (oFREvent) {
      document.getElementById('profile_picture').src = oFREvent.target.result;
    };
  };
  </script>
</html>