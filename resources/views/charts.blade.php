@extends('layouts.app')

@section('content')

    <h1>Charts Page</h1>
    <div id="chart" style="height: 300px;"></div>

@endsection

@section('scripts')
    <script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
    <script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>
    <script>
      const chart = new Chartisan({
        el: '#chart',
        url: "@chart('sales_chart')",
      });
    </script>
@endsection
