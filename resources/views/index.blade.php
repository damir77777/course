<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<style>
    .hero{
        height: 75vh;
        width: 100%;
        overflow: hidden;
        background-image: url('img3.jpg');
        background-repeat: no-repeat;
        background-size: cover;background-position: 50% 20% ;

    }
</style>
</head>
<body>

    <x-header />
      <main>
        <section id="hero" class="hero d-flex justify-content-center align-items-center text-white ">
            <h1 class="bg-dark p-1 opacity-75">Онлайн курсы - это круто!</h1>
        </section>
        <section id="about">
          {{session()->get('alert')}}
            <div class="container">
                <h2 class="m-3">О нас</h2>
                <div class="row mb-3">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Преимущества 1</h5>
                          <p class="card-text">описание преимущества</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Преимущества 2</h5>
                            <p class="card-text">описание преимущества</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Преимущества 3</h5>
                            <p class="card-text">описание преимущества</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Преимущества 4</h5>
                            <p class="card-text">описание преимущества</p>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </section>

<section id="courses">
    <div class="container">
        <h2 class="m-3">О нас</h2>
<div class="d-flex">
        @foreach ($courses as $item)
        <div class="card" style="width: 18rem;">
            <img src="{{$item->image}}.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$item->title}}</h5>
              <p class="card-text">{{$item->description}}</p>
              <p class="card-text">{{$item->cost}}</p>
              <p class="card-text">{{$item->duration}}</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          @endforeach
    </div>
    {{ $courses->withQueryString()->links('pagination::bootstrap-5') }}
  </div>

</section>



<section id="enroll">
    <div class="container">
        <h2 class="m-3">О нас</h2>
        <form method="POST" action="/enroll">
          @csrfs
        <div class="mb-3">
            <label for="email" class="form-label">Ваш email</label>
            <input type="email" name="email" class="form-control" id="email">
            @error('name')
            <div class="alert alert-danger" role="alert">
              {{$message}}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Ваше имя</label>
            <input type="text" name="name" class="form-control" id="name">
            @error('email')
            <div class="alert alert-danger" role="alert">
              {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Выберите курс</label>
            <select class="form-select" name="course">
                @foreach ($courses as $item)
                <option value="{{$item->id}}"> {{$item->title}}</option>
                @endforeach



              </select>
        </div>
        <button type="submit" class="btn btn-primary">Оставить заявку</button>
    </form>
    </div>

</section>
    </main>
</body>
</html>
