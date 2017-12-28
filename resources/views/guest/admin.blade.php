<!DOCTYPE html>
<!--
Template Name: Mixin
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
<title>PansCompany</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="clear"> 
    <!-- ################################################################################################ -->
    <div class="fl_left">
      <ul class="nospace inline">
        <li><i class="fa fa-phone"></i> +62 (221) 987 9876</li>
        <li><i class="fa fa-envelope-o"></i> info@panscompanycloth.com</li>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a class="faicon-rss" href="#"><i class="fa fa-rss"></i></a></li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="/">PansCompany.cloth</a></h1>
    </div>
    <!-- ################################################################################################ -->
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="/">Home</a></li>
        <li><a class="drop" href="#">Kategori Product</a>
          <ul>
            <li><a href="#">Kategori 1</a></li>
            <li><a href="#">Kategori 2</a></li>
            <li><a href="#">Kategori 3</a></li>
            <li><a href="#">Kategori 4</a></li>
            <li><a href="#">Kategori 5</a></li>
          </ul>
        <li><a href="#">Link Text</a></li>
        <li><a href="#">Link Text</a></li>
        <li><a href="#">Link Text</a></li>
      </ul>
    </nav>
    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
@foreach ($Header as $data)
<div class="wrapper bgded" style="background-image:url('/img/img6/{{$data->background}}')">
  <div class="overlay black">
    <div id="pageintro" class="clear"> 
      <!-- ################################################################################################ -->
      <h2 class="heading font-xl uppercase">{!!$data->text_besar!!}</h2>
      <p>{!!$data->text_kecil!!} </p>
      <!-- ################################################################################################ -->
    </div>
  </div>
</div>
<div class="wrapper row3">
<br>
<button class="btn btn-primary" ><a href="/admin/Header/{!!$data->id!!}/edit">Ubah Header</a></button>
</div>
@endforeach
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <div class="container clear"> 
    <!-- ################################################################################################ -->
    <div class="flexslider basicslider">
      <ul class="slides">
        <!-- START SLIDES -->
        <!-- ################################################################################################ -->
        <li>
          <article class="clear">
            <div class="one_half first">
              <h2 class="heading">In maximus sapien eget dapibus rhoncus!</h2>
              <p>Aenean et nisl sed mi euismod viverra viverra eget purus. Nam cursus porttitor ultrices. Sed cursus in nunc ac facilisis! Nulla facilisi. Praesent in imperdiet ligula, ac rhoncus arcu. Praesent faucibus eleifend lorem, sit amet feugiat libero facilisis non. Aenean eget feugiat massa; eget rhoncus justo. Vestibulum aliquet venenatis lacus in laoreet. Aliquam tempor ex et quam rhoncus rutrum.</p>
              <a href="#" title="View">Read More &raquo;</a></div>
            <div class="one_half"><img src="images/demo/slides/01.png" alt=""></div>
          </article>
        </li>
        <li>
          <article class="clear">
            <div class="one_half first">
              <h2 class="heading">Suspendisse vel lacus tempor</h2>
              <p>Nulla facilisi. Nam sit amet tellus eu urna tempus egestas sed ac sem! Vestibulum blandit accumsan nunc, id suscipit arcu convallis venenatis. Morbi auctor bibendum tincidunt. Nam consequat ultrices dolor eget maximus. Sed dictum diam et augue tristique cursus a ut enim. Vivamus posuere magna vel ante pellentesque, ut bibendum mauris aliquet.</p>
              <a href="#" title="View">Read More &raquo;</a></div>
            <div class="one_half"><img src="images/demo/slides/02.png" alt=""></div>
          </article>
        </li>
        <li>
          <article class="clear">
            <div class="one_half first">
              <h2 class="heading">Egestas nibh quis consectetur</h2>
              <p>Est quisque eleifend, tellus sit amet tempus hendrerit, lorem nibh molestie arcu, at cursus est magna in urna! Fusce imperdiet, sem at feugiat viverra; augue augue ultricies neque, ut vehicula urna risus id ante. In tristique nunc magna, at malesuada dolor luctus ac. Integer iaculis est velit, vel lacinia lorem maximus at. Donec sit amet tellus tellus. Aliquam non nisi dui.</p>
              <a href="#" title="View">Read More &raquo;</a></div>
            <div class="one_half"><img src="images/demo/slides/03.png" alt=""></div>
          </article>
        </li>
        <!-- ################################################################################################ -->
        <!-- END SLIDES -->
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
@foreach ($background_quotes as $data)

