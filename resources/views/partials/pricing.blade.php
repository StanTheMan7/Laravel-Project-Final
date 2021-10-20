<!-- Pricing Area Start -->
<div class="pricing-area pt-95 pb-120 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                <div class="section-title text-center">
                    <h2><span class="span">{{$titleDesc[5]->title}}</h2>
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
                        <a href="#">{{$item->button}}</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Pricing Area End -->