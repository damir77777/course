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
</style>
</head>
<body>
    <x-header />
<main>
    <section id="courses">
        <div class="container">
    <div class="d-flex">
            @foreach ($course as $item )
            <div class="card" style="width: 18rem;">
                <img src="{{$item->image}}.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$item->title}}</h5>
                  <p class="card-text">{{$item->description}}</p>
                  <p class="card-text">{{$item->cost}}</p>
                  <p class="card-text">{{$item->duration}}</p>
                  <p class="card-text">{{$item->category_id}}</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
              @endforeach
        </div>
      </div>

    </section>
</main>
</body>
</html>
