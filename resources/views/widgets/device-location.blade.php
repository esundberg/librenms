<div class="panel panel-default panel-condensed table-responsive">
    <table class="table table-hover table-condensed table-striped">
        <thead>
            <tr>
                <th><span class="black">@lang('Locations')</span></th>
                <th><span class="grey">@lang('Total')</span></th>
                <th><span class="green">@lang('Up')</span></th>
                <th><span class="red">@lang('Down')</span></th>
                <th><span class="grey">@lang('Ignored')</span></th>
                <th><span class="black">@lang('Disabled')</span></th>
            </tr>
        </thead>
	<tbody>
	    @foreach ($locations as $location)
            <tr>
                <td><a href="{{ url('devices/location='.$location['id']) }}">{{ $location['location'] }}</a></td>
                <td><a href="{{ url('devices/location='.$location['id']) }}"><span>{{ $location['total'] }}</span></a></td>
                <td><a href="{{ url('devices/location='.$location['id'].'/state=up/format=list_detail') }}"><span class="green">{{ $location['up'] }}</span></a></td>
                <td><a href="{{ url('devices/location='.$location['id'].'/state=down/format=list_detail') }}"><span class="red">{{ $location['down'] }}</span></a></td>
                <td><a href="{{ url('devices/location='.$location['id'].'/ignore=1/format=list_detail') }}"><span class="grey">{{ $location['ignored'] }}</span></a></td>
                <td><a href="{{ url('devices/location='.$location['id'].'/disabled=1/format=list_detail') }}"><span class="black">{{ $location['disabled'] }}</span></a></td>
	    </tr>
	    @endforeach
	</tbody>
    </table>
</div>
