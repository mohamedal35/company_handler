<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function get_categories() {
        return $this->get();
    }
}


// <div class="main-banner-area">
// <div class="container">
//     <div class="row">
//         <div class="col-lg-5 col-md-12">
//             <div class="main-banner-content">
//                 <div class="tag wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1000ms">
//                     <img src="7odaa-com/assets/images/main-banner/banner-one/fav.svg">
//                     7oda:text
//                 </div>
//                 <h1 class="wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1000ms">7oda:text
//                 </h1>
//                 <p class="wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms"> 7oda:text
//                     7oda:text </p>

//             </div>
//         </div>
//         <div class="col-lg-7 col-md-12">
//             <div class="main-banner-animation-image">
//                 <img src="7odaa-com/assets/images/main-banner/banner-one/img1.png" class="wow fadeInDown"
//                     data-wow-delay="200ms" data-wow-duration="1000ms" data-speed="0.06" data-revert="true">
//                 <img src="7odaa-com/assets/images/main-banner/banner-one/img2.png" class="wow fadeInDown"
//                     data-wow-delay="300ms" data-wow-duration="1000ms" data-speed="0.06" data-revert="true">
//                 <img src="7odaa-com/assets/images/main-banner/banner-one/img3.png" class="wow fadeInDown"
//                     data-wow-delay="400ms" data-wow-duration="1000ms" data-speed="0.06" data-revert="true">
//                 <img src="7odaa-com/assets/images/main-banner/banner-one/img4.png" class="wow fadeInDown"
//                     data-wow-delay="900ms" data-wow-duration="1000ms" data-speed="0.06" data-revert="true">
//                 <img src="7odaa-com/assets/images/main-banner/banner-one/img5.png" class="wow fadeInUp"
//                     data-wow-delay="1300ms" data-wow-duration="1000ms" data-speed="0.06" data-revert="true">
//                 <img src="7odaa-com/assets/images/main-banner/banner-one/img6.png" class="wow fadeInDown"
//                     data-wow-delay="700ms" data-wow-duration="1000ms" data-speed="0.06" data-revert="true">
//                 <img src="7odaa-com/assets/images/main-banner/banner-one/img7.png" class="wow fadeInDown"
//                     data-wow-delay="800ms" data-wow-duration="1000ms" data-speed="0.06" data-revert="true">
//                 <img src="7odaa-com/assets/images/main-banner/banner-one/img8.png" class="wow fadeInDown"
//                     data-wow-delay="800ms" data-wow-duration="1000ms" data-speed="0.06" data-revert="true">
//                 <img src="7odaa-com/assets/images/main-banner/banner-one/img9.png" class="wow fadeInDown"
//                     data-wow-delay="1000ms" data-wow-duration="1000ms" data-speed="0.06" data-revert="true">
//                 <img src="7odaa-com/assets/images/main-banner/banner-one/img10.png" class="wow fadeInDown"
//                     data-wow-delay="100ms" data-wow-duration="1000ms" data-speed="0.06" data-revert="true">
//                 <img src="7odaa-com/assets/images/main-banner/banner-one/img11.png" class="wow fadeInDown"
//                     data-wow-delay="300ms" data-wow-duration="1000ms" data-speed="0.06" data-revert="true">
//                 <img src="7odaa-com/assets/images/main-banner/banner-one/img12.png" class="wow fadeInLeft"
//                     data-wow-delay="1300ms" data-wow-duration="1000ms" data-speed="0.06" data-revert="true">
//                 <img src="7odaa-com/assets/images/main-banner/banner-one/img13.png" class="wow fadeInLeft"
//                     data-wow-delay="1300ms" data-wow-duration="1000ms" data-speed="0.06" data-revert="true">
//                 <img src="7odaa-com/assets/images/main-banner/banner-one/img14.png" class="wow fadeInLeft"
//                     data-wow-delay="1300ms" data-wow-duration="1000ms" data-speed="0.06" data-revert="true">
//                 <img src="7odaa-com/assets/images/main-banner/banner-one/img15.png" class="wow fadeInLeft"
//                     data-wow-delay="1300ms" data-wow-duration="1000ms" data-speed="0.06" data-revert="true">
//                 <img src="7odaa-com/assets/images/main-banner/banner-one/main-pic.png">
//             </div>
//         </div>
//     </div>
// </div>
// <div class="main-banner-shape-1">
//     <img src="7odaa-com/assets/images/main-banner/banner-one/shape-1.png">
// </div>
// <div class="main-banner-shape-2">
//     <img src="7odaa-com/assets/images/main-banner/banner-one/shape-2.png">
// </div>
// <div class="main-banner-shape-3">
//     <img src="7odaa-com/assets/images/main-banner/banner-one/shape-3.png">
// </div>
// <div class="main-banner-shape-4">
//     <img src="7odaa-com/assets/images/main-banner/banner-one/shape-4.png">
// </div>
// </div>