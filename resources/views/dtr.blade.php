<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daily Time Record') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container">
                        <div class="row">
                            <div class="col-3">
                                <div class="text-center">
                                    <img src="{{ url('/images/sample2_pfp.jpg') }}"
                                        class="img-fluid img-thumbnail rounded mx-auto d-block"
                                        style="width: 75%; height: 75%" alt="...">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                                data-toggle="dropdown" aria-expanded="false">Dropdown</button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div role="separator" class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control"
                                            aria-label="Text input with dropdown button" placeholder="ENTER BARCODE">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <h1 id="displayDateTime" style="text-align: center; font-weight:bold"></h1>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">DATE</th>
                                            <th scope="col">TIME</th>
                                            <th scope="col">NAME</th>
                                            <th scope="col">PERIOD</th>
                                            <th scope="col">REMARK</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row" name="date">07/21/2022</th>
                                            <td name="time">8:00</td>
                                            <td name="fname">{{ Auth::user()->name }}</td>
                                            <td name="period">Time In</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" name="date">07/21/2022</th>
                                            <td name="time">12:00</td>
                                            <td name="fname">{{ Auth::user()->name }}</td>
                                            <td name="period">Lunch Start</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" name="date">07/21/2022</th>
                                            <td name="time">13:00</td>
                                            <td name="fname">{{ Auth::user()->name }}</td>
                                            <td name="period">Lunch End</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" name="date">07/21/2022</th>
                                            <td name="time">17:00</td>
                                            <td name="fname">{{ Auth::user()->name }}</td>
                                            <td name="period">Time Out</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            var today = new Date();
            var day = today.getDay();
            var daylist = ["Sunday", "Monday", "Tuesday", "Wednesday ", "Thursday", "Friday", "Saturday"];
            var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
            var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
            var dateTime = date + ' ' + time;

            document.getElementById("displayDateTime").innerHTML = dateTime + ' ' + daylist[day];
        </script>
</x-app-layout>
