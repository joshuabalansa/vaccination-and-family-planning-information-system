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
        <a href="{{ route('appointment.records') }}" class="btn btn-primary">
            Back
        </a>
        @if ($patient->getStatus() !== 'Approved')
            <a href="{{ route('appointment.accept', $patient->id) }}" class="btn btn-success btn-sm btn-icon icon-left">
                <i class="entypo-check"></i>
                Approve
            </a>
        @endif
    </div>
</x-app-layout>
