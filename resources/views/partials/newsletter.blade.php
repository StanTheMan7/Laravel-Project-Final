<!-- Newsletter Area Start -->
<section class="newsletter-area bg-gray">
    <div class="container">
        <div class="row">
            <div class="newsletter-wrapper fix">
                <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                    <div class="newsletter-content section-title text-center">
                        <h2>{{$newsletter[0]->title}}</h2> 
                        <div class="newsletter-form">
                            <form action="{{route('sendNews')}}" method="POST"  class="mc-form fix">
                                @csrf
                                <input  type="email" name="email" placeholder="Enter Your E-mail ID">
                                <button  type="submit" class="default-btn" data-text="submit"><span>{{$newsletter[0]->button}}</span></button> 
                            </form>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                            </div>
                            <!-- mailchimp-alerts end -->
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</section>
<!-- Newsletter Area End -->