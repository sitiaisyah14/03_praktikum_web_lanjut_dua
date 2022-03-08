@extends('app')

@section('title')
    cafe house
@endsection
@section('content')
<section class="tm-welcome-section">
    <div class="container tm-position-relative">
      <div class="tm-lights-container">
        <img src="img/light.png" alt="Light" class="light light-1">
        <img src="img/light.png" alt="Light" class="light light-2">
        <img src="img/light.png" alt="Light" class="light light-3">
      </div>
      <div class="row tm-welcome-content">
        <h2 class="white-text tm-handwriting-font tm-welcome-header"><img src="img/header-line.png" alt="Line" class="tm-header-line">&nbsp;Food Menus&nbsp;&nbsp;<img src="img/header-line.png" alt="Line" class="tm-header-line"></h2>
        <h2 class="gold-text tm-welcome-header-2">Cafe House</h2>
        <p class="gray-text tm-welcome-description">Cafe House template is a mobile-friendly responsive <span class="gold-text">Bootstrap v3.3.5 layout</span> by <span class="gold-text">templatemo</span>. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculusnec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
        <a href="#main" class="tm-more-button tm-more-button-welcome">Read More</a>
      </div>
      <img src="img/table-set.png" alt="Table Set" class="tm-table-set img-responsive">
    </div>
  </section>
  <div class="tm-main-section light-gray-bg">
    <div class="container" id="main">
      <section class="tm-section row">
        <div class="col-lg-9 col-md-9 col-sm-8">
          <h2 class="tm-section-header gold-text tm-handwriting-font">Menu Makanan</h2>
          <p class="tm-welcome-description">Silahkan Pilih Menu pada Cafe House yang telah disediakan dibawah ini.</p>
        </div>
      </section>
      <section class="tm-section row">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Food Name</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Category</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($daftarmenu as $a)
              <tr>
                <td scope="row">{{$a->id}}</td>
                <td>{{$a->foodname}}</td>
                <td>{{$a->description}}</td>
                <td>{{$a->price}}</td>
                <td>{{$a->category}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>

      </section>
  </div>
@endsection

@section('js')
<script>
    $('#foodmenu').addClass('active');
</script>
@endsection

