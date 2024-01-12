@extends('layout')

@section('main-content')
<div class="row d-flex align-items-center mx-auto" style="width: 80%;">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <div id="carouselExampleIndicators" class="carousel slide">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="{{ asset('media/apparel-product/shirt-10-front.png') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="{{ asset('media/apparel-product/shirt-10-front.png') }}" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </div>

  <div class="col-sm-6 ">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">TAMAD T-Shirt</h5>
        <h4>PHP 180.00</h4>
        <h5> Color </h5>
        <div class="text-center">
          <button type="button" class="btn btn-outline-secondary" data-bs-toggle="button">White</button>
        </div>
        <h5> Size </h5>
        <div class="text-center">
          <button type="button" class="btn btn-outline-secondary size-btn" data-size="Small">Small</button>
          <button type="button" class="btn btn-outline-secondary size-btn" data-size="Medium">Medium</button>
          <button type="button" class="btn btn-outline-secondary size-btn" data-size="Large">Extra Large</button>
        </div>

        <br>

        <div class="text-center mx-auto"><button type="button" class="btn btn-primary btn-lg d-block mx-auto">Add to Cart</button></div>
      </div>

      <br>

      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Description and Fit
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>About.</strong>
              Channel your inner Pirate King with this pixelated Luffy tee - Pirate king your way to adventure!
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Materials
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>Polyester</strong>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Care Guide
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>Polyester can usually be machine-washed. We recommend not washing above 40° Celsius, in most cases 30° Celsius is enough and always more eco-friendly.</strong> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const sizeButtons = document.querySelectorAll('.size-btn');

    sizeButtons.forEach(button => {
      button.addEventListener('click', function () {
        sizeButtons.forEach(btn => {
          btn.classList.remove('active');
        });

        this.classList.toggle('active');
      });
    });
  });
</script>
@endsection
