<x-app-layout>
    <h2>Appointments</h2><br />
    <table class="table table-bordered datatable" id="datatable">
        <thead>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Date Appointment</th>
                <th>Time</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($appointments as $appointment)
                <tr class="odd gradeX">
                    <td>{{ $appointment->getName() }}</td>
                    <td>{{ $appointment->getPhone() }}</td>
                    <td>{{ $appointment->created_at }}</td>
                    <td>{{ $appointment->getDateTime('time') }}</td>
                    <td>
                        <span class="badge badge-{{ $appointment->getStatus() === 'Pending' ? 'danger' : 'success' }}">
                            {{ $appointment->getStatus() }}
                        </span>
                    </td>
                    <td>
                        @if ($appointment->getStatus() !== 'Approved')
                            <a href="{{ route('appointment.accept', $appointment->id) }}"
                                class="btn btn-default btn-sm btn-icon icon-left">
                                <i class="entypo-check"></i>
                                Approve
                            </a>
                        @endif

                        <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                            <i class="entypo-cancel"></i>
                            Cancel
                        </a>

                        <a href="{{ route('appointment.info', $appointment->id) }}"
                            class="btn btn-info btn-sm btn-icon icon-left">
                            <i class="entypo-info"></i>
                            Info
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Date Appointment</th>
                <th>Time</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
</x-app-layout>
