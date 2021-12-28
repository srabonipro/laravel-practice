@extends('layouts.app')

@section('content')

    <h1>Charts Page</h1>
    <div id="chart" style="height: 300px;"></div>

@endsection

@section('scripts')
    {{-- <script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
    <script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script> --}}

    <!-- Charting library -->
    <script src="https://unpkg.com/chart.js@^2.9.3/dist/Chart.min.js"></script>
    <!-- Chartisan -->
    <script src="https://unpkg.com/@chartisan/chartjs@^2.1.0/dist/chartisan_chartjs.umd.js"></script>


    <script>
      const chart = new Chartisan({
        el: '#chart',
        url: "@chart('sales_chart')",
        hooks: new ChartisanHooks()
            .colors()
            .datasets(['line', 'bar'])
      });
    </script>
@endsection
