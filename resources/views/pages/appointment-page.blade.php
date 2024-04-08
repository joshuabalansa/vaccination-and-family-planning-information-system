<x-appointment-layout>
    <center>
        <h2 class="p-5 mb-5 text-4xl font-extrabold dark:text-white">Vaccination and Family Planning Appointment</h2>
    </center>
    <form class="max-w-sm mx-auto" method="POST" action="{{ route('appointment.register') }}">
        @csrf
        <div class="mb-5">
            <label for="firstname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
            <input type="text" id="firstname" name="firstname"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Enter firstname" required />
        </div>

        <div class="mb-5">
            <label for="middlename" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Middle
                Name</label>
            <input type="text" id="middlename" name="middlename"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Enter Middlename" required />
        </div>



        <div class="mb-5">
            <label for="lastname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
            <input type="text" id="lastname" name="lastname"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Enter lastname" required />
        </div>

        <div class="mb-5">
            <label for="birthdate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Birth
                Date</label>
            <input type="date" id="birthdate" name="birthdate"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required />
        </div>

        <div class="mb-5">
            <label for="time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Time</label>
            <input type="time" id="time" name="time"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required />
        </div>


        <div class="mb-5">
            <label for="bw" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">BW</label>
            <input type="text" id="bw" name="bw"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Enter BW" required />
        </div>

        <div class="mb-5">
            <label for="bl" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">BL</label>
            <input type="text" id="bl" name="bl"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Enter BL" required />
        </div>

        <div class="mb-5">
            <label for="city" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">City</label>
            <input type="text" id="city" name="city"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Enter City" required />
        </div>

        <div class="mb-5">
            <label for="brgy" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Barangay</label>
            <input type="text" id="brgy" name="brgy"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Enter Barangay" required />
        </div>

        <div class="mb-5">
            <label for="phone_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                Number</label>
            <input type="text" id="phone_number" name="phone"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Enter Phone Number" required />
        </div>

        <div class="mb-5">
            <label for="g" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">G</label>
            <input type="text" id="g" name="g"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Enter G" required />
        </div>

        <div class="mb-5">
            <label for="p" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">P</label>
            <input type="text" id="p" name="p"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Enter P" required />
        </div>

        <div class="mb-5">
            <label for="a" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">A</label>
            <input type="text" id="a" name="a"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Enter A" required />
        </div>

        <div class="mb-5">
            <label for="lb" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">LB</label>
            <input type="text" id="lb" name="lb"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Enter LB" required />
        </div>

        <div class="mb-5">
            <label for="d" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">D</label>
            <input type="text" id="d" name="d"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Enter D" required />
        </div>

        <div class="mb-5">
            <label for="philhealth"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Philhealth</label>
            <input type="text" id="philhealth" name="philhealth"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Enter Philhealth" required />
        </div>

        <div class="mb-5">
            <label for="4ps_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">4PS
                Number</label>
            <input type="text" id="4ps_number" name="4ps_number"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Enter 4PS Number" required />
        </div>

        <hr>

        <div class="mb-5">
            <label for="m_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mother's Maiden
                Name</label>
            <input type="text" id="m_name" name="m_name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Enter Mother's Maiden Name" required />
        </div>

        <div class="mb-5">
            <label for="m_birthdate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Birth
                Date</label>
            <input type="date" id="m_birthdate" name="m_birthdate"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required />
        </div>

        <div class="mb-5">
            <label for="m_age" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Age</label>
            <input type="text" id="m_age" name="m_age"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Enter Mother's Age" required />
        </div>

        <div class="mb-5">
            <label for="m_occupation"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Occupation</label>
            <input type="text" id="m_occupation" name="m_occupation"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Enter Mother's Occupation" required />
        </div>

        <hr>

        <div class="mb-5">
            <label for="f_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Father's
                Name</label>
            <input type="text" id="f_name" name="f_name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Enter Father's Maiden Name" required />
        </div>


        <div class="mb-5">
            <label for="f_birthdate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Birth
                Date</label>
            <input type="date" id="f_birthdate" name="f_birthdate"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required />
        </div>

        <div class="mb-5">
            <label for="f_age" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Age</label>
            <input type="text" id="f_age" name="f_age"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Enter Father's Age" required />
        </div>

        <div class="mb-5">
            <label for="f_occupation"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Occupation</label>
            <input type="text" id="f_occupation" name="f_occupation"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Enter Father's Occupation" required />
        </div>


        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit
            an Appointment</button>
    </form>
</x-appointment-layout>
