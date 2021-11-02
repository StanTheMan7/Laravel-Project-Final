 <!-- Trainer Area Start -->
 <div class="trainer-area pt-90 pb-100 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                <div class="section-title text-center">
                    @php
                    $before=Str::before($titleDesc[2]->title,'(');
                    $between=Str::between($titleDesc[2]->title,'(',')');
                    $after=Str::after($titleDesc[2]->title,')');
                    @endphp
                    @if ($before == $between && $between == $after)
                        <h2>{{$before}}</h2>
                    @else
                    <h2>{{$before}} <span style="color: rgb(95, 199,174)">{{$between}}</span> {{$after}}</h2>
                    @endif
                    <p>{{$titleDesc[2]->description}}</p>
                </div>
            </div>
            {{-- @foreach ($trainer as $item) --}}
            @if ($trainer->count() >= 3)
            {{-- {{dd($trainer->where('role_id', '=', 3)->get(2))}} --}}
            {{-- item --}}
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-trainer text-center">
                        <img src="{{asset('img/trainer/' . $trainer->where('role_id', '=', 3)->first()->url)}}" alt="trainer">
                        <div class="trainer-hover">
                            <h3>{{$trainer->where('role_id', '=', 3)->first()->name}}</h3>
                            <ul>
                                <li><a href=" {{$trainer->where('role_id', '=', 3)->first()->link1}}"><i class="{{$trainer->where('role_id', '=', 3)->first()->icon1}}"></i></a></li>  
                                <li><a href="{{$trainer->where('role_id', '=', 3)->first()->link2}}"><i class="{{$trainer->where('role_id', '=', 3)->first()->icon2}}"></i></a></li>
                                <li><a href="{{$trainer->where('role_id', '=', 3)->first()->link3}}"><i class="{{$trainer->where('role_id', '=', 3)->first()->icon3}}"></i></a></li>
                                <li><a href="{{$trainer->where('role_id', '=', 3)->first()->link4}}"><i class="{{$trainer->where('role_id', '=', 3)->first()->icon4}}"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            {{-- item --}}
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-trainer text-center">
                        <img src="{{asset('img/trainer/' . $trainer->where('role_id', '=', 2)->first()->url)}}" alt="trainer">
                        <div class="trainer-hover">
                            <h3>{{$trainer->where('role_id', '=', 2)->first()->name}}</h3>
                            <ul>
                                <li><a href=" {{$trainer->where('role_id', '=', 2)->first()->link1}}"><i class="{{$trainer->where('role_id', '=', 2)->first()->icon1}}"></i></a></li>  
                                <li><a href="{{$trainer->where('role_id', '=', 2)->first()->link2}}"><i class="{{$trainer->where('role_id', '=', 2)->first()->icon2}}"></i></a></li>
                                <li><a href="{{$trainer->where('role_id', '=', 2)->first()->link3}}"><i class="{{$trainer->where('role_id', '=', 2)->first()->icon3}}"></i></a></li>
                                <li><a href="{{$trainer->where('role_id', '=', 2)->first()->link4}}"><i class="{{$trainer->where('role_id', '=', 2)->first()->icon4}}"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            {{-- item --}}
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-trainer text-center">
                        <img src="{{asset('img/trainer/' . $trainer->where('role_id', '=', 3)->skip(1)->first()->url)}}" alt="trainer">
                        <div class="trainer-hover">
                            <h3>{{$trainer->where('role_id', '=', 3)->skip(1)->first()->name}}</h3>
                            <ul>
                                <li><a href=" {{$trainer->where('role_id', '=', 3)->skip(1)->first()->link1}}"><i class="{{$trainer->where('role_id', '=', 3)->skip(1)->first()->icon1}}"></i></a></li>  
                                <li><a href="{{$trainer->where('role_id', '=', 3)->skip(1)->first()->link2}}"><i class="{{$trainer->where('role_id', '=', 3)->skip(1)->first()->icon2}}"></i></a></li>
                                <li><a href="{{$trainer->where('role_id', '=', 3)->skip(1)->first()->link3}}"><i class="{{$trainer->where('role_id', '=', 3)->skip(1)->first()->icon3}}"></i></a></li>
                                <li><a href="{{$trainer->where('role_id', '=', 3)->skip(1)->first()->link4}}"><i class="{{$trainer->where('role_id', '=', 3)->skip(1)->first()->icon4}}"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
        @endif
        
        {{-- @endforeach --}}
    </div>
    </div>
</div>
<!-- Trainer Area End -->