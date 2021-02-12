@extends('parent')

@section('content')
            <div class="container form-top">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                        <div class="panel panel-danger">
                            <div class="panel-body">
				<img src="logo-td-invert-v2.png">
				<br><br>
				<p> Success! Thank you for submitting this data: </p>
                    @if (count($request) >= 1)
                        <div class="info">
                            <ul style="list-style: none;">
                                @foreach ($request as $key => $item)
                                    @if ($key !== '_token')
                                        <li>
                                        <span style="width: 80px; display: inline-block; font-weight: bold;">
                                            {{$key}}
                                        </span>
                                            :&nbsp;&nbsp; {{ $item }}
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@stop
