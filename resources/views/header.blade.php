
<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
  $total= ProductController::cartItem();
}

?>
   
    <header class="header-section">
      <nav class="navbar navbar-expand navbar-dark bg-dark position-sticky">
          <div class="container-fluid mx-0 px-3">
              <a href="" class="navbar-brand ">
                  <img src="/img/logo-white.png" alt="" height="60px">
              </a>
              
              <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
              aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="collapsibleNavId">
                  <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
              <li class="nav-item">
               <a href="{{URL::to('/home')}}" class="nav-link text-navlink hover-link">HOME</a>
              </li>
              {{-- {{session('user')}} --}}
              @if (null !== (session('admin')))
              <li class="nav-item ms-3">
                <a href="/admin" class="nav-link text-navlink hover-link"> ADMIN</a>
               </li>
              @endif
      {{-- <li class="nav-item ms-3">
                <a href="/admin" class="nav-link text-navlink hover-link"> ADMIN</a>
               </li>  --}}
           
              <li class="nav-item ms-3">
                  <a href="{{URL::to('/')}}" class="nav-link text-navlink hover-link"> PRODUCT / SHOP </a>
                 </li>
             
              
              <li class="nav-item ms-3">
                  <a href="/contact_us" class="nav-link text-navlink hover-link"> CONTACT US</a>
              </li>
              <li class="nav-item ms-3">
                 
                      
                     
               
              </li>
                  </ul>
                  <ul class="navbar-nav ms-3">
                      <!-- Authentication Links -->
                      @if(Session::has('user') or Session::has('admin') )
                      
                      <li class="nav-item ms-3">
                        <a href="/myorders" class="nav-link text-navlink hover-link">ORDERS</a>
                    </li>
                      <a href="{{URL::to('/cartlist')}}" class="">
                        <button type="button" class="btn btn-outline-light"  data-toggle="dropwdown">
                            <i class="fa-solid fa-cart-shopping" style="color: #ff38a2;"></i> CART @if($total !== 0)
                                {{$total}}
                            @endif
                                  <span class="badge badge-pill badge-light"></span>
                        </button>
                    </a>
                    <li class="nav-item ms-3">
                      <a href="/logout" class="nav-link text-navlink hover-link"> LOGOUT</a>
                  </li>
                        @else
                          
                          <li class="nav-item ms-3">
                            <a href="/login" class="nav-link text-navlink hover-link"> LOGIN</a>
                        </li>
                        <li class="nav-item ms-3">
                          <a href="/register" class="nav-link text-navlink hover-link">REGISTER</a>
                      </li>
                        @endif
                  </ul>
                  <div class="social-links my-2 my-lg-0 ms-3">
                      
                      <a href="#" class="ml-1"><i class="fa-brands fa-facebook icon-color"></i></a>
                      <a href="#" class="ml-1"><i class="fa-brands fa-twitter icon-color"></i></a>
                      <a href="#" class="ml-1"><i class="fa-brands fa-instagram icon-color "></i></a>

                      
                  </div>
              </div>
          </div>
</nav>
</header>