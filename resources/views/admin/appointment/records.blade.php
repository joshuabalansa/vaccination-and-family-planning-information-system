<x-appointment-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Appointments') }}
        </h2>
    </x-slot> --}}
    {{-- @include('admin/includes/datatable-css') --}}
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        {{-- <h4 class="header-title">Basic Data Table</h4> --}}
                        <p class="text-muted font-13 mb-4">
                            List of vaccination applicants
                        </p>
                        <button class="btn btn-primary mb-3">New Appointment</button>
                        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Date Appointment</th>
                                    <th>Time</th>
                                    <th>Vaccine Type</th>
                                    <th>Center</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($appointments as $appointment)
                                    <tr>
                                        <td>{{ $appointment->getName() }}</td>
                                        <td>{{ $appointment->getPhone() }}</td>
                                        <td>{{ $appointment->getDateTime('date') }}</td>
                                        <td>{{ $appointment->getDateTime('time') }}</td>
                                        <td>{{ $appointment->getVaccineType() }}</td>
                                        <td>{{ $appointment->getVaccineCenter() }}</td>
                                        <td>Pending</td>
                                        <td>
                                            <a href="#" class="btn-sm btn btn-primary">Approve</a>
                                            <a href="#" class="btn-sm btn btn-outline-warning">Cancel</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
    </div>
    {{-- @include('admin/includes/datatable-js') --}}
</x-appointment-layout>
