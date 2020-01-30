@extends('layouts.admin')
@push('css')
<style>
    .select2 .select2-search input::-webkit-input-placeholder,
    .select2 .select2-search textarea::-webkit-input-placeholder {
        color: #4c557e !important;
    }

    .select2 .select2-search input:-ms-input-placeholder,
    .select2 .select2-search textarea:-ms-input-placeholder {
        color: #4c557e !important;
    }

    .select2 .select2-search input::-ms-input-placeholder,
    .select2 .select2-search textarea::-ms-input-placeholder {
        color: #4c557e !important;
    }

    .select2 .select2-search input::placeholder,
    .select2 .select2-search textarea::placeholder {
        color: #4c557e !important;
    }

    .select2-dropdown {
        border: 1px solid #283158;
        background-color: #1c233f;
        color: #7081b9;
    }

    .select2-container--default .select2-results__option[aria-selected=true] {
        background-color: #242d51;
    }

    .select2-container--default .select2-search--inline .select2-search__field {
        color: #7081b9;
        margin-top: 7px;
    }

    .select2-container--default .select2-search--dropdown .select2-search__field {
        border: 1px solid #242d51;
        background-color: #242d51;
        color: #8997bd;
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered {
        color: #8997bd;
        line-height: 38px;
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow {
        height: 38px;
        right: 8px;
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow b {
        border-color: #7081b9 transparent transparent transparent;
    }

    .select2-container--default .select2-selection--single:focus {
        outline: none;
    }

    .select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover {
        color: #8997bd;
    }

    .select2-container--default .select2-selection--multiple .select2-selection__choice {
        margin-top: 7px;
        background-color: #2f3b69;
    }

    .select2-container--default.select2-container--open .select2-selection--single .select2-selection__arrow b {
        border-color: transparent transparent #7081b9 transparent;
    }

    .select2-container .select2-selection--multiple,
    .select2-container--default.select2-container--focus .select2-selection--multiple,
    .select2-container--default .select2-selection--single {
        background-color: #1c233f;
        border: 1px solid #242d51;
        color: #7081b9;
        height: 38px;
        outline: 0;
    }

    .select2-container--default .select2-selection--multiple .select2-selection__choice {
        border: 1px solid #50649c;
        color: #8997bd;
    }
    .price{
        color: #ff5da0;
    }
</style>
@endpush
@section('content')
<div class="page-wrapper">
    <!-- Page Content-->
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <button onclick="window.open('admin/client/create')"  class="btn btn-primary px-4 float-right mt-0 mb-3"><i class="mdi mdi-plus-circle-outline mr-2"></i>Add New Customer</button>
                            <h4 class="mt-0 header-title">Customer Details</h4>
                            <form class="form-parsley" action="{{ route('order') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" name="client">
                                        @foreach ($clients as $client)
                                        <option value="{{ $client->id }}"> {{ $client->name }} ( {{ $client->address }}
                                            ) </option>
                                        @endforeach
                                    </select>
                                </div>
                                <h4 class="header-title mt-0 mb-3">Billing Details</h4>

                                <div class="form-group">
                                    <label for="product">Product</label>
                                    <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" id="product" name="product">
                                    @foreach ($products as $product)
                                    <option value="{{ $product->id }}"> {{ $product->product }} </option>
                                    @endforeach
                                </select>
                                </div>
                                <div class="form-group">
                                    <label for="qty">Qty</label>
                                    <input type="number" name="qty" class="form-control" required placeholder="Qty"
                                        id="qty" required ">
                                </div>
                                {{-- <div class="form-group">
                                    <div class="custom-control custom-switch switch-danger">
                                        <input type="checkbox" class="custom-control-input" id="free" checked="" name="free">
                                        <label class="custom-control-label" for="free">Free Of Cast</label>
                                    </div>
                                </div> --}}
                                <div class="form-group">
                                    <label for="price">Bill</label>
                                    <input type="number" name="bill" class="form-control price" required placeholder="bill"
                                        id="price" required  readonly>
                                </div>
                                <div class="form-group">
                                    <label for="price">Paid Amount</label>
                                    <input type="number" name="paid" class="form-control " required placeholder="Paid Amount"
                                        >
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-success px-3" type="submit">Pay Now</button>

                                </div>
                             
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>


@endsection

@push('js')
<script>
    $(".select2").select2({
            width: '100%'
        });

    $(document).on('change', "#qty", function(){
        $price = parseInt($("#qty").val()) * parseInt($("#product").val()) 
        $(".price").val($price);
    })

    $(document).on('change', "#free", function(){
        if($("#free").val() == 'on'){
            $(".price").val(0);
        }else{
            $price = parseInt($("#qty").val()) * parseInt($("#product").val()) 
            $(".price").val($price);
        }
    })
</script>
@endpush