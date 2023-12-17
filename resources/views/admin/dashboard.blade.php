@push('css')
    <style>
        .card-1 {
            position: absolute;
            top: 34.5%;
            left: 37%;
            background-color: rgb(52, 52, 52);
            cursor: pointer;
        }

        .card-2 {
            position: absolute;
            top: 34.5%;
            left: 43%;
            background-color: rgb(52, 52, 52);
            cursor: pointer;
        }

        .card-3 {
            position: absolute;
            top: 32.5%;
            left: 49%;
            background-color: rgb(52, 52, 52);
            cursor: pointer;
        }

        .card-4 {
            position: absolute;
            top: 2.5%;
            left: 70.7%;
            background-color: rgb(52, 52, 52);
            cursor: pointer;
        }

        .card-6 {
            position: absolute;
            top: 11.7%;
            left: 51.5%;
            background-color: rgb(52, 52, 52);
            cursor: pointer;
        }

        .card-7 {
            position: absolute;
            top: 64.7%;
            left: 76.5%;
            background-color: rgb(52, 52, 52);
            cursor: pointer;
        }

        .card-5 {
            position: absolute;
            top: 8.5%;
            left: 58.5%;
            background-color: rgb(52, 52, 52);
            cursor: pointer;
        }

        .card .card-content {
            padding: 4px;
        }

        .card h6 {
            font-size: 0.3rem;
            margin-bottom: 0;
            color: #fff;
            font-weight: 700;
        }
    </style>
@endpush
<x-portal::layout.admin page="{{ $page_title }}">
    <div class="position-relative">
        <img src="{{ asset('assets/images/skema.jpg') }}" alt="skema" class="w-100">
        <div class="card card-1">
            <div class="card-content">
                <div class="row">
                    <div class="col">
                        <h6>PV Voltage</h6>
                    </div>
                    <div class="col-auto">
                        <h6> : 0V</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h6>PV Current</h6>
                    </div>
                    <div class="col-auto">
                        <h6> : 0V</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h6>Battery</h6>
                    </div>
                    <div class="col-auto">
                        <h6> : 0%</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-2">
            <div class="card-content">
                <div class="row">
                    <div class="col">
                        <h6>DC Voltage</h6>
                    </div>
                    <div class="col-auto">
                        <h6> : 0V</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h6>DC Current</h6>
                    </div>
                    <div class="col-auto">
                        <h6> : 0A</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h6>AC Frequency</h6>
                    </div>
                    <div class="col-auto">
                        <h6> : 0Hz</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-3">
            <div class="card-content">
                <div class="row">
                    <div class="col">
                        <h6>Output Voltage</h6>
                    </div>
                    <div class="col-auto">
                        <h6> : 0V</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h6>Output Ampere</h6>
                    </div>
                    <div class="col-auto">
                        <h6> : 0A</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h6>Output Power</h6>
                    </div>
                    <div class="col-auto">
                        <h6> : 0kW</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h6>Output Torque</h6>
                    </div>
                    <div class="col-auto">
                        <h6> : 0%</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h6>Output Frequency</h6>
                    </div>
                    <div class="col-auto">
                        <h6> : 0Hz</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-6">
            <div class="card-content">
                <div class="row">
                    <div class="col">
                        <h6>Temperature</h6>
                    </div>
                    <div class="col-auto">
                        <h6> : 0V</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-5">
            <div class="card-content">
                <div class="row">
                    <div class="col">
                        <h6>UV Radiation</h6>
                    </div>
                    <div class="col-auto">
                        <h6> : 0</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-4">
            <div class="card-content">
                <div class="row">
                    <div class="col">
                        <h6>Indoor Temperature</h6>
                    </div>
                    <div class="col-auto">
                        <h6> : 0</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h6>Outdoor Temperature</h6>
                    </div>
                    <div class="col-auto">
                        <h6> : 0</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h6>Wind Speed</h6>
                    </div>
                    <div class="col-auto">
                        <h6> : 0 m/s</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-7">
            <div class="card-content">
                <div class="row">
                    <div class="col">
                        <h6>Disolve Oxygen</h6>
                    </div>
                    <div class="col-auto">
                        <h6> : 0 mg/l</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-portal::layout.admin>
