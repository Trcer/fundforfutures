@extends('layouts.forumHeader', ['user'=>$user])
@section('title')
    <title>FundForFutures: Making Student Ideas Move on the Internet!</title>
@endsection
@section('extra-head')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/lazyload@2.0.0-rc.2/lazyload.js"></script>
    <script type="text/javascript"  src="{{ asset('js/scrollscript.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/scrollstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/explore.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/goalProgress.css') }}" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="description" content="Online financial and social platform to help all students with innovative ideas change the world and create the future. FundForFutures has a powerful array of payment APIs and features that powers the largest student hub in the world, including public crowdfunding, knowledge sharing, amd social gathering & events. Use FundForFutures’s platform to accept funds or to establish your next idea with online easy-to-use solutions.">
@endsection

@section('content')
    <main>
      <div>
        <img class="imageMaster" src="https://images.unsplash.com/photo-1534739302117-e9ff126dec91?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80" alt="Earth From Space.">
        <div class="banner-wrap">
          <div class="banner-front">
            <h1 class='cutterText'>They cannot halt<br> progress.</h1>
          </div>
        </div>
      </div>


      <div class="container1 default-1">
        <div class="" style="margin-top: 45px;">
          <svg style="fill: rgb(35, 136, 255);" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414" xmlns="http://www.w3.org/2000/svg" aria-label="explore" viewBox="0 0 32 32" preserveAspectRatio="xMidYMid meet" fill="currentColor" width="48" height="48" title="explore"><g><path d="M25.915,15.946c-1.251,0.722 -2.043,1.179 -3.002,0.579l-0.529,0.305l-2.598,1.5c-2.165,1.25 -3.373,1.658 -4.289,1.321l-0.541,0.313l-1.299,0.75c-3.464,2 -5.103,0.286 -5.897,-1.214c-0.795,-1.5 -1.567,-3.715 1.897,-5.715l1.299,-0.75l0.541,-0.312c0.166,-0.962 1.124,-1.804 3.289,-3.054l2.598,-1.5l0.655,-0.378c0.02,-1.166 0.833,-1.636 1.876,-2.238c1.894,-1.093 3.031,-1.75 6.031,3.447c3,5.196 2.242,5.633 -0.031,6.946Zm-2.573,-1.771c-0.471,-0.592 -1.001,-1.418 -1.726,-2.675c-1.412,-2.447 -1.581,-3.388 -1.579,-3.653c0.136,-0.136 0.335,-0.25 0.681,-0.448l0.012,-0.007c0.057,-0.033 0.119,-0.068 0.185,-0.107c0.071,-0.04 0.136,-0.078 0.197,-0.114c0.344,-0.2 0.542,-0.315 0.728,-0.365c0.231,0.131 0.962,0.747 2.374,3.194c0.726,1.256 1.177,2.128 1.454,2.832c0.143,0.347 0.192,0.632 0.215,0.789c-0.16,0.128 -0.392,0.262 -0.753,0.469l-0.001,0.001c-0.067,0.038 -0.138,0.079 -0.214,0.123c-0.076,0.043 -0.147,0.085 -0.213,0.123c-0.361,0.21 -0.593,0.344 -0.784,0.418c-0.124,-0.097 -0.347,-0.283 -0.576,-0.58Zm-1.958,0.923l0.103,-0.06c-0.461,-0.634 -0.984,-1.467 -1.603,-2.538c-0.619,-1.072 -1.062,-1.951 -1.358,-2.68l-0.142,0.081l-2.598,1.5c-1.026,0.591 -1.627,0.989 -2.042,1.377c-0.158,0.133 -0.225,0.228 -0.253,0.28l0,0.001c0.004,0.054 0.015,0.205 0.136,0.475c0.201,0.476 0.528,1.043 0.99,1.843l0.141,0.245c0.463,0.801 0.789,1.367 1.101,1.779c0.174,0.24 0.299,0.325 0.344,0.356l0.001,0c0.059,0.002 0.174,-0.009 0.369,-0.079c0.544,-0.165 1.189,-0.488 2.213,-1.08l2.598,-1.5Zm-9.397,-0.349l-0.031,0.018l-1.299,0.751c-1.398,0.806 -1.539,1.405 -1.566,1.593c-0.045,0.323 0.071,0.763 0.436,1.453c0.306,0.578 0.62,0.88 0.904,0.991c0.196,0.076 0.823,0.236 2.226,-0.573l1.299,-0.75l0.031,-0.019c-0.313,-0.469 -0.643,-1.042 -1.03,-1.711l-0.001,-0.002c-0.387,-0.671 -0.718,-1.244 -0.969,-1.751Z"></path><path d="M7.027,22.232c-0.478,0.276 -1.089,0.112 -1.366,-0.366l-1,-1.732c-0.276,-0.479 -0.112,-1.09 0.366,-1.367c0.479,-0.276 1.09,-0.112 1.367,0.367l1,1.732c0.276,0.478 0.112,1.089 -0.367,1.366Z"></path><path d="M19.52,20.258c-0.534,0.143 -0.85,0.692 -0.707,1.225l1.279,4.775c0.117,0.438 0.513,0.742 0.966,0.742c0.658,0 1.136,-0.624 0.966,-1.259l-1.28,-4.775c-0.142,-0.534 -0.691,-0.851 -1.224,-0.708Z"></path><path d="M16.554,26c0,0.552 -0.448,1 -1,1c-0.553,0 -1,-0.448 -1,-1l0,-3c0,-0.553 0.447,-1 1,-1c0.552,0 1,0.447 1,1l0,3Z"></path><path d="M11.822,26.258c-0.117,0.438 -0.514,0.742 -0.966,0.742c-0.658,0 -1.136,-0.624 -0.966,-1.259l0.475,-1.775c0.143,-0.534 0.692,-0.851 1.225,-0.708c0.534,0.143 0.85,0.692 0.707,1.225l-0.475,1.775Z"></path></g></svg>
          <h1 class="bigMaster sep" style="color: #0f44a7;-webkit-text-fill-color: #0f44a7;">Welcome to FundForFutures!</h1>
          <p class="biggieP">FundForFutures is an online platform that connects students through a network of ideas and opportunities to do interesting things.</p>
          <div style="margin-top: 30px;">
            <a href="{{url('/posts')}}" aria-label="FutureForum"><button style="background: #2388FF; color: white;" class="futureButton" type="button" name="button">See student projects and ideas</button></a><!--change this-->
          </div>
        </div>
      </div>

      <div class="container1" style="    margin-bottom: 60px;
      padding: 30px;
      border: 1px solid #ddd;">
        <div class="venir">
          <p>The Rundown</p>
          <h1 class="bigmedium text-center" style="width: fit-content;">You can use FundForFutures To...</h1>
        </div>
          <div style="    margin: 0 auto;
          width: fit-content;
          margin-top: 15px;">
            <ul class="">
              <li class="biggieP">See what students are doing around the world</li>
              <li class="biggieP">Explore interesting volunteering opportunities</li>
              <li class="biggieP">Find students doing interesting things</li>
              <li class="biggieP">Raise money for your ideas</li>
            </ul>
          </div>
      </div>

      <div class="text-center" style="margin: 120px 0">
        <button class="buttonblue" onclick="window.location.href='{{url('/login')}}'">Login</button>
        <button  class="buttonblue">Signup</button>
      </div>
      <!--
      <div class="background-blue">
        <p>The biggest greatest website, made for students</p>
        <h1 class='bigMaster'>See what's happening</h1>
        <p>Find Opportunities to do something for your community, find like minded peers to work together, ask for advice, or find causes to contribute!</p>
        <div class="oreo-hack">
          <div onclick="window.location.href='/explore'" class="school-back">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M15.1698 14.5362C15.1105 15.1549 15.5919 15.7021 16.245 15.7584C16.8981 15.8146 17.4757 15.3587 17.5351 14.7399L17.5352 14.738C18.0318 12.6493 18.0318 11.0584 17.7337 8.24384C17.6555 7.82275 17.5198 7.3912 17.1922 7.08081C16.8645 6.77043 16.409 6.64184 15.9644 6.56781C12.9937 6.28533 11.3144 6.28533 9.10825 6.7558C8.46843 6.89226 7.97312 7.35936 8.03249 7.97811C8.09187 8.59686 8.66947 9.05294 9.32259 8.99669L9.57209 8.97531C11.3397 8.82355 12.4014 8.73243 13.7717 8.73029L13.7735 8.73198L7.31263 14.8528C6.84891 15.2922 6.84891 16.0044 7.31263 16.4439C7.77635 16.8832 8.52828 16.8832 8.992 16.4439L15.4499 10.3259C15.4459 11.6001 15.3519 12.6006 15.2035 14.1786L15.1698 14.5362Z" fill="white"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M23.875 12C23.875 21 21.5 23.25 12 23.25C2.5 23.25 0.125 21 0.125 12C0.125 3 2.5 0.75 12 0.75C21.5 0.75 23.875 3 23.875 12ZM21.5 12C21.5 16.5157 20.8469 18.4373 19.8209 19.4093C18.7949 20.3813 16.7666 21 12 21C7.23338 21 5.20512 20.3813 4.17912 19.4093C3.15312 18.4373 2.5 16.5157 2.5 12C2.5 7.48425 3.15312 5.56275 4.17912 4.59075C5.20512 3.61875 7.23338 3 12 3C16.7666 3 18.7949 3.61875 19.8209 4.59075C20.8469 5.56275 21.5 7.48425 21.5 12Z" fill="white"/>
            </svg>
            <img src="{{asset('storage/siteimg/sandtime.jpg')}}" alt="">
            <h1>#School</h1>
            <p>Seek out cool clubs and popular events and opportunities</p>
          </div>
          <div onclick="window.location.href='/posts'" class="community-back">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M15.1698 14.5362C15.1105 15.1549 15.5919 15.7021 16.245 15.7584C16.8981 15.8146 17.4757 15.3587 17.5351 14.7399L17.5352 14.738C18.0318 12.6493 18.0318 11.0584 17.7337 8.24384C17.6555 7.82275 17.5198 7.3912 17.1922 7.08081C16.8645 6.77043 16.409 6.64184 15.9644 6.56781C12.9937 6.28533 11.3144 6.28533 9.10825 6.7558C8.46843 6.89226 7.97312 7.35936 8.03249 7.97811C8.09187 8.59686 8.66947 9.05294 9.32259 8.99669L9.57209 8.97531C11.3397 8.82355 12.4014 8.73243 13.7717 8.73029L13.7735 8.73198L7.31263 14.8528C6.84891 15.2922 6.84891 16.0044 7.31263 16.4439C7.77635 16.8832 8.52828 16.8832 8.992 16.4439L15.4499 10.3259C15.4459 11.6001 15.3519 12.6006 15.2035 14.1786L15.1698 14.5362Z" fill="white"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M23.875 12C23.875 21 21.5 23.25 12 23.25C2.5 23.25 0.125 21 0.125 12C0.125 3 2.5 0.75 12 0.75C21.5 0.75 23.875 3 23.875 12ZM21.5 12C21.5 16.5157 20.8469 18.4373 19.8209 19.4093C18.7949 20.3813 16.7666 21 12 21C7.23338 21 5.20512 20.3813 4.17912 19.4093C3.15312 18.4373 2.5 16.5157 2.5 12C2.5 7.48425 3.15312 5.56275 4.17912 4.59075C5.20512 3.61875 7.23338 3 12 3C16.7666 3 18.7949 3.61875 19.8209 4.59075C20.8469 5.56275 21.5 7.48425 21.5 12Z" fill="white"/>
            </svg>
            <h1>#Community</h1>
            <p>Explore, and get advice from thousands of posts everyday from channels of every interest.</p>
          </div>
          <div onclick="window.location.href='/signup'" style="background: white;" class="text-center auto-top">
            <h1 class="auto-top" style="color: black;">Join FundForFutures Now</h1>
          </div>
          <div onclick="window.location.href='/explore'" class="org-back text-center">
            <img src="{{asset('storage/siteimg/garden.jpg')}}" alt="">
            <h1 class="auto-top">How FundForFutures help your organization</h1>
          </div>
        </div>
      </div>-->


    </main>



    <div id="screen"></div>



@include('layouts.footer')
@endsection

