@extends('layouts.app')

@section('content')

<div>
  <div id="tf-home" class="text-center">
        <video class="videoFix" autoplay loop muted preload >
          <source src="{{ url('/img/video2.mp4' )}}" type="video/mp4">
          <source src="{{ url('/img/video2.mp4' )}}" type="video/ogg">
        </video>
  </div>

<!-- About Us Page
==========================================-->
  <div id="tf-about">
      <div class="container">
          <div class="row">
              <!-- <div class="col-md-6">
                  <img src="img/02.png" class="img-responsive">
              </div> -->
              <div class="col-md-12">
                  <div class="about-text">
                      <div class="section-title">
                          <!-- <h4></h4> -->
                          <h2 style="text-align: center;" class="titleAnimate">Top <strong>Vijesti</strong></h2>

                          <div style="width: 60px; margin: 0 auto;" class="clearfix"><hr></div>
                      </div>
                      <!-- <p class="intro">We love building and rebuilding brands through our  specific skills. Using colour, fonts, and illustration, we brand companies in a way they will never forget.</p> -->
                      <!-- <ul class="about-list">
                          <li>
                              <span class="fa fa-dot-circle-o"></span>
                              <strong>Mission</strong> - <em>We deliver uniqueness and quality</em>
                          </li>
                          <li>
                              <span class="fa fa-dot-circle-o"></span>
                              <strong>Skills</strong> - <em>Delivering fast and excellent results</em>
                          </li>
                          <li>
                              <span class="fa fa-dot-circle-o"></span>
                              <strong>Clients</strong> - <em>Satisfied clients thanks to our experience</em>
                          </li>
                      </ul> -->
                      <div class="novosti_home row">
                        @foreach ($novosti as $news)
                            <div class="col-xs-12 col-md-4">
                                <a href="{{ url('/novosti/update/'.$news->id )}}">
                                <div class="newsTitle">
                                  {{ $news->novost_title }}
                                </div>
                                @if($news->novost_img)
                                    <div  class="newsImageContainer">
                                      <img class="newsImage" src="{{ url('/img/news/'.$news->novost_img)}}">
                                    </div> 
                                @endif
                                  <div class="newsText">
                                      {!! $news->novost_body !!}
                                  </div>
                                </a>
                                <br>
                              <section class="row" style="text-align: center;">
                                  <div class="col-xs-4">
                                      <div class="fb-share-button " data-href="{{ url('/novosti/update/'.$news->id )}}" data-layout="button_count" data-size="small" data-mobile-iframe="true">
                                          <a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">
                                              Podjeli
                                          </a>
                                      </div>
                                  </div>
                                  <div  class="col-xs-4">
                                      <a  class="twitter-share-button ">
                                          href="https://twitter.com/intent/tweet?text={{ url('/novosti/update/'.$news->id )}}">
                                          Tweet
                                      </a>
                                  </div>
                                  <div class="col-xs-4">
                                      <div class="g-plus " data-action="share" data-annotation="bubble" data-height="60" data-href="{{ url('/novosti/update/'.$news->id )}}"></div>
                                  </div>
                              </section>
                            </div>



                          @endforeach
                      </div>

                  </div>

              </div>
          </div>
      </div>

  </div>

  <!-- Team Page
  ==========================================-->
  <div id="tf-team" class="text-center">
      <div class="overlay">
          <div class="container">
              <div class="section-title center">
                  <h2 class="titleAnimate">o <strong>meni</strong></h2>

                  <div class="line">
                      <hr>
                  </div>
              </div>
              @if(Auth::user())
                <a href="{{url('/home/about')}}"><button class="btn btn-warning">Izmjeni Tekst</button></a>
              @endif
              <div id="team" class="owl-carousel owl-theme row">
              @foreach($texts as $text)
                  <div class="item">
                      <div class="thumbnail">
                          <!-- <img src="img/team/01.jpg" alt="..." class="img-circle team-img"> -->
                          <div class="caption">
                              <h3>{!! $text->naslov1 !!}</h3>
                              <!-- <p>CEO / Founder</p> -->
                              {!! $text->naslov1_body !!}
                          </div>
                      </div>
                  </div>

                  <div class="item">
                      <div class="thumbnail">
                          <!-- <img src="img/team/03.jpg" alt="..." class="img-circle team-img"> -->
                          <div class="caption">
                              <h3>{!! $text->naslov2 !!}</h3>
                              <!-- <p>CEO / Founder</p> -->
                                {!! $text->naslov2_body !!}
                          </div>
                      </div>
                  </div>

                  <div class="item">
                      <div class="thumbnail">
                          <!-- <img src="img/team/02.jpg" alt="..." class="img-circle team-img"> -->
                          <div class="caption">
                              <h3>{!! $text->naslov3 !!}</h3>
                              <!-- <p>CEO / Founder</p> -->
                              {!! $text->naslov3_body !!}

                          </div>
                      </div>
                  </div>

                  <div class="item">
                      <div class="thumbnail">
                          <!-- <img src="img/team/04.jpg" alt="..." class="img-circle team-img"> -->
                          <div class="caption">
                              <h3>{!! $text->naslov4 !!}</h3>
                              <!-- <p>CEO / Founder</p> -->
                              {!! $text->naslov4_body !!} 
                          </div>
                      </div>
                  </div>
                @endforeach

              </div>
              {{--<div class="item">
              Fahro Ćatović rođen je u Brčkom 1978. godine, a već  više od dvadeset godina živi u Sarajevu.

              Nakon teškog ranjavanja 1993. godine,  sa samo 15 godina, preživio je obostranu  visoku amputaciju, nakon koje se kreće uz pomoć invalidskih kolica.

              Poslije dugogodišnjeg liječenja u inostranstvu, po povratku u BiH, počinje sa svakodnevnom borbom sa neprilagođenim životnim uslovima za osobe sa posebnim potrebama u BiH.

              Vedar duh, neizmjerna volja za životom i smisao za šalu - glavne su karakteristike ovog bh. paraolimpijca.

              Prvi dodir sa profesionalnim sportom je bio biciklizam, te je imao debi u Ljubljani kada je kao jedini učesnik iz BiH učestovavo na maratonu u dužini od 42 km. Na 19. ljubljanskom maratonu, 41.195 metara prešao je u vremenu od dva sata i 18 minuta.
              U ovom sportu je prvi u  Bosni i Hercegovini.
              To je državni  rekord  ,u kojem  ima namjeru oboriti barem još nekoliko puta.

              Blizina olimpijskih ljepotica Bjelašnice i Jahorine, te nemogućnost kretanja po sarajevskim ulicama tokom zime, bili su jedan od motiva da se počne aktivno baviti skijanjem.
              Tako je 2014. godine uz snažnu želju i volju  naučio da skija, poslije samo  tri dana treninga sa instruktoricom u  Austriji.

              U 2016. godini, dobio je poziv od Paraolimpijskog  komiteta BiH da se priključi reprezentaciji u alpskom skijanju.

              Na međunarodnoj skijaškoj sceni predstavlja našu zemlju i nastupa pod pokroviteljstvom Paraolimpijskog komiteta BiH.

              Prvo takmičenje i klasifikaciju imao je u Rinnu u Austriji u januaru 2017. godine.

              Sretno oženjen, otac  tri  kćerke.

              </div>--}}

          </div>
          <a style="margin-top: 100px;" href="#tf-services" class="fa fa-angle-down page-scroll"></a>

      </div>

  </div>

  <!-- Services Section
  ==========================================-->
  <div id="tf-services" class="text-center">
      <div class="container">
          <div class="section-title center">
              <h2 class="titleAnimate"><strong>Ciljevi</strong></h2>
              <div class="line">
                  <hr>
              </div>
              <div class="clearfix"></div>
              <small><em>
                
              </em></small>
          </div>
          <div class="space"></div>
          <div class="row">
              <div class="col-md-3 col-sm-6 service">
                  <i class="fa fa-trophy"></i>
                  <h4><strong>cilj 1</strong></h4>
                  <p>Odlazak na Paraolimpijske zimske igre u Pyongyangu 2018. godine<br/>
                <a href="https://twitter.com/hashtag/pyongyang?lang=en"><em>#pyongyang2018</em></a></p>
              </div>

              <div class="col-md-3 col-sm-6 service">
                  <i class="fa fa-bullseye"></i>
                  <h4><strong>cilj 2</strong></h4>
                  <p>Promocija skijanja za osobe sa invaliditetom<br/>
                    <a href="https://twitter.com/search?q=%23sportzasve%20&src=typd&lang=en"><em>#sportzasve</em></a> </p>
              </div>

              <div class="col-md-3 col-sm-6 service">
                  <i class="fa fa-globe"></i>
                  <h4><strong>cilj 3</strong></h4>
                  <p>Motivisati osobe sa invaliditetom da se bave sportom <br/>
                  <a href="https://twitter.com/search?f=tweets&q=%23sportomzazdravlje&src=typd"><em>#sportomzazdravlje</em></a></p>
              </div>

              <div class="col-md-3 col-sm-6 service">
                  <i class="fa fa-bullhorn"></i>
                  <h4><strong>cilj 4</strong></h4>
                  <p>Uključiti širu zajednicu u razvoj sporta za osobe sa invaliditetom<br/>
                    <a href="https://twitter.com/search?f=tweets&q=%23jednakemogucnostizasve&src=typd"><em>#jednakemogucnostizasve</em></a></p>
              </div>
          </div>
      </div>
  </div>


  <!-- Testimonials Section
  ==========================================-->
  <div id="tf-testimonials" class="text-center">
      <div class="overlay">
          <div class="container">
              <div class="section-title center">
                  <h2 class="titleAnimate"><strong>motivacija</strong></h2>
                  <div class="line">
                      <hr>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                      <div id="testimonial" class="owl-carousel owl-theme">
                          <div class="item">
                              <h5>This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</h5>
                              <p><strong>Dean Martin</strong>, CEO Acme Inc.</p>
                          </div>

                          <div class="item">
                              <h5>This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</h5>
                              <p><strong>Dean Martin</strong>, CEO Acme Inc.</p>
                          </div>

                          <div class="item">
                              <h5>This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</h5>
                              <p><strong>Dean Martin</strong>, CEO Acme Inc.</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- Contact Section
  ==========================================-->
  <div id="tf-contact" class="text-center">
      <div class="container">

          <div class="row">
              <div class="col-md-8 col-md-offset-2">

                  <div class="section-title center">
                      <h2 class="titleAnimate"><strong>kontakt</strong></h2>
                      <div class="line">
                          <hr>
                      </div>
                      <div class="clearfix"></div>
                      <div class="row kontakti_">
                          <ul class="col-sm-4" style="list-style-type: none;">
                              <li>Fahrudin Ćatović</li>
                              <li>info@fahrocatovic.ba</li>
                              <li>061 109 099</li>
                          </ul>
                          <ul class="col-sm-4" style="list-style-type: none;">
                              {{--<li><i>Sponzorstvo</i></li>--}}
                              <li>Azra Atagić-Ćatović</li>
                              <li>061 269 706</li>
                          </ul>
                          <ul class="col-sm-4" style="list-style-type: none;">
                              <li><a href="https://www.facebook.com/catovicfahro"><i class="fa fa-facebook"></i></a></li>
                              <li><a href="https://www.instagram.com/fahro_catovic/"><i class="fa fa-instagram"></i></a></li>
                              <!-- <li><a href="#"><i class="fa fa-google-plus"></i></a></li> -->
                              <li><a href="https://www.youtube.com/channel/UCf2kLhTD_dlNxDhn6lIjKxg"><i class="fa fa-youtube"></i></a></li>
                          </ul>
                      </div>

                  </div>

                  <form role="form" method="POST" action="{{ url('/sendform') }}" enctype="multipart/form-data">
                      <input  type="hidden" name="_token" value="{{ csrf_token() }}">

                      <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="nameSender">Ime</label>
                                <input type="name" class="form-control" id="nameSender" placeholder="Vaše ime" required>
                            </div>
                        </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="emailSender">Email adresa</label>
                                  <input type="email" class="form-control" id="emailSender" placeholder="Vaš email" required>
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="messageSender">Poruka</label>
                          <textarea id="messageSender" class="form-control" rows="3" required></textarea>
                      </div>

                      <button type="submit" class="btn tf-btn btn-default">Submit</button>
                  </form>

              </div>
          </div>

      </div>
  </div>
</div>
@endsection
