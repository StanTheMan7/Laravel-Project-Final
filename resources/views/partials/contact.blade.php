<!-- Contact Area Start -->
<div class="contact-area pt-95 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="contact-form section-title text-center">
                    <h2 class="pb-5">{{$contact[0]->title}}</h2>
                    <div class="row">
                        <form id="contact-form" action="{{route('mail.store')}}" method="POST">
                            @csrf
                            <div class="col-sm-6">
                                <input class="mb-30" placeholder="{{$contact[0]->placeholdername}}" name="name" type="text">
                            </div>
                            <div class="col-sm-6">
                                <input class="mb-30" placeholder="{{$contact[0]->placeholderemail}}" name="email" type="text">
                            </div>
                            <div class="col-sm-12">
                                <textarea class="mb-30" cols="30" rows="7" name="subject" placeholder="{{$contact[0]->placeholdersubject}}"></textarea>
                                <button type="submit">submit</button></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Area End -->