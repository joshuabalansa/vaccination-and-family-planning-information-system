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
            @foreach ($patients as $patient)
                <tr class="odd gradeX">
                    <td>{{ $patient->getName() }}</td>
                    <td>{{ $patient->getPhone() }}</td>
                    <td>{{ $patient->created_at }}</td>
                    <td>{{ $patient->getDateTime('time') }}</td>
                    <td>
                        <span class="badge badge-{{ $patient->getStatus() === 'Pending' ? 'danger' : 'success' }}">
                            {{ $patient->getStatus() }}
                        </span>
                    </td>
                    <td>
                        @if ($patient->getStatus() !== 'Approved')
                            <a href="{{ route('appointment.accept', $patient->id) }}"
                                class="btn btn-default btn-sm btn-icon icon-left">
                                <i class="entypo-check"></i>
                                Approve
                            </a>
                        @endif

                        <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                            <i class="entypo-cancel"></i>
                            Cancel
                        </a>

                        <a href="{{ route('appointment.info', $patient->id) }}"
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
