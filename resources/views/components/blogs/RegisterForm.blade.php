<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-8 col-xl-6">
            <h3 class="mb-4 pb-2 pb-md-0 px-md-2 text-center">Registration Form</h3>
            <div class="card rounded-3">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img3.webp"
                    class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
                    alt="Sample photo">
                <div class="SignUpCard-Body card-body p-4 p-md-5">
                    <form class="px-md-2" id="UserSignUpForm" method="POST" action="/sign-up">
                        @csrf
                        <div class="row mb-4">
                            <div class="col">
                                <input type="text" id="name" name="name" class="form-control"
                                    placeholder="First name" aria-label="First name" value="{{old('name')}}">
                                <span class="NameError text-danger">
                                    @error('name')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="col">
                                <input type="text" name="lastName" id="lastName" class="form-control"
                                    placeholder="Last name" aria-label="Last name" value="{{old('lastName')}}">
                                <span class="text-danger lastNameError">
                                    @error('lastName')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-sm-12">
                                <input type="email" id="email" name="email" class="form-control"
                                    placeholder="Email" value="{{old('email')}}">
                                <span class="text-danger EmailError">
                                    @error('email')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-sm-12">
                                <input type="password" id="password" name="password" class="form-control"
                                    placeholder="Password">
                                <span class="text-danger PasswordError">
                                    @error('password')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-sm-12">
                                <input type="password" name="confirmPassword" id="Cpassword" class="form-control"
                                    placeholder="Confirm Password">
                                <span class="text-danger ConfirmPasswordError">
                                    @error('confirmPassword')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <button onclick="User()" type="submit" class="btn btn-success btn-lg my-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
