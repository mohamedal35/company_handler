<x-layout>


    <!-- projects -->
    <div class="cases-area mt-5">
        <div class="container ">






            <div class="filterHeader">
                <button class=" filter active " id="all"><i class="fas fa-lightbulb-on me-2"></i> الكل
                    @foreach ($categories as $category)
                        <button class=" filter " id="{{ $category->cat_id }}"><i class="{{ $category->icon }}"></i>
                            {{ $category->name }}</button>
                    @endforeach
                </button>
            </div>


            <div class="row py-3" id="filterItems">

                @foreach ($products as $product)
                    @php
                        $categories_class = '';
                    @endphp
                    @foreach ($product->product_cats as $cat)
                        @php
                            $categories_class .= ' ' . $cat->category_data->cat_id;
                        @endphp
                    @endforeach
                    <div class="col-lg-3 col-md-6  p-1 {{ $categories_class }}">
                        <div class="single-cases ">
                            <div class="cases-image">
                                <a target="_blank" href="{{ $product->link }}">
                                    <img src={{asset('storage/uploads/'.$product->img)}}>
                                </a>
                            </div>
                            <div class="cases-content">
                                @foreach ($product->product_cats as $cat)
                                    <a href="{{ $product->link }}" target="_blank" class="tag-1">
                                        {{ $cat->category_data->name }} </a>
                                @endforeach


                                <h3 class="d-flex justify-content-between">
                                    <a target="_blank" href="{{ $product->link }}">
                                        {{ $product->header }}
                                    </a>
                                    <p>{{$product->price}}$</p>
                                </h3>
                                <p>
                                    {{ $product->body }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="cases-shape-1" data-speed="0.04" data-revert="true">
        <img src="7odaa-com/assets/images/cases-study/shape-1.png">
    </div>
    <div class="cases-shape-2" data-speed="0.04" data-revert="true">
        <img src="7odaa-com/assets/images/cases-study/shape-2.png">
    </div>
    <div class="cases-shape-4" data-speed="0.04" data-revert="true">
        <img src="7odaa-com/assets/images/cases-study/shape-4.png">
    </div>
    <div class="cases-shape-5" data-speed="0.04" data-revert="true">
        <img src="7odaa-com/assets/images/cases-study/shape-5.png">
    </div>
    <div class="cases-shape-6" data-speed="0.04" data-revert="true">
        <img src="7odaa-com/assets/images/cases-study/shape-4.png">
    </div>
    <div class="cases-shape-7" data-speed="0.04" data-revert="true">
        <img src="7odaa-com/assets/images/cases-study/shape-5.png">
    </div>



</x-layout>
