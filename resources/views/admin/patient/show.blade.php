<x-app-layout>
    <h2>Patient Information</h2><br />

    <table class="table table-hover">
        <tbody>
            @foreach ($patient->toArray() as $field => $value)
                @if ($field !== 'id' && $field !== 'updated_at')
                    <tr>
                        <th scope="col">{{ ucwords(str_replace('_', ' ', $field)) }}:</th>
                        @if ($field === 'status')
                            <td>
                                <span class="badge rounded-pill text-bg-danger">{{ ucfirst($value) }}</span>
                            </td>
                        @else
                            <td>{{ isset($value) ? ucfirst($value) : '?' }}</td>
                        @endif
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>

    <div class="mt-3">
        <a href="{{ route('patient.index') }}" class="btn btn-primary">
            Back
        </a>
    </div>
</x-app-layout>
