@extends('layouts.default')
@section('content')

<div class="container list-offre m-5">
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-pills mb-3 " id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</button>
                </li>
                
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="slider demo">
                        <div class="box-list"> 
                            <div class="box-1">
                                
                                <img class="b1" src="{{ asset('images/cle.jpeg') }}" />
                                
                                <div class="b2">
                                     <span>casablanca</span> 
                                     <span>01/02/2022</span> 
                                </div>
                            </div>
                            <div class="box-2">
                                <p> Lorem ipsum dolor. Customers now expect to move seamlessly between digital and physical channels. They expect speedy </p>
                            </div>
                        </div>
                        <div class="box-list"> 
                            <div class="box-1">
                                
                                <img class="b1" src="{{ asset('images/cle.jpeg') }}" />
                                
                                <div class="b2">
                                     <span>casablanca</span> 
                                     <span>01/02/2022</span> 
                                </div>
                            </div>
                            <div class="box-2">
                                <p> Lorem ipsum dolor. Customers now expect to move seamlessly between digital and physical channels. They expect speedy </p>
                            </div>
                        </div>
                        <div class="box-list"> 
                            <div class="box-1">
                                
                                <img class="b1" src="{{ asset('images/cle.jpeg') }}" />
                                
                                <div class="b2">
                                     <span>casablanca</span> 
                                     <span>01/02/2022</span> 
                                </div>
                            </div>
                            <div class="box-2">
                                <p> Lorem ipsum dolor. Customers now expect to move seamlessly between digital and physical channels. They expect speedy </p>
                            </div>
                        </div>
                        <div class="box-list"> 
                            <div class="box-1">
                                
                                <img class="b1" src="{{ asset('images/cle.jpeg') }}" />
                                
                                <div class="b2">
                                     <span>casablanca</span> 
                                     <span>01/02/2022</span> 
                                </div>
                            </div>
                            <div class="box-2">
                                <p> Lorem ipsum dolor. Customers now expect to move seamlessly between digital and physical channels. They expect speedy </p>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="tab-pane fade show" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="slider demo1">
                        <div class="box-list"> 
                            <div class="box-1">
                                
                                <img class="b1" src="{{ asset('images/cle.jpeg') }}" />
                                
                                <div class="b2">
                                     <span>casablanca</span> 
                                     <span>01/02/2022</span> 
                                </div>
                            </div>
                            <div class="box-2">
                                <p> Lorem ipsum dolor. Customers now expect to move seamlessly between digital and physical channels. They expect speedy </p>
                            </div>
                        </div>
                        <div class="box-list"> 
                            <div class="box-1">
                                
                                <img class="b1" src="{{ asset('images/cle.jpeg') }}" />
                                
                                <div class="b2">
                                     <span>casablanca</span> 
                                     <span>01/02/2022</span> 
                                </div>
                            </div>
                            <div class="box-2">
                                <p> Lorem ipsum dolor. Customers now expect to move seamlessly between digital and physical channels. They expect speedy </p>
                            </div>
                        </div>
                        <div class="box-list"> 
                            <div class="box-1">
                                
                                <img class="b1" src="{{ asset('images/cle.jpeg') }}" />
                                
                                <div class="b2">
                                     <span>casablanca</span> 
                                     <span>01/02/2022</span> 
                                </div>
                            </div>
                            <div class="box-2">
                                <p> Lorem ipsum dolor. Customers now expect to move seamlessly between digital and physical channels. They expect speedy </p>
                            </div>
                        </div>
                        <div class="box-list"> 
                            <div class="box-1">
                                
                                <img class="b1" src="{{ asset('images/cle.jpeg') }}" />
                                
                                <div class="b2">
                                     <span>casablanca</span> 
                                     <span>01/02/2022</span> 
                                </div>
                            </div>
                            <div class="box-2">
                                <p> Lorem ipsum dolor. Customers now expect to move seamlessly between digital and physical channels. They expect speedy </p>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5">

    <!-- Success message -->
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif

    <form action="" method="post" action="">

        <!-- CROSS Site Request Forgery Protection -->
        @csrf
        <div class="row">
            <div class="form-group col-md-4">
                <label>Name</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>

            <div class="form-group col-md-4">
                <label>Email</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>

            <div class="form-group col-md-4">
                <label>Phone</label>
                <input type="text" class="form-control" name="phone" id="phone">
            </div>

            

            <div class="form-group col-md-12">
                <label>Message</label>
                <textarea class="form-control" name="message" id="message" rows="4"></textarea>
            </div>

            <input type="submit" name="send" value="Submit" class="btn-contact mt-5">
        </div>
    </form>
</div>


<script>

$('.demo').slick({
  dots: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  touchMove: true,
  infinite: true,
  autoplay: true,
  autoplaySpeed: 2000,
});
$('.demo1').slick({
    dots: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  touchMove: true,
  infinite: true,
  autoplay: true,
  autoplaySpeed: 2000,
});

</script>
    
@stop