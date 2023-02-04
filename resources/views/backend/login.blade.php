<x-master title="Login">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <x-form action="{{ route('login.confirm') }}" method="POST" class="user">
                                        <div class="form-group">
                                            <x-input-text
                                                type="email"
                                                name="email"
                                                class="form-control form-control-user"
                                                id="inputEmail"
                                                placeholder="Enter Email Address..."
                                            />
                                            
                                        </div>
                                        <div class="form-group">
                                            <x-input-text
                                                type="password"
                                                name="password"
                                                class="form-control form-control-user"
                                                id="inputPassword"
                                                placeholder="Password"
                                            />
                                        </div>
                                        <x-btn
                                            class="btn btn-primary btn-user btn-block"
                                            type="submit"
                                            btnText="Login"
                                        />
                                    </x-form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
</x-master>