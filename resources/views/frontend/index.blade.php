@extends('layouts.front')

@section('title')
    Welcome to Grocery Shop

@endsection

@section('content')
@include('layouts.inc.slider')

    <div class="py-5">
        <div class="container">
            <h2>Featured Products</h2>

            <div class="row">
                <div class="owl-carousel featured-carousel owl-theme">
                        @foreach ($featured_products as $prod)
                    <div class="item mb-4">
                        <div class="card border-0 shadow">
                            <img src="{{ asset('assets/uploads/products/'.$prod->image) }}" alt="Product Image" width="250px" height="150px" >
                            <div class="card-body">
                                <h5>{{ $prod->name }}</h5>
                                <span class="float-start">{{ $prod->selling_price }}</span>
                                <span class="float-end"> <s>{{ $prod->original_price }} </s></span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>    
    </div>



    <div class="py-5">
        <div class="container">
            <h2>Trending Category</h2>
            
            <div class="row">
                <div class="owl-carousel featured-carousel owl-theme">
                        @foreach ($trending_category as $tcategory)
                    <div class="item mb-4">
                        <a href="{{ url('view-category/'.$tcategory->slug) }}">
                        <div class="card border-0 shadow">
                                <img src="{{ asset('assets/uploads/category/'.$tcategory->image) }}" alt="Category Image" width="250px" height="150px">
                                <div class="card-body">
                                    <h5>{{ $tcategory->name }}</h5>
                                    <p>
                                        {{ $tcategory->description }}
                                    </p>
                                </div>
                        </div>
                    </a>
                    </div>
            
                        @endforeach
                </div>
            </div>
        </div>
    </div>

                {{-- <div id= "owl-demo" class="owl-carousel owl-theme">
                <div class="item"> --}}
               
            {{-- </div> --}}
        {{-- </div> --}}
    

@endsection

@section('scripts')

<script>
    $('.featured-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})
</script>


@endsection