@extends('layouts.app')

@section('content')
    
<section class="page">
  <!-- ***** Page Top Start ***** -->
  <div class="cover" data-image="assets/images/photos/header.jpg">
    <div class="cover-top">
      <div class="container">
        <div class="row">
          <div class="offset-lg-3 col-lg-6">
            <h1>Nuestro Blog</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="cover-bottom">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ol class="breadcrumb">
              <li><a href="blue-index.html">Inicio</a></li>
              <li class="active">Blogs</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Page Top End ***** -->


  <!-- ***** Page Content Start ***** -->
  <div class="page-bottom">
    <div class="container">
      
      <div class="row">
        <!-- ***** Page Content Start ***** -->


        <div class="col-lg-8 col-md-12 col-sm-12">
          <div class="blog-list">
            <div class="row">


              @include('includes.blogs-destacado')


              @include('includes.blogs-listado')

          <!-- ***** Pagination Start ***** -->
          @include('includes.pagination-blogs')
          <!-- ***** Pagination End ***** -->

          
        </div>
        <!-- ***** Page Content End ***** -->



        @include('includes.blogs-aside')



      </div>
    </div>
  </div>
  <!-- ***** Page Content End ***** -->
</section>

@endsection