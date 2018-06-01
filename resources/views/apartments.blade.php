<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <script src="{{asset('js/app.js')}}"></script>
</head>
<body>
<nav class="navbar navbar-light bg-light">
    <div class="col-md-3">
        <a class="navbar-brand" href="#"><i class="fab fa-adversal fa-4x"></i></a>
        <span class="text-muted">Sweet Home</span>
    </div>
    <div class="col-md-7">
        <form class="row">
            <div class="col-md-8">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            </div>
            <div class="col-md-4">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </div>
        </form>
    </div>
    <div class="col-md-2 mt-3">
        <img src="https://www.overleaf.com/assets/logos/overleaf_og_logo.png" alt=""
             class="img-thumbnail rounded-circle w-25 mr-2 float-left">
        <div class="mt-3">
        </div>
    </div>
    </div>
</nav>
<div class="container-fluid row mt-2">
    <nav class="col-md-2">
        <div class="nav flex-column nav-tabs" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link" id="v-pills-profile-tab" href="/"
               aria-controls="v-pills-profile" aria-selected="false">Home</a>
            <a class="nav-link" id="v-pills-profile-tab" href="/products"
               aria-controls="v-pills-profile" aria-selected="false">Best Home</a>
            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab"
               aria-controls="v-pills-messages" aria-selected="false">Life style</a>
            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab"
               aria-controls="v-pills-settings" aria-selected="false">About us</a>
            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab"
               aria-controls="v-pills-settings" aria-selected="false">Contact us</a>
        </div>
    </nav>
    <main class="col-md-10">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title float-left">
                    List product
                    <small class="text-muted">show all product</small>
                </h3>

                <div class="clearfix"></div>
                <div class="alert alert-success d-none" role="alert" id="messageSuccess"></div>
                <div class="alert alert-danger d-none" role="alert" id="messageError"></div>
                <table class="table table-striped">
                    <thead>
                    <tr class="row">
                        <th class="col-md-1">#</th>
                        <th class="col-md-2">Image</th>
                        <th class="col-md-2">Name</th>
                        <th class="col-md-3">Information</th>
                        <th class="col-md-2">Detail</th>
                        <th class="col-md-2">Price</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($list_apartments as $item)
                        <tr id="{{$item->id}}" class="row">
                            <th class="col-md-1">{{$item->id}}</th>
                            <th class="col-md-2">
                                <div class="card"
                                     style="background-image: url('{{$item->avatar}}'); background-size: cover; width: 60px; height: 60px;">
                                </div>
                            </th>
                            <td class="col-md-2 product-name">{{$item->name}}</td>
                            <td class="col-md-3 product-description">{{$item->information}}</td>
                            <td class="col-md-2 product-price">{{$item->informationDetail}}</td>
                            <td class="col-md-2">{{$item->price}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="float-right">
                    {{ $list_apartments->links() }}
                </div>
            </div>
        </div>
    </main>
</div>
<footer class="container-fluid mt-3 mb-3">
    <p class="text-center">Copyright @2018</p>
</footer>
</body>
</html>