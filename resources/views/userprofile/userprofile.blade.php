@extends('layouts.app')
<style>
    .floating-social-bar {
bottom: 0;
left:0;
width: 100%;
padding: 5px 0;
text-align: center;
background-color: rgba(0,0,0,.5);
font-family: arial;
}

.floating-social-bar span {
color: #fff;
}

.floating-social-bar a {
display: inline-block;
color: #fff;
text-decoration: none;
margin: 0 2px;
padding: 7px 10%;
border-radius: 5px;
font-weight: bold;
}

.twitter-share {
background-color: #00aced;
}

.facebook-share {
background-color: #3b5998;
}
.whatsapp-share {
background-color: green;
}

.googleplus-share {
background-color: #dd4b39;
}

@media (max-width: 768px) {

.floating-social-bar span {
display: block;
margin: 0 0 5px;
}

.floating-social-bar a {
font-size: 12px;
}

.hide-mobile {
display: none;
}

}

label {
  clear: both;
  display: block;
  font-size: 0.85em;
  font-weight: bold;
  padding: 0.8em 0 0.2em 0;
  user-select: none;
}

input, button {
  float: center;
  font-size: 1em;
  padding: 3px 6px;
  margin: 0;
  border: 1px solid #7FB3D5;
  outline: 0;
  box-shadow: none;
}

::-moz-focus-inner {
  padding: 0;
  border: 0;
}
input  button{
    overflow: visible;
    width: 50%;
    height: auto;
}
input {
  width: 10em;
  background-color: #fff;
  border-right: 0 none;
  border-radius: 10px 0 0 10px;
}

button {
  position: relative;
  background-color: #5499C7;
  border-radius: 0 10px 10px 0;
  cursor: pointer;
}

.copied::after {
  position: absolute;
  top: 12%;
  right: 110%;
  display: block;
  content: "copied";
  font-size: 0.75em;
  padding: 2px 3px;
  color: #fff;
  background-color: #22a;
  border-radius: 3px;
  opacity: 0;
  will-animate: opacity, transform;
  animation: showcopied 1.5s ease;
}

@keyframes showcopied {
  0% {
    opacity: 0;
    transform: translateX(100%);
  }
  70% {
    opacity: 1;
    transform: translateX(0);
  }
  100% {
    opacity: 0;
  }
}

body{
  background-color: #C9E8F9;
  width:100vw;
}
.yowrap{
  width:100%;
  background-color:#EFF6FA;
}
.yomain{
  width:100%;
  max-width:900px;
}
.yotitle{
background-color:#2980B9;
padding:0px 20px 0px 20px;margin:0;font-family:Clan,Helvetica,Arial,sans-serif;font-size:30px;color:#1fbad6;line-height:37px;text-decoration:none;text-transform:uppercase;
}
.yodetailes{
  margin:0;color:#000000;font-family:'HelveticaNeue-Light','Helvetica Neue Light','Helvetica Regular',Arial,sans-serif;font-size:16px;line-height:25px;padding:10px 10px 10px 5px;
}
</style>
@section('breadcrumb')
 <div class="page-title-right">
    <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><a href="{{ route('profile') }}">Profile</a></li>
        <li class="breadcrumb-item active">Starter</li>
    </ol>
</div>
  <h4 class="page-title">Starter page</h4>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Home</div>
                 @if ( session('success'))
                     <span class="alert alert-success">{{ session('success') }}</span>
                 @endif
                <div class="card-body">
                    <form method="POST"action="{{ route('userprofileupdate') }}"enctype="multipart/form-data">
                        @csrf
                         <div class="mt-2">
                              <label>Name</label>
                              <input type="text"class="form-control"name="name"value="{{ Auth::user()->name }}">
                              @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                              @endif
                         </div>
                         <div class="mt-2">
                            <img height="250px" class="card-img-top" src="{{ asset('uploads/users_photo/'.Auth::user()->profile_photo) }}" alt="Card image cap">
                         </div>
                          <div class="mt-2">
                           <input type="file"class="form-control"name="profile_photo">
                           @if ($errors->has('profile_photo'))
                              <span class="text-danger">{{ $errors->first('profile_photo') }}</span>
                           @endif
                         </div>
                          <div class="mt-2">
                             <button class="btn btn-success"type="submit">Updated</button>
                         </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Change Password</div>
                 @if ( session('success'))
                     <span class="alert alert-success">{{ session('success') }}</span>
                 @endif
                <div class="card-body">
                    <form method="POST"action="{{ route('userpasswordupdated') }}">
                        @csrf
                         <div class="mt-2">
                              <label>Old Password</label>
                              <input type="text"class="form-control @error('old_password') is-invalid   @enderror "name="old_password">
                              @error('old_password')
                                   <span class="text-danger">{{ $message }}</span>
                              @enderror
                         </div>

                         <div class="mt-2">
                              <label> New Password</label>
                              <input type="text"class="form-control @error('new_password') is-invalid   @enderror"name="new_password">
                              @error('new_password')
                                   <span class="text-danger">{{ $message }}</span>
                              @enderror
                         </div>
                          <div class="mt-2">
                              <label> Confirmation Password</label>
                              <input type="text"class="form-control  @error('confirmation_password') is-invalid   @enderror"name="confirmation_password">
                              @error('confirmation_password')
                                   <span class="text-danger">{{ $message }}</span>
                              @enderror
                         </div>
                          <div class="mt-2">
                             <button class="btn btn-success"type="submit">Updated</button>
                         </div>
                    </form>
                </div>
            </div>
        </div>
    <div class="col-md-12">
      <div align="center" class="yowrap">
        <div class="yorefer">
            <label for="website">Your Referral Link:</label>
            <input type="text" id="website" value="{{ route('refferalregister',Auth::user()->username) }}"readonly>
            <button data-copytarget="#website">copy</button>
        </div>
        <div class="yoshare">
            <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" />
            <br/>
        <div class="floating-social-bar">
            <span>Invite friends using: </span>
            <a class="fa fa-twitter twitter-share sociallink" href="https://twitter.com/share?url={{ route('refferalregister', Auth::user()->user_name) }}"></a>
            <a class="fa fa-facebook facebook-share sociallink" href="https://www.facebook.com/sharer/sharer.php?u={{ route('refferalregister', Auth::user()->user_name) }}"></a>
            <a class="whatsapp-share fa fa-whatsapp sociallink" href="https://api.whatsapp.com/send?text={{ route('refferalregister', Auth::user()->user_name) }}"></a>
         </div>
        </div>
        <div class="yotnc">
        </div>
        </div>
    </div>
    </div>
</div>
<script>
    (function() {

	'use strict';

  // click events
  document.body.addEventListener('click', copy, true);

	// event handler
	function copy(e) {

    // find target element
    var
      t = e.target,
      c = t.dataset.copytarget,
      inp = (c ? document.querySelector(c) : null);

    // is element selectable?
    if (inp && inp.select) {

      // select text
      inp.select();

      try {
        // copy text
        document.execCommand('copy');
        inp.blur();

        // copied animation
        t.classList.add('copied');
        setTimeout(function() { t.classList.remove('copied'); }, 1500);
      }
      catch (err) {
        alert('please press Ctrl/Cmd+C to copy');
      }

    }

	}

})();
</script>
@endsection
