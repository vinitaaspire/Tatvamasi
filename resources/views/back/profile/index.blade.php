<x-app-layout>
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-8 center">
                        <div class="card">
                            <div class="card-header">
                                <h4>Admin Profile</h4>
                            </div>
                            <div class="card-body">
                                <form method="post" action="{{ route('admin.profile.updateProfile') }}" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group">
                                        <label for="name">Name:</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', Auth::guard('admin')->user()->name) }}" >
                                    </div>
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email', Auth::guard('admin')->user()->email) }}">
                                    </div>
                                    @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="password">New Password:</label>
                                        <input type="password" class="form-control" id="password" name="password">
                                    </div>
                                    @error('password')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="password_confirmation">Confirm Password:</label>
                                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                                    </div>
                                    @error('password_confirmation')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror

                                    <!-- <div class="form-group">
                                        <label for="profile_picture">Profile Picture:</label>
                                        <input type="file" class="form-control" id="profile_picture" name="profile_picture">
                                    </div>
                                    @error('profile_picture')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror -->

                                    <button type="submit" class="btn btn-primary">Update Profile</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
