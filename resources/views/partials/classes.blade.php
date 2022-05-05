<!-- Classes Start -->
<section class="class-area fix bg-gray pb-100 pt-95">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                @php
                    $before = Str::before($titleDesc[0]->title, '(');
                    $between = Str::between($titleDesc[0]->title, '(', ')');
                    $after = Str::after($titleDesc[0]->title, ')');
                @endphp
                <div class="section-title text-center">
                    @if ($before == $between && $between == $after)

                        <h2>{{ $before }}</h2>
                    @else
                        <h2>{{ $before }} <span style="color: rgb(95, 199,174)">{{ $between }}</span>{{ $after }}</h2>
                                
                    @endif
                    <p>{{ $titleDesc[0]->description }}</p>
                </div>
            </div>
        </div>
        <div class="row">

            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif

            @if (session()->has('error'))
                <div class="alert alert-danger">
                    {{ session()->get('error') }}
                </div>
            @endif

            @foreach ($filtered as $item)
            @php
                $disable = false;
                    if ( $item->status_id == 1)
                                   
                         $color = 'background-color:#21eb4d ';
                                   
                    else
                                    
                         $color = 'background-color:   #F2F2F2';
                                  
                       
            @endphp

                    @foreach ($allInscriptions as $inscription)

                        @if ($inscription->classe_id === $item->id)

                            @if ($inscription->users <= 2 )
                                @if ( $item->status_id == 1)
                                    @php
                                        $color = 'background-color:#21eb4d ';
                                    @endphp
                                @else
                                    
                                    @php
                                        $color = 'background-color:   #F2F2F2';
                                    @endphp
                                @endif
                            @elseif ($inscription->users > 2 && $inscription->users < 4)
                                @php
                                        $color = 'background-color:  #ff5500';
                                                                           
                                @endphp
                            @else
                                @php
                                    $color = 'background-color: #FF0000';
                                    $disable = true;
                                @endphp
                            @endif

                        @endif

                    @endforeach

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        @if ($item->status_id === 1)
                            <div class="single-class">
                                <div class="single-img">
                                    <a href="class.html"><img src="{{ asset('img/class/' . $item->url) }}"
                                            alt="class"></a>
                                    <div class="gallery-icon">
                                        <a class="image-popup" href="{{ asset('img/class/' . $item->url) }}">
                                            <i class="zmdi zmdi-zoom-in"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="single-content" style="{{$color}}">
                                    <h3><a href="class.html">{{ $item->title }}</a></h3>
                                    <ul>
                                        <li><i class="zmdi zmdi-face"></i>{{ $item->name }}</li>
                                        <li><i class="zmdi zmdi-alarm"></i>{{ $item->time }}</li>
                                    </ul>
                                </div>
                            </div>
                        @else
                            <div class="single-class">
                                <div class="single-img">
                                    <a href="class.html"><img src="{{ asset('img/class/' . $item->url) }}"
                                            alt="class"></a>
                                    <div class="gallery-icon">
                                        <a class="image-popup" href="{{ asset('img/class/' . $item->url) }}">
                                            <i class="zmdi zmdi-zoom-in"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="single-content" style="{{ $color }}">
                                    <h3><a href="class.html">{{ $item->title }}</a></h3>
                                    <ul>
                                        <li><i class="zmdi zmdi-face"></i>{{ $item->name }}</li>
                                        <li><i class="zmdi zmdi-alarm"></i>{{ $item->time }}</li>
                                    </ul>
                                </div>
                            </div>
                        @endif
                        @auth
                                <form style="margin-top: 20px; text-align: center"
                                    action="{{ route('inscription', ['classe' => $item->id, 'user' => Auth::user()->id]) }}"
                                    method="post">
                                    @csrf
                                    @if ($disable)
                                    <button disabled class="btn"
                                    style="font-size: 12px; background-color: #5FC7AE;">Inscription</button>
                                    @else
                                    <button class="btn"
                                        style="font-size: 12px; background-color: #5FC7AE;">Inscription</button>
                                    @endif
                                </form>
                        @endauth
                    </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Class Area End -->
