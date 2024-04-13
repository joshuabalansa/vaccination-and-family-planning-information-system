<x-app-layout>

    <h2>Appointments</h2>

    <br />

    <script type="text/javascript">
        jQuery(document).ready(function($) {
            var $table1 = jQuery('#table-1');

            $table1.DataTable({
                "aLengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                "bStateSave": true
            });


            $table1.closest('.dataTables_wrapper').find('select').select2({
                minimumResultsForSearch: -1
            });
        });
    </script>

    <table class="table table-bordered datatable" id="table-1">
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
                    <td class="center">
                        <a href="{{ route('appointment.accept', $appointment->id) }}">Approve</a>
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
    </div>

    <link rel="stylesheet" href="{{ asset('assets/js/datatables/datatables.css') }}"">
    <link rel="stylesheet" href="{{ asset('assets/js/select2/select2-bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/select2/select2.css') }}">

    <script src="{{ asset('assets/js/datatables/datatables.js') }}"></script>
    <script src="{{ asset('assets/js/select2/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/neon-chat.js') }}"></script>

</x-app-layout>
