<!-- Pricing Area Start -->
@php
    $before=Str::before($titleDesc[5]->title,'(');
    $between=Str::between($titleDesc[5]->title,'(',')');
    $after=Str::after($titleDesc[5]->title,')');
@endphp
<div id="pricing" class="pricing-area pt-95 pb-120 bg-gray">
    <div class="container">
        <div class="row">
            <div  class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                <div class="section-title text-center">
                    @if ($before == $between && $between == $after )
                        
                    <h2>{{$before}}</h2>
                    @else
                        <h2>{{$before}} <span style="color: rgb(95, 199,174)">{{$between}}</span>{{$after}}</h2>
                    @endif
                    <p>{{$titleDesc[5]->description}}</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($pricing as $item)
                   <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-table text-center">
                    <div class="table-head">
                        <h2>{{$item->package}}</h2>
                        <h1>{{$item->price}}<span>{{$item->month}}</span></h1>
                    </div>
                    <div class="table-body">
                        <ul>
                            <li>{{$item->gift1}}</li>
                            <li>{{$item->gift2}}</li>
                            <li>{{$item->gift3}}</li>
                            <li>{{$item->gift4}}</li>
                        </ul>
                        @if (Auth::check())
                            <a class="  banner-btn  nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('payment' , $item->id)  }}">{{$item->button}}</a>
                        @else
                            <a class="  banner-btn  nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('register') . '?pricingId=' . $item->id}} " >{{$item->button}}</a>   
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Pricing Area End -->