@extends('layouts.site')
@section('csstoastr')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
@endsection

@section('content')
    <div class="content-wrapper">

        <div class="container">
            <div class="row pt120">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="heading align-center mb60">
                        <h4 class="h1 heading-title">E-commerce tutorial</h4>
                        <p class="heading-text">Buy books, and we ship to you.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- End Books products grid -->

        <div class="container">
            <div class="row pt120">
                <div class="books-grid">

                    <div class="row mb30">

                        @if (count($products) > 0)
                            @foreach ($products as $product)
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="books-item">
                                        <div class="books-item-thumb">
                                            @if ($product->gallery)
                                                <img src="{{ $product->gallery->image }}" {{-- <img src="{{ asset('assets/site/img/' . $product->gallery->image) }}" --}}
                                                    alt="book">
                                            @endif

                                            <div class="new">New</div>
                                            <div class="sale">Sale</div>
                                            <div class="overlay overlay-books"></div>
                                        </div>

                                        <div class="books-item-info">
                                            <h5 class="books-title">{{ $product ? $product->name : '' }}</h5>

                                            <div class="books-price">{{ env('CURRENCY') . $product->price }}</div>
                                        </div>

                                        <a href="javascript:void(0)" class="btn btn-small btn--dark add add_to_cart_btn"
                                            data-id="{{ $product->id }}">
                                            <span class="text">Add to Cart</span>
                                            <i class="seoicon-commerce"></i>
                                        </a>

                                    </div>
                                </div>
                            @endforeach
                        @endif



                    </div>

                    <div class="row pb120">

                        <div class="col-lg-12">

                            <nav class="navigation align-center">

                                <a href="#" class="page-numbers bg-border-color current"><span>1</span></a>
                                <a href="#" class="page-numbers bg-border-color"><span>2</span></a>
                                <a href="#" class="page-numbers bg-border-color"><span>3</span></a>
                                <a href="#" class="page-numbers bg-border-color"><span>4</span></a>
                                <a href="#" class="page-numbers bg-border-color"><span>5</span></a>

                                <svg class="btn-prev">
                                    <use xlink:href="#arrow-left"></use>
                                </svg>
                                <svg class="btn-next">
                                    <use xlink:href="#arrow-right"></use>
                                </svg>

                            </nav>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/site/js/jquery-2.1.4.min.js') }}"></script> --}}

    <script>
        $(document).ready(function() {
            $('.add_to_cart_btn').click(function() {
                var product_id = $(this).data('id')
                $.ajax({
                    url: "{{ route('add.to.cart') }}",
                    method: "GET",
                    data: {
                        product_id: product_id
                    },
                    success: function(data) {
                        if (data.products) {
                            console.log(data.products);
                        }
                        calculatecartitems();

                    },
                    error: function(response) {
                        if (response.responseJSON.error) {
                            toastr['error'](response.responseJSON.error);
                        } else {
                            alert('something went wrong');
                        }
                    }
                });
            });
        });
    </script>

    <script>
        function calculatecartitems(itemscount) {

            $.ajax({
                url: "{{ route('calculate.add_to_cart') }}",
                method: "GET",
                success: function(data) {
                    if (data.totalcartitems) {
                        $('.total_cart_items').html(data.totalcartitems)
                    }


                },
                error: function(response) {
                    console.log(response);
                }
            });
        }
    </script>
@endsection
