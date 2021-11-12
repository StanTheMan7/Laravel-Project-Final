@extends('template.main')

@section('content')
    
<section class="home-section container d-flex justify-content-center ">
    <div class="text">Handstand paiement Done</div>
    <div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="container d-flex justify-content-center">
            <p class="my-3 fw-bold">Thanks For Paying Your Package!</p>
        </div>
        </form>
    </div>
</section>
@endsection




