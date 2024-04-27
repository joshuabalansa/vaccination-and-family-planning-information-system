<x-app-layout>

    @php
        $role = auth()->user()->role;
    @endphp
    <div class="row d-flex justify-content-center flex-row">

        @if ($role == 1)
            <div class="col-sm-{{ $role == 1 ? 3 : 6 }} col-xs-6">

                <div class="tile-stats tile-red">
                    <div class="icon"><i class="entypo-users"></i></div>
                    <div class="num" data-start="0"
                        data-end="{{ \App\Models\Patient::where(['status' => 'pending'])->count() }}" data-postfix=""
                        data-duration="1500" data-delay="0">0</div>

                    <h3>Pending Appointments</h3>
                    <p>Showing all pending applicants</p>
                </div>
            </div>
        @endif

        @if ($role !== 2)
            <div class="col-sm-{{ $role == 1 ? 3 : 6 }} col-xs-6">

                <div class="tile-stats tile-green">
                    <div class="icon"><i class="entypo-chart-bar"></i></div>
                    <div class="num" data-start="0"
                        data-end="{{ \App\Models\Patient::where(['status' => 'approved'])->count() }}" data-postfix=""
                        data-duration="1500" data-delay="600">
                        0
                    </div>

                    <h3>Patients</h3>
                    <p>this is the all patient.</p>
                </div>

            </div>
        @endif

        <div class="clear visible-xs"></div>

        @if ($role !== 2)
            <div class="col-sm-{{ $role == 1 ? 3 : 6 }} col-xs-6">

                <div class="tile-stats tile-aqua">
                    <div class="icon"><i class="entypo-box"></i></div>
                    <div class="num" data-start="0"
                        data-end="{{ \App\Models\Vaccine::where(['status' => 'available'])->count() }}" data-postfix=""
                        data-duration="1500" data-delay="1200">0
                    </div>

                    <h3>Vaccines</h3>
                    <p>Available Vaccines.</p>
                </div>

            </div>
        @endif

        @if ($role == 1)
            <div class="col-sm-{{ $role == 1 ? 3 : 6 }} col-xs-6">

                <div class="tile-stats tile-blue">
                    <div class="icon"><i class="entypo-rss"></i></div>
                    <div class="num" data-start="0" data-end="52" data-postfix="" data-duration="1500"
                        data-delay="1800">0
                    </div>

                    <h3>Doctors</h3>
                    <p>Availble doctors and nurses</p>
                </div>

            </div>
        @endif
    </div>
</x-app-layout>
