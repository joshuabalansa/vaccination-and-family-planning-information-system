<x-app-layout>
    <h2>Patient Information</h2><br />
    <div class="mb-3">
        <a href="{{ route('patient.index') }}" class="btn btn-primary">
            Back
        </a>
    </div>
    <table class="table table-hover mt-5">
        <tbody>
            @foreach ($patient->toArray() as $field => $value)
                @if ($field !== 'id' && $field !== 'updated_at')
                    <tr>
                        <th scope="col">{{ ucwords(str_replace('_', ' ', $field)) }}:</th>
                        @if ($field === 'status')
                            <td>
                                <span
                                    class="badge rounded-pill badge-{{ $value === 'pending' ? 'danger' : 'success' }}">{{ ucfirst($value) }}</span>
                            </td>
                        @else
                            <td>{{ isset($value) ? ucfirst($value) : '?' }}</td>
                        @endif
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
</x-app-layout>
