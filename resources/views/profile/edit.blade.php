<x-app-layout>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h2 class="font-weight-bold mb-0">{{ __('Profile') }}</h2>
                    </div>
                    <div class="card-body">
                        <div class="max-w-xl">
                            @include('profile.partials.update-profile-information-form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h2 class="font-weight-bold mb-0">Update Password</h2>
                    </div>
                    <div class="card-body">
                        <div class="max-w-xl">
                            @include('profile.partials.update-password-form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="row mt-4">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h2 class="font-weight-bold mb-0">Delete User</h2>
                    </div>
                    <div class="card-body">
                        <div class="max-w-xl">
                            @include('profile.partials.delete-user-form')
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>

</x-app-layout>
