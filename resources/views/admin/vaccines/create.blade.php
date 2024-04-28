<x-app-layout>
    <h2 class="mb-3">Add Vaccine</h2>
    <div style="display:flex; justify-content:center; margin-top: 40px;">
        <form action="{{ route('vaccine.store') }}" style="width: 50rem;" method="POST">
            @csrf

            @foreach ($fields as $field => [$label, $type])
                <div class="mb-5">
                    <label for="{{ $field }}" class="form-label">{{ $label }}</label>
                    <input type="{{ $type }}" class="form-control" value="{{ old($field) }}"
                        id="{{ $field }}" name="{{ $field }}" placeholder="{{ 'Enter ' . $label }}">
                </div>
                @error($field)
                    <span class="invalid-feedback" role="alert">
                        <strong style="color: red">{{ $message }}</strong>
                    </span>
                @enderror
            @endforeach
            <br>
            <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Save</button>
            <a href="{{ route('vaccine.index') }}" class="btn btn-outline-secondary" style="margin-top: 10px;">Back</a>
        </form>
    </div>
</x-app-layout>
