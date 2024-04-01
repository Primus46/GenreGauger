<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <Style>
    @media (max-width: 767px) {
    .carousel-inner .carousel-item > div {
        display: none;
    }
    .carousel-inner .carousel-item > div:first-child {
        display: block;
    }
}

.carousel-inner .carousel-item.active,
.carousel-inner .carousel-item-next,
.carousel-inner .carousel-item-prev {
    display: flex;
}

/* medium and up screens */
@media (min-width: 768px) {
    
    .carousel-inner .carousel-item-end.active,
    .carousel-inner .carousel-item-next {
      transform: translateX(25%);
    }
    
    .carousel-inner .carousel-item-start.active, 
    .carousel-inner .carousel-item-prev {
      transform: translateX(-25%);
    }
}

.carousel-inner .carousel-item-end,
.carousel-inner .carousel-item-start { 
  transform: translateX(0);
}
  </Style>
</head>
    <body>
    <div class="container text-center my-3">
    <h2 class="font-weight-light">Genre's for you</h2>
    <div class="row my-auto justify-content-center">
        <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="col-md-3 mx-5">
                        <div class="card">
                        <div class="card-img-top">
                                <img src="//via.placeholder.com/500x400?text=1" class="img-fluid">
                            </div>
                            <div class="card-img-overlay">Slide 1</div>
                            <div class="card-body">
                              <h4 class="card-title">John Doe</h4>
                              <p class="card-text">Some example text.</p>
                              <a href="#" class="btn btn-primary">See Profile</a>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-3 mx-5">
                        <div class="card">
                        <div class="card-img-top">
                                <img src="//via.placeholder.com/500x400?text=2" class="img-fluid">
                            </div>
                            <div class="card-img-overlay">Slide 2</div>
                            <div class="card-body">
                              <h4 class="card-title">John Doe</h4>
                              <p class="card-text">Some example text.</p>
                              <a href="#" class="btn btn-primary">See Profile</a>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-3 mx-5">
                        <div class="card">
                        <div class="card-img-top">
                                <img src="//via.placeholder.com/500x400?text=3" class="img-fluid">
                            </div>
                            <div class="card-img-overlay">Slide 3</div>
                            <div class="card-body">
                              <h4 class="card-title">John Doe</h4>
                              <p class="card-text">Some example text.</p>
                              <a href="#" class="btn btn-primary">See Profile</a>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-3 mx-5">
                        <div class="card">
                            <div class="card-img-top">
                                <img src="//via.placeholder.com/500x400?text=4" class="img-fluid">
                            </div>
                            <div class="card-img-overlay">Slide 4</div>
                            <div class="card-body">
                              <h4 class="card-title">John Doe</h4>
                              <p class="card-text">Some example text.</p>
                              <a href="#" class="btn btn-primary">See Profile</a>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-3 mx-5">
                        <div class="card">
                        <div class="card-img-top">
                                <img src="//via.placeholder.com/500x400?text=5" class="img-fluid">
                            </div>
                            <div class="card-img-overlay">Slide 5</div>
                            <div class="card-body">
                              <h4 class="card-title">John Doe</h4>
                              <p class="card-text">Some example text.</p>
                              <a href="#" class="btn btn-primary">See Profile</a>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-3 mx-5">
                        <div class="card">
                        <div class="card-img-top">
                                <img src="//via.placeholder.com/500x400?text=6" class="img-fluid">
                            </div>
                            <div class="card-img-overlay">Slide 6</div>
                            <div class="card-body">
                              <h4 class="card-title">John Doe</h4>
                              <p class="card-text">Some example text.</p>
                              <a href="#" class="btn btn-primary">See Profile</a>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
    </div>
  </div>
  </body>
  <script>
    let items = document.querySelectorAll('.carousel .carousel-item')

items.forEach((el) => {
    const minPerSlide = 4
    let next = el.nextElementSibling
    for (var i=1; i<minPerSlide; i++) {
        if (!next) {
        	next = items[0]
      	}
        let cloneChild = next.cloneNode(true)
        el.appendChild(cloneChild.children[0])
        next = next.nextElementSibling
    }
})
  </script>

</html>