<div class="wrapper bgded" style="background-image:url('/img/img5/{{$data->background}}')">
@endforeach
  <div class="overlay dkgrey">
    <div class="container clear"> 
      <!-- ################################################################################################ -->
      <h2 class="nospace center btmspace-50">Quotes Of the Days</h2>
        <div class="flexslider carousel">
        <ul class="carousel-items center">
          @foreach ($quotes as $data)
          <li>
            <blockquote>{!!$data->text!!}</blockquote>
            <figure>
              <figcaption>
                <em>~ PansCompany.cloth</em></figcaption>
            </figure>
          </li>
          @endforeach
        </ul>
      </div>
      <!-- ################################################################################################ -->
    </div>
  </div>
</div>


@foreach ($background_quotes as $data)
<div class="wrapper row3">
<br>
<button class="btn btn-primary" ><a href="/admin/bgquotes/{!!$data->id!!}/edit">Ubah Background</a></button>
</div>
@endforeach

@foreach ($background_quotes as $data)
<div class="wrapper row3">
<br>
<button class="btn btn-primary" ><a href="/admin/quotes/{!!$data->id!!}/edit">Ubah Text Quotes</a></button>
</div>
@endforeach

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="group btmspace-50">
      <article class="one_third first">
        <h2>Pellentesque habitant</h2>
        <p>Nullam enim tellus, fermentum id purus a; venenatis imperdiet est. Nunc et auctor justo. Integer facilisis est id mollis vulputate. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
        <p class="nospace"><a href="#">Read More &raquo;</a></p>
      </article>
      <article class="one_third">
        <h2>Morbi tristique et</h2>
        <p>Quisque dolor felis, aliquam quis ipsum ac, malesuada mattis ligula? Praesent placerat et orci non feugiat. Curabitur ligula tortor, pharetra a nisl vel, iaculis vulputate dui. In ullamcorper dignissim suscipit. Aenean condimentum ipsum sed orci.</p>
        <p class="nospace"><a href="#">Read More &raquo;</a></p>
      </article>
      <article class="one_third">
        <h2>Netus et malesuada</h2>
        <p>Duis imperdiet vehicula sagittis. Donec convallis ut purus sit amet molestie. Phasellus cursus ultrices elit, at imperdiet dolor pretium et. Praesent iaculis eros eget ligula auctor ornare pellentesque eu elit nam ultrices porttitor.</p>
        <p class="nospace"><a href="#">Read More &raquo;</a></p>
      </article>
    </div>
    <!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
      <!-- ################################################################################################ -->
              
        
          <header class="heading">&nbsp&nbsp&nbsp&nbsp&nbsp <b>Product PansCompany</b>.<i>cloth</i></header>
          
          <br>
           <div class="panel-body">
              <p> <button class="btn btn-primary"><a href="{{ route('Product.create') }}">Tambah Data Product</a></button> </p>
            </div>
      
          <br>
          <div id="gallery">
        <figure>
          <ul class="nospace clear">
          @foreach ($Product as $data)
          
          
            <li class="one_quarter">

            <h2><u>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</u></h2>
            <img src="/img/img7/{{$data->cover}}">
            <br>
            <br>
            <center><h1 class="heading"><b><u>{!!$data->nama_product!!}</u></b></h1></center>
            <p> <b><u>Detail</u></b>  {!!$data->detail!!}</p>

            <h2><u>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</u></h2>
            </th>
          </tr>
            </li>
      @endforeach
          
      </ul>
      </figure>
      </div>
         <figcaption>Gallery Description Goes Here</figcaption>
        </div>


    <!-- ################################################################################################ -->
    <hr class="btmspace-50">
    <!-- ################################################################################################ -->
    <h2>Mauris ultrices pellentesque elementum.</h2>
    <p>Proin eget quam vitae eros ultricies mattis eu quis mauris. Nam faucibus nec tortor sed tincidunt. Duis ac sagittis sapien. Aenean viverra eros tortor, id scelerisque nibh accumsan non.</p>
    <ul class="nospace group capitalise figblock">
      <li class="one_quarter first"><a href="#">
        <figure class="borderedbox"><img src="images/demo/320x320.png" alt="">
          <figcaption class="inspace-15">Vivamus viverra</figcaption>
        </figure>
        </a></li>
      <li class="one_quarter"><a href="#">
        <figure class="borderedbox"><img src="images/demo/320x320.png" alt="">
          <figcaption class="inspace-15">Tellus at ullamcorper</figcaption>
        </figure>
        </a></li>
      <li class="one_quarter"><a href="#">
        <figure class="borderedbox"><img src="images/demo/320x320.png" alt="">
          <figcaption class="inspace-15">Nam imperdiet tincidunt</figcaption>
        </figure>
        </a></li>
      <li class="one_quarter"><a href="#">
        <figure class="borderedbox"><img src="images/demo/320x320.png" alt="">
          <figcaption class="inspace-15">Nunc elementum molestie</figcaption>
        </figure>
        </a></li>
    </ul>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="bgded" style="background-image:url('images/demo/backgrounds/03.png')"> 
  <!-- ################################################################################################ -->
  <div class="wrapper overlay dkgrey">
    <div id="socialbox" class="clear"> 
      <!-- ################################################################################################ -->
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a class="faicon-skype" href="#"><i class="fa fa-skype"></i></a></li>
        <li><a class="faicon-rss" href="#"><i class="fa fa-rss"></i></a></li>
        <li><a class="faicon-bitcoin" href="#"><i class="fa fa-bitcoin"></i></a></li>
        <li><a class="faicon-dropbox" href="#"><i class="fa fa-dropbox"></i></a></li>
        <li><a class="faicon-flickr" href="#"><i class="fa fa-flickr"></i></a></li>
        <li><a class="faicon-instagram" href="#"><i class="fa fa-instagram"></i></a></li>
        <li><a class="faicon-tumblr" href="#"><i class="fa fa-tumblr"></i></a></li>
        <li><a class="faicon-vk" href="#"><i class="fa fa-vk"></i></a></li>
        <li><a class="faicon-youtube" href="#"><i class="fa fa-youtube"></i></a></li>
      </ul>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper overlay white">
    <footer id="footer" class="clear"> 
      <!-- ################################################################################################ -->
      <div class="one_quarter first">
        <h6 class="title">Company Details</h6>
        <address class="btmspace-15">
        Company Name<br>
        Street Name &amp; Number<br>
        Town<br>
        Postcode/Zip
        </address>
        <ul class="nospace">
          <li class="btmspace-10"><span class="fa fa-phone"></span> +00 (123) 456 7890</li>
          <li><span class="fa fa-envelope-o"></span> info@domain.com</li>
        </ul>
      </div>
      <div class="one_quarter">
        <h6 class="title">From The Blog</h6>
        <article>
          <h2 class="nospace font-x1"><a href="#">Maecenas pretium</a></h2>
          <time class="smallfont" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
          <p>Vestibulumaccumsan egestibulum eu justo convallis augue estas aenean elit intesque sed.</p>
        </article>
      </div>
      <div class="one_quarter">
        <h6 class="title">Sed consectetur enim</h6>
        <ul class="nospace linklist">
          <li><a href="#">Nullam id est condimen</a></li>
          <li><a href="#">Praesent eget purus ut</a></li>
          <li><a href="#">Ut quis augue quis neque</a></li>
          <li><a href="#">Quisque varius erat sed</a></li>
          <li><a href="#">Fusce quis dolor et</a></li>
        </ul>
      </div>
      <div class="one_quarter">
        <h6 class="title">Proin et magna eget</h6>
        <p>Ut ut eleifend massa. Phasellus tincidunt ipsum et ante tempor condimentum. Sed porttitor eget mauris ut lobortis? Integer nec vehicula dolor. Nullam rutrum ac lorem ut condimentum.</p>
      </div>
      <!-- ################################################################################################ -->
    </footer>
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2015 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="layout/scripts/jquery.flexslider-min.js"></script>
</body>
</html>