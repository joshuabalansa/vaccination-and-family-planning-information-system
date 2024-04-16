<x-app-layout>
    <h2>Appointment Information</h2><br />

    <table class="table table-hover">
        <tbody>
            @foreach ($appointment->toArray() as $field => $value)
                @if ($field !== 'id' && $field !== 'updated_at')
                    <tr>
                        <th scope="col">{{ ucfirst(str_replace('_', ' ', $field)) }}:</th>
                        @if ($field === 'status')
                            <td>
                                <span class="badge rounded-pill text-bg-danger">{{ ucfirst($value) }}</span>
                            </td>
                        @else
                            <td>{{ ucfirst($value) }}</td>
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
        @if ($appointment->getStatus() !== 'Approved')
            <a href="{{ route('appointment.accept', $appointment->id) }}"
                class="btn btn-success btn-sm btn-icon icon-left">
                <i class="entypo-check"></i>
                Approve
            </a>
        @endif
    </div>
</x-app-layout>
