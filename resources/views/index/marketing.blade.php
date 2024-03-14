<x-layout>


    @php
        print_r($sections_html);
    @endphp
    <div class="clients-area py-5">
        <div class="container">
            @php
                print_r($marketer_headers);
            @endphp

            <div class=" marketer owl-carousel owl-theme">
                @foreach ($marketers as $marketer)
                    <div class="clients-item marketerItem">
                        <h6 class="location"> {{ $marketer->for }}</h6>
                        <h3 class="name"> {{ $marketer->name }} </h3>
                        <div class="marketerContact">
                            <i class="ri-mail-line me-2"></i>
                            <a href="mailto:{{ $marketer->email }}"> {{ $marketer->email }} </a>
                        </div>
                        <div class="marketerContact">
                            <i class="ri-phone-line me-2"></i>
                            <a href="tel:{{ $marketer->phone }}"> {{ $marketer->phone }} </a>
                        </div>
                        <div class="marketerContact">
                            <i class="ri-whatsapp-line me-2"></i>
                            <a target="_blank"
                                href="https://api.whatsapp.com/send/?phone=%2B{{ $marketer->phone }}&amp;text&amp;type=phone_number&amp;app_absent=0">
                                whatsApp </a>
                        </div>
                        <div class="marketerContact">
                            <i class="ri-map-pin-line me-2"></i>
                            <a href="#!"> {{ $marketer->loc }} </a>
                        </div>



                        <div class="shape-2">
                            <img src="7odaa-com/assets/images/clients/shape-5.png">
                        </div>
                        <div class="shape-3">
                            <img src="7odaa-com/assets/images/clients/shape-6.png">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="clients-shape-1" data-speed="0.08" data-revert="true">
            <img src="7odaa-com/assets/images/clients/shape-1.png">
        </div>
        <div class="clients-shape-2" data-speed="0.08" data-revert="true">
            <img src="7odaa-com/assets/images/clients/shape-2.png">
        </div>
        <div class="clients-shape-3" data-speed="0.08" data-revert="true">
            <img src="7odaa-com/assets/images/clients/shape-3.png">
        </div>
    </div>
    <section class="py-5">
        <div class="container p-md-5 ">
            @php
                print_r($partners_header);
                $i = 1;
            @endphp
            @foreach ($partners_body as $item)

                <div class="Roles row align-items-center justify-content-center mx-md-5">
                    <img src="{{asset('storage/uploads/'. $item->image)}}" class="col-md-6 p-2 ">
                    <div class="col-md-6 p-2 {{$i%2 == 0 ? 'order-md-first' : ''}}">
                        <h4>{{$item->head}} </h4>
                        <p><span>{{$item->highlighted}}</span> {{$item->body}}</p>
                    </div>
                </div>
                @php
                    $i++;
                @endphp
            @endforeach
        </div>
    </section>

</x-layout>
