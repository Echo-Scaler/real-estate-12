<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords"
        content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>Meino HTML Bootstrap 5 Admin Dashboard Template</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- End fonts -->

    <!-- core:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/core/core.css') }}">
    <!-- endinject -->

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/flatpickr/flatpickr.min.css') }}">
    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/feather-font/css/iconfont.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <!-- endinject -->

    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/demo2/style.css') }}">
    <!-- End layout styles -->

    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
</head>

<body>
    <div class="main-wrapper">

        <!-- partial:partials/_sidebar.html -->
        @include('admin.body.sidebar')

        <!-- partial -->

        <div class="page-wrapper">

            <!-- partial:partials/_navbar.html -->
            @include('admin.body.header')
            <!-- partial -->

            @yield('admin')


            <!-- partial:partials/_footer.html -->
            @include('admin.body.footer')
            <!-- partial -->

        </div>
    </div>

    <!-- core:js -->
    <script src="{{ asset('assets/vendors/core/core.js') }}"></script>
    <!-- endinject -->

    <!-- Plugin js for this page -->
    <script src="{{ asset('assets/vendors/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/apexcharts/apexcharts.min.js') }}"></script>
    <!-- End plugin js for this page -->

    <!-- inject:js -->
    <script src="{{ asset('assets/vendors/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/template.js') }}"></script>
    <!-- endinject -->

    <!-- Custom js for this page -->
    <script src="{{ asset('assets/js/dashboard-dark.js') }}"></script>
    <!-- End custom js for this page -->


    @yield('script')
    <script type="text/javascript">
        if ($('#monthlySalesChart').length) {
            var options = {
                chart: {
                    type: 'bar',
                    height: '318',
                    parentHeightOffset: 0,
                    foreColor: colors.bodyColor,
                    background: colors.cardBg,
                    toolbar: {
                        show: false
                    },
                },
                theme: {
                    mode: 'light'
                },
                tooltip: {
                    theme: 'light'
                },
                colors: [colors.primary],
                fill: {
                    opacity: .9
                },
                grid: {
                    padding: {
                        bottom: -4
                    },
                    borderColor: colors.gridBorder,
                    xaxis: {
                        lines: {
                            show: true
                        }
                    }
                },
                series: [{
                    name: 'Sales',
                    data: [152, 109, 93, 113, 126, 161, 188, 143, 102, 113, 116, 124]
                }],
                xaxis: {
                    type: 'datetime',
                    categories: ['01/01/2022', '02/01/2022', '03/01/2022', '04/01/2022', '05/01/2022', '06/01/2022',
                        '07/01/2022', '08/01/2022', '09/01/2022', '10/01/2022', '11/01/2022', '12/01/2022'
                    ],
                    axisBorder: {
                        color: colors.gridBorder,
                    },
                    axisTicks: {
                        color: colors.gridBorder,
                    },
                },
                yaxis: {
                    title: {
                        text: 'Number of Sales',
                        style: {
                            size: 9,
                            color: colors.muted
                        }
                    },
                },
                legend: {
                    show: true,
                    position: "top",
                    horizontalAlign: 'center',
                    fontFamily: fontFamily,
                    itemMargin: {
                        horizontal: 8,
                        vertical: 0
                    },
                },
                stroke: {
                    width: 0
                },
                dataLabels: {
                    enabled: true,
                    style: {
                        fontSize: '10px',
                        fontFamily: fontFamily,
                    },
                    offsetY: -27
                },
                plotOptions: {
                    bar: {
                        columnWidth: "50%",
                        borderRadius: 4,
                        dataLabels: {
                            position: 'top',
                            orientation: 'vertical',
                        }
                    },
                },
            }

            var apexBarChart = new ApexCharts(document.querySelector("#monthlySalesChart"), options);
            apexBarChart.render();
        }
    </script>
</body>

</html>
