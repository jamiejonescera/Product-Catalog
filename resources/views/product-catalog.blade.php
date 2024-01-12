@extends('layout')


@section('main-content')

<link rel="stylesheet" href="{{ asset('css/product.css') }}">

<div id="top-content">

</div>

<br>
<div class="d-flex justify-content-center", color: white>
<div>
        <ul id="navigation">
            <li class="nav-item"><a class="nav-item" href="product">All</a></li>
            <li class="nav-item"><a class="nav-item" href="#">Mens</a></li>
            <li class="nav-item"><a class="nav-item" href="#">Womens</a></li>
            <li class="nav-item"><a class="nav-item" href="#">Kids</a></li>
            <li class="nav-item"><a class="nav-item" href="#">Unisex</a></li>
            
        </ul>
    </div>
</div>

<div class="card-container-wrapper">
  <div class="card-containers">
            <div class="item-card hoverable bordered">
                <img class="card-image" src="{{ asset('media/apparel-product/shirt-1-front.jpg') }}" alt="tshirt">
                <div class="card-text">
                    <h5 class="card-text-heading">Inspired Pirate King</h5>
                    <p class="card-text-sub">Elevate your style effortlessly with our signature T-shirts!</p>
                </div>
                <a class="nav-item" href="productinfo"><button class="card-btn btn btn-success">Select Options</button></a>
            </div>

           
            <div class="item-card hoverable bordered">
                <img class="card-image" src="{{ asset('media/apparel-product/shirt-2-front.png') }}" alt="tshirt">
                <div class="card-text">
                    <h5 class="card-text-heading">Pixel Princess</h5>
                    <p class="card-text-sub">Elevate your style effortlessly with our signature T-shirts!</p>
                </div>
                <a class="nav-item" href="productinfo2"><button class="card-btn btn btn-success">Select Options</button></a>
            </div>
            <div class="item-card hoverable bordered">
                <img class="card-image" src="{{ asset('media/apparel-product/shirt-3-front.png') }}" alt="tshirt">
                <div class="card-text">
                    <h5 class="card-text-heading">Digital Diva</h5>
                    <p class="card-text-sub">Elevate your style effortlessly with our signature T-shirts!</p>
                </div>
                <a class="nav-item" href="productinfo3"><button class="card-btn btn btn-success">Select Options</button></a>
            </div>
            <div class="item-card hoverable bordered">
                <img class="card-image" src="{{ asset('media/apparel-product/shirt-4-front.png') }}" alt="tshirt">
                <div class="card-text">
                    <h5 class="card-text-heading">Bit Blush</h5>
                    <p class="card-text-sub">Elevate your style effortlessly with our signature T-shirts!</p>
                </div>
                <a class="nav-item" href="productinfo4"><button class="card-btn btn btn-success">Select Options</button></a>
            </div>
            <div class="item-card hoverable bordered">
                <img class="card-image" src="{{ asset('media/apparel-product/shirt-5-front.png') }}" alt="tshirt">
                <div class="card-text">
                    <h5 class="card-text-heading">Pixel Posh</h5>
                    <p class="card-text-sub">Elevate your style effortlessly with our signature T-shirts!</p>
                </div>
                <a class="nav-item" href="productinfo5"><button class="card-btn btn btn-success">Select Options</button></a>
            </div>
            <div class="item-card hoverable bordered">
                <img class="card-image" src="{{ asset('media/apparel-product/shirt-6-front.png') }}" alt="tshirt">
                <div class="card-text">
                    <h5 class="card-text-heading">Code Couture</h5>
                    <p class="card-text-sub">Elevate your style effortlessly with our signature T-shirts!</p>
                </div>
                <a class="nav-item" href="productinfo6"><button class="card-btn btn btn-success">Select Options</button></a>
            </div>
            <div class="item-card hoverable bordered">
                <img class="card-image" src="{{ asset('media/apparel-product/shirt-7-front.png') }}" alt="tshirt">
                <div class="card-text">
                    <h5 class="card-text-heading">Pixel Popstar</h5>
                    <p class="card-text-sub">Elevate your style effortlessly with our signature T-shirts!</p>
                </div>
                <a class="nav-item" href="productinfo7"><button class="card-btn btn btn-success">Select Options</button></a>
            </div>
            <div class="item-card hoverable bordered">
                <img class="card-image" src="{{ asset('media/apparel-product/shirt-8-front.png') }}" alt="tshirt">
                <div class="card-text">
                    <h5 class="card-text-heading">Byte Belle</h5>
                    <p class="card-text-sub">Elevate your style effortlessly with our signature T-shirts!</p>
                </div>
                <a class="nav-item" href="productinfo8"><button class="card-btn btn btn-success">Select Options</button></a>
            </div>

            
            <div class="item-card hoverable bordered">
                <img class="card-image" src="{{ asset('media/apparel-product/shirt-9-front.png') }}" alt="tshirt">
                <div class="card-text">
                    <h5 class="card-text-heading">Pixel Paladin</h5>
                    <p class="card-text-sub">Elevate your style effortlessly with our signature T-shirts!</p>
                </div>
                <a class="nav-item" href="productinfo9"><button class="card-btn btn btn-success">Select Options</button></a>
            </div>
            <div class="item-card hoverable bordered">
                <img class="card-image" src="{{ asset('media/apparel-product/shirt-10-front.jpg') }}" alt="tshirt">
                <div class="card-text">
                    <h5 class="card-text-heading">TAMAD</h5>
                    <p class="card-text-sub">Elevate your style effortlessly with our signature T-shirts!</p>
                </div>
                <button class="card-btn btn btn-success">Select Options</button>
            </div>
            <div class="item-card hoverable bordered">
                <img class="card-image" src="{{ asset('media/apparel-product/shirt-11-front.jpg') }}" alt="tshirt">
                <div class="card-text">
                    <h5 class="card-text-heading">Digital Dude</h5>
                    <p class="card-text-sub">Elevate your style effortlessly with our signature T-shirts!</p>
                </div>
                <a class="nav-item" href="productinfo10"><button class="card-btn btn btn-success">Select Options</button></a>
            </div>
            <div class="item-card hoverable bordered">
                <img class="card-image" src="{{ asset('media/apparel-product/shirt-12-front.jpg') }}" alt="tshirt">
                <div class="card-text">
                    <h5 class="card-text-heading">Self Love</h5>
                    <p class="card-text-sub">Elevate your style effortlessly with our signature T-shirts!</p>
                </div>
                <button class="card-btn btn btn-success">Select Options</button>
            </div> 
            <div class="item-card hoverable bordered">
                <img class="card-image" src="{{ asset('media/apparel-product/shirt-13-front.jpg') }}" alt="tshirt">
                <div class="card-text">
                    <h5 class="card-text-heading">Cyber Captain</h5>
                    <p class="card-text-sub">Elevate your style effortlessly with our signature T-shirts!</p>
                </div>
                <button class="card-btn btn btn-success">Select Options</button>
            </div>
            <div class="item-card hoverable bordered">
                <img class="card-image" src="{{ asset('media/apparel-product/shirt-14-front.jpg') }}" alt="tshirt">
                <div class="card-text">
                    <h5 class="card-text-heading">Byte Boss</h5>
                    <p class="card-text-sub">Elevate your style effortlessly with our signature T-shirts!</p>
                </div>
                <button class="card-btn btn btn-success">Select Options</button>
            </div>
            <div class="item-card hoverable bordered">
                <img class="card-image" src="{{ asset('media/apparel-product/shirt-15-front.jpg') }}" alt="tshirt">
                <div class="card-text">
                    <h5 class="card-text-heading">Iskolar ng Bayan Punch!</h5>
                    <p class="card-text-sub">Elevate your style effortlessly with our signature T-shirts!</p>
                </div>
                <button class="card-btn btn btn-success">Select Options</button>
            </div>
            <div class="item-card hoverable bordered">
                <img class="card-image" src="{{ asset('media/apparel-product/shirt-16-front.jpg') }}" alt="tshirt">
                <div class="card-text">
                    <h5 class="card-text-heading">Pixel Popstar v.2</h5>
                    <p class="card-text-sub">Elevate your style effortlessly with our signature T-shirts!</p>
                </div>
                <button class="card-btn btn btn-success">Select Options</button>
            </div>
            <div class="item-card hoverable bordered">
                <img class="card-image" src="{{ asset('media/apparel-product/shirt-17-front.jpg') }}" alt="tshirt">
                <div class="card-text">
                    <h5 class="card-text-heading">Pixel Popstar v.3</h5>
                    <p class="card-text-sub">Elevate your style effortlessly with our signature T-shirts!</p>
                </div>
                <button class="card-btn btn btn-success">Select Options</button>
            </div>
            <div class="item-card hoverable bordered">
                <img class="card-image" src="{{ asset('media/apparel-product/shirt-18-front.jpg') }}" alt="tshirt">
                <div class="card-text">
                    <h5 class="card-text-heading">Binary Beauty</h5>
                    <p class="card-text-sub">Elevate your style effortlessly with our signature T-shirts!</p>
                </div>
                <button class="card-btn btn btn-success">Select Options</button>
            </div>
            <div class="item-card hoverable bordered">
                <img class="card-image" src="{{ asset('media/apparel-product/shirt-19-front.jpg') }}" alt="tshirt">
                <div class="card-text">
                    <h5 class="card-text-heading">Digital Darling</h5>
                    <p class="card-text-sub">Elevate your style effortlessly with our signature T-shirts!</p>
                </div>
                <button class="card-btn btn btn-success">Select Options</button>
            </div>
            <div class="item-card hoverable bordered">
                <img class="card-image" src="{{ asset('media/apparel-product/shirt-20-front.jpg') }}" alt="tshirt">
                <div class="card-text">
                    <h5 class="card-text-heading">Cyber Captain v.2</h5>
                    <p class="card-text-sub">Elevate your style effortlessly with our signature T-shirts!</p>
                </div>
                <button class="card-btn btn btn-success">Select Options</button>
            </div>
            <div class="item-card hoverable bordered">
                <img class="card-image" src="{{ asset('media/apparel-product/shirt-21-front.jpg') }}" alt="tshirt">
                <div class="card-text">
                    <h5 class="card-text-heading">Pixel Posh v.2</h5>
                    <p class="card-text-sub">Elevate your style effortlessly with our signature T-shirts!</p>
                </div>
                <button class="card-btn btn btn-success">Select Options</button>
            </div>
            <div class="item-card hoverable bordered">
                <img class="card-image" src="{{ asset('media/apparel-product/shirt-22-front.jpg') }}" alt="tshirt">
                <div class="card-text">
                    <h5 class="card-text-heading">Bit Blush v.2</h5>
                    <p class="card-text-sub">Elevate your style effortlessly with our signature T-shirts!</p>
                </div>
                <button class="card-btn btn btn-success">Select Options</button>
            </div>
  </div>
</div>




@endsection
