@extends('front.layout.master')

@section('title', 'Hotel')
@section('body')


    <!-- ================ Inner banner ================ -->
    <div class="inner-banner inner-banner-bg pt-70 pb-40">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-8 mb-30">
                    <!-- page-title -->
                    <div class="page-title">
                        <h1>{{$hotel->name}} Detail</h1>
                    </div>
                    <!-- page-title end -->
                </div>
                <div class="col-lg-4 col-md-4 mb-30">
                    <!-- breadcrumb -->
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="./">Home</a></li>
                        <li class="breadcrumb-item"><a href="./listhotel">Hotel</a></li>
                        <li class="breadcrumb-item active">{{$hotel->name}}</li>
                    </ol>
                    <!-- breadcrumb end -->
                </div>
            </div>
        </div>
    </div>
    <!-- ================ Inner banner end ================ -->

    <!-- ================ Detail page ================ -->
    <div class="detail-page pt-70 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="title">
                        <h2>{{$hotel->name}}</h2>

                        @for($i=1; $i<=5; $i++)
                            @if($i<=$hotel->star_ranking)
                                <i class="starranking fas fa-2x fa-star"></i>
                            @else
                                <i class="starranking far fa-2x fa-star"></i>
                            @endif
                        @endfor
                        <p>{{$hotel->address}}, {{$hotel->district}}, {{$hotel->city}}</p>
                    </div>
                    <!-- detail page gallery -->
                    <div class="owl-carousel detail-page-gallery-carousel mb-20">
                        @foreach($hotel->hotel_images as $hotelImages)
                            <figure class="item mb-0"><img src="front/img/hotel-image/{{$hotelImages->path}}"
                                                           alt="img description"></figure>
                        @endforeach
                    </div>
                    <!-- detail page gallery end -->
                    <!-- tabs -->
                    <div class="detail-tabs mb-30">
                        <ul class="nav nav-tabs nav-pills nav-justified" id="myTab" role="tablist">
                            <li class="nav-item"><a class="nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1"
                                                    role="tab" aria-controls="tab1" aria-selected="true">Overview</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" id="tab2-tab" data-toggle="tab" href="#tab2"
                                                    role="tab" aria-controls="tab2" aria-selected="false">Ameneties</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" id="tab3-tab" data-toggle="tab" href="#tab3"
                                                    role="tab" aria-controls="tab3" aria-selected="false">Rooms</a></li>
                            <li class="nav-item"><a class="nav-link" id="tab4-tab" data-toggle="tab" href="#tab4"
                                                    role="tab" aria-controls="tab4" aria-selected="false">Reviews</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active p-15" id="tab1" role="tabpanel"
                                 aria-labelledby="tab1-tab">
                                <!-- overview -->
                                <h4 class="mb-6">Overview</h4>
                                <p class="mb-0">{{$hotel->description}}</p>
                                <!-- overview end -->
                            </div>
                            <div class="tab-pane fade p-15" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                                <!-- ameneties -->
                                <h4 class="mb-6">Ameneties</h4>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <ul class="ameneties-list">
                                            <li><i class="fas fa-wifi pr-6"></i> Free Wi-Fi</li>
                                            <li><i class="fas fa-bed pr-6"></i> 2 Singal Beads</li>
                                            <li><i class="fas fa-shower pr-6"></i> Shower and Bathtub</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <ul class="ameneties-list">
                                            <li><i class="fas fa-paw pr-6"></i> Pet Friendly</li>
                                            <li><i class="fas fa-wheelchair pr-6"></i> Wheelchair Friendly</li>
                                            <li><i class="fas fa-dumbbell pr-6"></i> Fitness Center</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <ul class="ameneties-list">
                                            <li><i class="fas fa-hot-tub pr-6"></i> Hot Water</li>
                                            <li><i class="fas fa-swimmer pr-6"></i> Swimming Pool</li>
                                            <li><i class="fas fa-camera-retro pr-6"></i> Security Cameras</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- ameneties end -->
                            </div>
                            <div class="tab-pane fade p-15" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                                <!-- rooms -->
                                <h4 class="mb-6">Rooms</h4>
                                <div class="room-type-wrapper">
                                    <!-- list box -->
                                    @foreach($hotel->rooms as $room)
                                        @if($room->is_available == 1)
                                            @foreach($room->room_images as $roomImages)
                                        <div class="list-box mb-30">
                                            <div class="list-box-img">
                                                    <a href="front/img/rooms-image/{{ $roomImages->path }}" class="venobox" data-gall="gallery1">
                                                        <img src="front/img/rooms/{{ $roomImages->path }}" alt=""> </a>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">Select Room</label>
                                                </div>
                                            </div>
                                            <div class="list-box-content">
                                                <div class="list-box-title">
                                                    <h3>{{ $room->room_type }} Room <span>{{number_format( $room->price )}}<sup>₫</sup> <em>/ night</em></span>
                                                    </h3>
                                                    <address>
                                                        Max : 2 Persons
                                                    </address>
                                                </div>
                                                <ul class="hotel-featured">
                                                    <li><span><i class="fas fa-car"></i> Parking Facility</span></li>
                                                    <li><span><i class="fas fa-bath"></i> Attached Bathroom</span></li>
                                                    <li><span><i class="fas fa-home"></i> Daily Housekeeping</span></li>
                                                    <li><span><i class="fas fa-swimming-pool"></i> Swimming Pool</span>
                                                    </li>
                                                </ul>
                                                <div class="btn-wrapper mt-20 d-inline-block w-100"><a
                                                        class="view-detail-btn" href="#">View Details</a> <a
                                                        class="book-now-btn ml-6" href="#">Book Now</a></div>
                                            </div>
                                        </div>
                                            @endforeach
                                        @endif
                                    @endforeach
                                <!-- list box end -->
                                </div>
                                <!-- rooms -->
                            </div>
                            <div class="tab-pane fade p-15" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
                                <!-- reviews -->
                                <h4 class="mb-6">{{count($hotel->hotel_comments)}} Reviews</h4>
                                <div class="reviews-wrapper">
                                    <!-- review item -->
                                    @foreach($hotel->hotel_comments as $hotelComment)
                                        <div class="media review-item avatar-pic"><img src="front/img/user/{{ $hotelComment->user->avatar ?? 'default-avatar.jpg' }}" class="mr-3" alt="...">
                                            <div class="media-body">
                                                <div class="at-rating">
                                                    @for($i = 1; $i <= 5; $i++)
                                                        @if($i <= $hotelComment->rating)
                                                            <i class="fa fa-star"></i>
                                                        @else
                                                            <i class="far fa-star"></i>
                                                        @endif
                                                    @endfor
                                                </div>
                                                <h5 class="mt-0">{{ $hotelComment->user->name }}<span>{{ date('M d, Y', strtotime($hotelComment->created_at)) }}</span></h5>
                                                <p class="mb-0">{{ $hotelComment->messages }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                    <!-- review item end -->
                                </div>
                                    <div class="leave-comment mt-5">
                                        <h4>Leave A Comment</h4>
                                        <form action="" method="post" class="comment-form">
                                            @csrf
                                            <input type="hidden" name="hotel_id" value="{{ $hotel->id }}">
                                            <input type="hidden" name="user_id" value="{{ \Illuminate\Support\Facades\Auth::user()->id ?? null }}">

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <textarea class="form-control mt-2" rows="5" placeholder="Messages" name="messages"></textarea>

                                                    <div class="personal-rating mt-5">
                                                        <h6>Your Rating</h6>
                                                        <div class="rate">
                                                            <input type="radio" id="star5" name="rating" value="5" />
                                                            <label for="star5" title="text">5 stars</label>
                                                            <input type="radio" id="star4" name="rating" value="4" />
                                                            <label for="star4" title="text">4 stars</label>
                                                            <input type="radio" id="star3" name="rating" value="3" />
                                                            <label for="star3" title="text">3 stars</label>
                                                            <input type="radio" id="star2" name="rating" value="2" />
                                                            <label for="star2" title="text">2 stars</label>
                                                            <input type="radio" id="star1" name="rating" value="1" />
                                                            <label for="star1" title="text">1 star</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn-style-1">Send message</button>
                                            </div>
                                        </form>
                                    </div>
                                <!-- reviews end -->
                            </div>
                        </div>
                    </div>
                    <!-- tabs end -->
                </div>
                <div class="col-lg-4 col-md-4">
                    <aside>
                        <!-- filter widget -->
                        <div class="filter-widget mb-20">
                            <div class="accordion filter-accordion" id="filter-widget-accordion4-d">
                                <div class="card">
                                    <div class="card-header" id="headingOne4-d"><a class="btn btn-link w-100 text-left"
                                                                                   href="#" data-toggle="collapse"
                                                                                   data-target="#collapseOne4-m"
                                                                                   aria-expanded="true"
                                                                                   aria-controls="collapseOne4-m">
                                            <!-- title widget -->
                                            <div class="filter-title-widget">
                                                <h3>Hotel Details <i class="fas fa-plus-square float-right"></i> <i
                                                        class="fas fa-minus-square float-right"></i></h3>
                                            </div>
                                            <!-- title widget end -->
                                        </a></div>
                                    <div id="collapseOne4-m" class="collapse show mt-10" aria-labelledby="headingOne4-d"
                                         data-parent="#filter-widget-accordion4-d">
                                        <div class="card-body">
                                            <ul class="list-inline select-all mb-10">
                                                <li class="list-inline-item">{{$hotel->name}}</li>
                                            </ul>
                                            <div class="table-responsive">
                                                <table class="table table-bordered bg-gray w-100 border-0">
                                                    <tr>
                                                        <td>Check In</td>
                                                        <td>Jan 01, 2020 Wed</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Check Out</td>
                                                        <td>Jan 01, 2020 Fri</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Room 1</td>
                                                        <td>1 Adult(s)</td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <a class="btn-style-1" href="#">Book Selected Rooms</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- filter widget end -->
                        <!-- help us -->
                        <div class="help-us mb-30">
                            <h3>How can we help you?</h3>
                            <p>Lorem ipsum dolor sit ametdf consectetur adipiscing elitdgsh ametdf consectetur
                                piscing.</p>
                            <a class="view-detail-btn" href="#"><i class="fas fa-phone-alt"></i> Contact Us</a></div>
                        <!-- help us end -->
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- ================ Detail page end ================ -->

@endsection
