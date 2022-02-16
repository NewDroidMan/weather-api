@extends('layouts.app')

@section('content')
<div class="row mt-4" ng-controller="weatherController">
    <div class="col-md-6">
	    <header>
	        <h2>Weather Report</h2>
	    </header>
        <form ng-submit="getWeatherReport()">
            @csrf
        	<div class="form-group">
        		<label for="city">City</label>
        		<input type="text" class="form-control" ng-model="city">
        	</div>
        	<button type="submit" class="btn btn-primary">Get Report</button>
        </form>
    </div>
    <div class="col-md-6" ng-if="submitting">
        <h1>Weather of <%city%></h1>
        <div class="form-group">
            <label>Latitude</label>:
            <%cityWeather.coord.lat%>° N
        </div>
        <div class="form-group">
            <label>Longitude</label>:
            <%cityWeather.coord.lon%>° W
        </div>
        <div class="form-group">
            <label>Weather Description</label>:
            <%cityWeather.main.feels_like%> K
        </div>
        <div class="form-group">
            <label>Humidity</label>:
            <%cityWeather.main.humidity%> %
        </div>
        <div class="form-group">
            <label>Pressure</label>:
            <%cityWeather.main.pressure%>
        </div>
        <div class="form-group">
            <label>Temperature</label>:
            <%cityWeather.main.temp%>K
        </div>
        <div class="form-group">
            <label>Minimum  Temperature</label>:
            <%cityWeather.main.temp_max%>K
        </div>
        <div class="form-group">
            <label>Maximum Temperature</label>:
            <%cityWeather.main.temp_min%>K
        </div>
    </div>
</div>
@endsection