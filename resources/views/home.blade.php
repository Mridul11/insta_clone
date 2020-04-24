@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
       <div class="col-3">
        <svg class="svg-inline--fa fa-js fa-w-14 
            landing-skill-icon font-awesome-padding"
            aria-hidden="true" data-prefix="fab" data-icon="js" role="img"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
            <path fill="currentColor" 
            d="M0 32v448h448V32H0zm243.8 349.4c0 43.6-25.6 63.5-62.9 63.5-33.7 0-53.2-17.4-63.2-38.5l34.3-20.7c6.6 11.7 12.6 21.6 27.1 21.6 13.8 0 22.6-5.4 22.6-26.5V237.7h42.1v143.7zm99.6 63.5c-39.1 0-64.4-18.6-76.7-43l34.3-19.8c9 14.7 20.8 25.6 41.5 25.6 17.4 0 28.6-8.7 28.6-20.8 0-14.4-11.4-19.5-30.7-28l-10.5-4.5c-30.4-12.9-50.5-29.2-50.5-63.5 0-31.6 24.1-55.6 61.6-55.6 26.8 0 46 9.3 59.8 33.7L368 290c-7.2-12.9-15-18-27.1-18-12.3 0-20.1 7.8-20.1 18 0 12.6 7.8 17.7 25.9 25.6l10.5 4.5c35.8 15.3 55.9 31 55.9 66.2 0 37.8-29.8 58.6-69.7 58.6z">
            </path>
        </svg>
       </div>
       <div class="col-9 pt-5">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong>posts</div>
                <div class="pr-5"><strong>23K</strong>Followers</div>
                <div class="pr-5"><strong>212</strong>following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div >
                Generate Lorem Ipsum placeholder text for use in your graphic, print and web layouts, and discover plugins for your favorite writing, design and blogging tools.
            </div>
            <div><a href="#">freecodecamp.org</a></div>
            <div>{{ $name }}</div>

       </div>
   </div>

   <div class="row pt-4">
       <div class="col-4">
            <img alt="Image may contain: 1 person" 
            class="FFVAD" decoding="auto" sizes="293px" 
            srcset="https://scontent-bom1-2.cdninstagram.com/vp/447eb03263f72e05062a4ab5a563f020/5D52C8A1/t51.2885-15/e35/c0.17.782.782a/s150x150/58410296_114928353047954_4399563480800705888_n.jpg?_nc_ht=scontent-bom1-2.cdninstagram.com 150w,https://scontent-bom1-2.cdninstagram.com/vp/48aac1ed9baf6ccfc16d30ec8460dce9/5D6FB1EB/t51.2885-15/e35/c0.17.782.782a/s240x240/58410296_114928353047954_4399563480800705888_n.jpg?_nc_ht=scontent-bom1-2.cdninstagram.com 240w,https://scontent-bom1-2.cdninstagram.com/vp/53b2686540771aef5a953a39d0a3c7ec/5D6B4451/t51.2885-15/e35/c0.17.782.782a/s320x320/58410296_114928353047954_4399563480800705888_n.jpg?_nc_ht=scontent-bom1-2.cdninstagram.com 320w,https://scontent-bom1-2.cdninstagram.com/vp/f375859d518404dd67ee48bd60fecbd0/5D77330B/t51.2885-15/e35/c0.17.782.782a/s480x480/58410296_114928353047954_4399563480800705888_n.jpg?_nc_ht=scontent-bom1-2.cdninstagram.com 480w,https://scontent-bom1-2.cdninstagram.com/vp/77a49696446633f71919a518c9a65cf3/5D569CAB/t51.2885-15/sh0.08/e35/c0.17.782.782a/s640x640/58410296_114928353047954_4399563480800705888_n.jpg?_nc_ht=scontent-bom1-2.cdninstagram.com 640w" src="https://scontent-bom1-2.cdninstagram.com/vp/77a49696446633f71919a518c9a65cf3/5D569CAB/t51.2885-15/sh0.08/e35/c0.17.782.782a/s640x640/58410296_114928353047954_4399563480800705888_n.jpg?_nc_ht=scontent-bom1-2.cdninstagram.com" 
            style="object-fit: cover;">
       </div>
       <div class="col-4">
            <img alt="Image may contain: 1 person" 
            class="FFVAD" decoding="auto" sizes="293px" 
            srcset="https://scontent-bom1-2.cdninstagram.com/vp/447eb03263f72e05062a4ab5a563f020/5D52C8A1/t51.2885-15/e35/c0.17.782.782a/s150x150/58410296_114928353047954_4399563480800705888_n.jpg?_nc_ht=scontent-bom1-2.cdninstagram.com 150w,https://scontent-bom1-2.cdninstagram.com/vp/48aac1ed9baf6ccfc16d30ec8460dce9/5D6FB1EB/t51.2885-15/e35/c0.17.782.782a/s240x240/58410296_114928353047954_4399563480800705888_n.jpg?_nc_ht=scontent-bom1-2.cdninstagram.com 240w,https://scontent-bom1-2.cdninstagram.com/vp/53b2686540771aef5a953a39d0a3c7ec/5D6B4451/t51.2885-15/e35/c0.17.782.782a/s320x320/58410296_114928353047954_4399563480800705888_n.jpg?_nc_ht=scontent-bom1-2.cdninstagram.com 320w,https://scontent-bom1-2.cdninstagram.com/vp/f375859d518404dd67ee48bd60fecbd0/5D77330B/t51.2885-15/e35/c0.17.782.782a/s480x480/58410296_114928353047954_4399563480800705888_n.jpg?_nc_ht=scontent-bom1-2.cdninstagram.com 480w,https://scontent-bom1-2.cdninstagram.com/vp/77a49696446633f71919a518c9a65cf3/5D569CAB/t51.2885-15/sh0.08/e35/c0.17.782.782a/s640x640/58410296_114928353047954_4399563480800705888_n.jpg?_nc_ht=scontent-bom1-2.cdninstagram.com 640w" src="https://scontent-bom1-2.cdninstagram.com/vp/77a49696446633f71919a518c9a65cf3/5D569CAB/t51.2885-15/sh0.08/e35/c0.17.782.782a/s640x640/58410296_114928353047954_4399563480800705888_n.jpg?_nc_ht=scontent-bom1-2.cdninstagram.com" 
            style="object-fit: cover;">
       </div>
       <div class="col-4">
            <img alt="Image may contain: 1 person" 
            class="FFVAD" decoding="auto" sizes="293px" 
            srcset="https://scontent-bom1-2.cdninstagram.com/vp/447eb03263f72e05062a4ab5a563f020/5D52C8A1/t51.2885-15/e35/c0.17.782.782a/s150x150/58410296_114928353047954_4399563480800705888_n.jpg?_nc_ht=scontent-bom1-2.cdninstagram.com 150w,https://scontent-bom1-2.cdninstagram.com/vp/48aac1ed9baf6ccfc16d30ec8460dce9/5D6FB1EB/t51.2885-15/e35/c0.17.782.782a/s240x240/58410296_114928353047954_4399563480800705888_n.jpg?_nc_ht=scontent-bom1-2.cdninstagram.com 240w,https://scontent-bom1-2.cdninstagram.com/vp/53b2686540771aef5a953a39d0a3c7ec/5D6B4451/t51.2885-15/e35/c0.17.782.782a/s320x320/58410296_114928353047954_4399563480800705888_n.jpg?_nc_ht=scontent-bom1-2.cdninstagram.com 320w,https://scontent-bom1-2.cdninstagram.com/vp/f375859d518404dd67ee48bd60fecbd0/5D77330B/t51.2885-15/e35/c0.17.782.782a/s480x480/58410296_114928353047954_4399563480800705888_n.jpg?_nc_ht=scontent-bom1-2.cdninstagram.com 480w,https://scontent-bom1-2.cdninstagram.com/vp/77a49696446633f71919a518c9a65cf3/5D569CAB/t51.2885-15/sh0.08/e35/c0.17.782.782a/s640x640/58410296_114928353047954_4399563480800705888_n.jpg?_nc_ht=scontent-bom1-2.cdninstagram.com 640w" src="https://scontent-bom1-2.cdninstagram.com/vp/77a49696446633f71919a518c9a65cf3/5D569CAB/t51.2885-15/sh0.08/e35/c0.17.782.782a/s640x640/58410296_114928353047954_4399563480800705888_n.jpg?_nc_ht=scontent-bom1-2.cdninstagram.com" 
            style="object-fit: cover;">
       </div>
   </div>
</div>
@endsection
