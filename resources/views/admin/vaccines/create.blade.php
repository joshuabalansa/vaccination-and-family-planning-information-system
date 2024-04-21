<x-app-layout>
    <h2 class="mb-3">Add Vaccine</h2>
    <div class="container">
        <form action="{{ route('vaccine.store') }}" method="POST">
            @csrf

            @foreach ($fields as $field => $label)
                <div class="mb-3">
                    <label for="{{ $field }}" class="form-label">{{ $label }}</label>
                    <input type="text" class="form-control" value="{{ old($field) }}" id="{{ $field }}"
                        name="{{ $field }}" placeholder="{{ 'Enter ' . $label }}">
                </div>
                @error($field)
                    <span class="invalid-feedback" role="alert">
                        <strong style="color: red">{{ $message }}</strong>
                    </span>
                @enderror
            @endforeach

            <button type="submit" class="btn btn-primary mt-5">Save</button>
            <a href="{{ route('vaccine.index') }}" class="btn btn-outline-secondary mt-5">Back</a>
        </form>
    </div>
</x-app-layout>
