<x-appointment-layout>
    <center>
        <img src="{{ asset('assets/images/app_logo.png') }}" alt="" width="200" height="200">
        <h2 class="p-5 mb-5 text-4xl font-extrabold dark:text-white">Vaccination and Family Planning Appointment</h2>
    </center>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-header">{{ __('Online Registration') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('appointment.register') }}">
                        @csrf
                        @foreach ($fields as $field => [$label, $type])
                            <div class="form-group row">
                                <label for="{{ $field }}"
                                    class="col-md-4 col-form-label text-md-right">{{ __($label) }}:</label>

                                <div class="col-md-6 mb-3">
                                    <input id="{{ $field }}" type="{{ $type }}"
                                        class="form-control @error($field) is-invalid @enderror"
                                        name="{{ $field }}" value="{{ old($field) }}"
                                        placeholder="Enter {{ $label }}">

                                    @error($field)
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        @endforeach

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-dark">
                                    {{ __('Register an Appointment') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-appointment-layout>
