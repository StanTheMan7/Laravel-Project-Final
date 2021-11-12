 <!-- Footer Area Start -->
 <footer class="footer-area bg-gray">
    <div class="footer-widget-area bg-3 pt-98 pb-90 fix">
        <div class="container">
            <div class="row">  
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-footer-widget">
                        <a href="index.html"><img src="{{'img/logo/' . $header[0]->logo}}" alt="handstand"></a>
                        <p>{{$footer[0]->text}} </p>
                        <ul>
                            <li><i class="{{$footer[0]->icon1}}"></i>{{$footer[0]->email}}</li>
                            <li><i class="{{$footer[0]->icon2}}"></i> {{$footer[0]->phone}}</li>
                            <li><i class="{{$footer[0]->icon3}}"></i> {{$footer[0]->address}}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-footer-widget">
                        <h3>{{$tweet[0]->title}}</h3>
                        <div class="single-twitt mb-10">
                            <div class="twitt-icon">
                                <i class="{{$tweet[0]->icon4}}"></i>
                            </div>
                            <div class="twitt-content">
                                <p>{{$tweet[0]->text2}}</p>
                           <a href="{{$tweet[0]->link1}}">{{$tweet[0]->link1}}</a>
                            </div>
                        </div>
                        <div class="single-twitt">
                            <div class="twitt-icon">
                                <i class="{{$tweet[0]->icon5}}"></i>
                            </div>
                            <div class="twitt-content">
                                <p>{{$tweet[0]->text3}}</p>
                           <a href="{{$tweet[0]->link2}}">{{$tweet[0]->link2}}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 hidden-sm col-xs-12">
                    <div class="single-footer-widget">
                        <h3>get in touch</h3>
                        <form id="subscribe-form" action="{{route('mail.store')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Name" name="name">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Email" name="email">
                                </div>
                                <div class="col-sm-12">
                                    <textarea cols="30" rows="7" name="subject" placeholder="subject"></textarea>
                                    <button type="submit">submit</button>
                                </div>
                            </div>
                        </form>
                    </div>    
                </div>
            </div>
        </div>
    </div>
    <div class="footer-text-area fix bg-coffee ptb-18">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-text text-center">
                        <span>{{$footer[0]->copyright}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End -->