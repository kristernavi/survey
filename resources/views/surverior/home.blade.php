@extends('surverior.layout.app')

@section('content')
 <section class="section main">
    <div class="container">
      <div class="columns">
        <div class="column is-3">
          <div class="card is-fullwidth">
            <header class="card-header">
            </header>
            <div class="card-content">
              <a class="card-avatar">
                <img src="https://pbs.twimg.com/profile_images/3005141692/dc8e1eb36b6cbd2b5726f63c50adf7f2.png" class="card-avatar-img">
              </a>

              <div class="card-user">
                <div class="card-user-name">
                  <a href="#">John Smith</a>
                </div>
                <span>
                  <a href="#">@<span>jsmith</span></a>
                </span>
              </div>

              <div class="card-stats">
                <ul class="card-stats-list">
                  <li class="card-stats-item">
                    <a href="#" title="9.840 Tweet">
                      <span class="card-stats-key">Tweets</span>
                      <span class="card-stats-val">1</span>
                    </a>
                  </li>
                  <li class="card-stats-item">
                    <a href="#/following" title="885 Following">
                      <span class="card-stats-key">Following</span>
                      <span class="card-stats-val">0</span>
                    </a>
                  </li>
                  <li class="card-stats-item">
                    <a href="#">
                      <span class="card-stats-key">Followers</span>
                      <span class="card-stats-val">0</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="spacer"></div>

        </div>
        <div class="column is-8">
          <div class="notification is-danger">
            <button class="delete" onclick="((this).parentNode.remove())"></button>
            This template is not yet finished, it may change. Please check the readme for more information.
          </div>
          <div class="box">
            <article class="media">
              <div class="media-left">
                <figure class="image is-64x64">
                  <img src="http://placehold.it/128x128" alt="Image">
                </figure>
              </div>
              <div class="media-content">
                <div class="content">
                  <p>
                    <strong>John Smith</strong> <small>@johnsmith</small> <small style="float:right;">31m</small>
                    <br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
                  </p>
                </div>
                <nav class="level">
                  <div class="level-left">
                    <a class="level-item">
                      <span class="icon is-small"><i class="fa fa-reply"></i></span>
                    </a>
                    <a class="level-item">
                      <span class="icon is-small"><i class="fa fa-retweet"></i></span>
                    </a>
                    <a class="level-item">
                      <span class="icon is-small"><i class="fa fa-heart"></i></span>
                    </a>
                  </div>
                </nav>
              </div>
            </article>
            <article class="media">
              <div class="media-left">
                <figure class="image is-64x64">
                  <img src="http://placehold.it/128x128" alt="Image">
                </figure>
              </div>
              <div class="media-content">
                <div class="content">
                  <p>
                    <strong>John Smith</strong> <small>@johnsmith</small> <small style="float:right;">31m</small>
                    <br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
                  </p>
                </div>
                <nav class="level">
                  <div class="level-left">
                    <a class="level-item">
                      <span class="icon is-small"><i class="fa fa-reply"></i></span>
                    </a>
                    <a class="level-item">
                      <span class="icon is-small"><i class="fa fa-retweet"></i></span>
                    </a>
                    <a class="level-item">
                      <span class="icon is-small"><i class="fa fa-heart"></i></span>
                    </a>
                  </div>
                </nav>
              </div>
            </article>
            <article class="media">
              <div class="media-left">
                <figure class="image is-64x64">
                  <img src="http://placehold.it/128x128" alt="Image">
                </figure>
              </div>
              <div class="media-content">
                <div class="content">
                  <p>
                    <strong>John Smith</strong> <small>@johnsmith</small> <small style="float:right;">31m</small>
                    <br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
                  </p>
                </div>
                <nav class="level">
                  <div class="level-left">
                    <a class="level-item">
                      <span class="icon is-small"><i class="fa fa-reply"></i></span>
                    </a>
                    <a class="level-item">
                      <span class="icon is-small"><i class="fa fa-retweet"></i></span>
                    </a>
                    <a class="level-item">
                      <span class="icon is-small"><i class="fa fa-heart"></i></span>
                    </a>
                  </div>
                </nav>
              </div>
            </article>
            <article class="media">
              <div class="media-left">
                <figure class="image is-64x64">
                  <img src="http://placehold.it/128x128" alt="Image">
                </figure>
              </div>
              <div class="media-content">
                <div class="content">
                  <p>
                    <strong>John Smith</strong> <small>@johnsmith</small> <small style="float:right;">31m</small>
                    <br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
                  </p>
                </div>
                <nav class="level">
                  <div class="level-left">
                    <a class="level-item">
                      <span class="icon is-small"><i class="fa fa-reply"></i></span>
                    </a>
                    <a class="level-item">
                      <span class="icon is-small"><i class="fa fa-retweet"></i></span>
                    </a>
                    <a class="level-item">
                      <span class="icon is-small"><i class="fa fa-heart"></i></span>
                    </a>
                  </div>
                </nav>
              </div>
            </article>
            <article class="media">
              <div class="media-left">
                <figure class="image is-64x64">
                  <img src="http://placehold.it/128x128" alt="Image">
                </figure>
              </div>
              <div class="media-content">
                <div class="content">
                  <p>
                    <strong>John Smith</strong> <small>@johnsmith</small> <small style="float:right;">31m</small>
                    <br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
                  </p>
                </div>
                <nav class="level">
                  <div class="level-left">
                    <a class="level-item">
                      <span class="icon is-small"><i class="fa fa-reply"></i></span>
                    </a>
                    <a class="level-item">
                      <span class="icon is-small"><i class="fa fa-retweet"></i></span>
                    </a>
                    <a class="level-item">
                      <span class="icon is-small"><i class="fa fa-heart"></i></span>
                    </a>
                  </div>
                </nav>
              </div>
            </article>
            <article class="media">
              <div class="media-left">
                <figure class="image is-64x64">
                  <img src="http://placehold.it/128x128" alt="Image">
                </figure>
              </div>
              <div class="media-content">
                <div class="content">
                  <p>
                    <strong>John Smith</strong> <small>@johnsmith</small> <small style="float:right;">31m</small>
                    <br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
                  </p>
                </div>
                <nav class="level">
                  <div class="level-left">
                    <a class="level-item">
                      <span class="icon is-small"><i class="fa fa-reply"></i></span>
                    </a>
                    <a class="level-item">
                      <span class="icon is-small"><i class="fa fa-retweet"></i></span>
                    </a>
                    <a class="level-item">
                      <span class="icon is-small"><i class="fa fa-heart"></i></span>
                    </a>
                  </div>
                </nav>
              </div>
            </article>
            <article class="media">
              <div class="media-left">
                <figure class="image is-64x64">
                  <img src="http://placehold.it/128x128" alt="Image">
                </figure>
              </div>
              <div class="media-content">
                <div class="content">
                  <p>
                    <strong>John Smith</strong> <small>@johnsmith</small> <small style="float:right;">31m</small>
                    <br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
                  </p>
                </div>
                <nav class="level">
                  <div class="level-left">
                    <a class="level-item">
                      <span class="icon is-small"><i class="fa fa-reply"></i></span>
                    </a>
                    <a class="level-item">
                      <span class="icon is-small"><i class="fa fa-retweet"></i></span>
                    </a>
                    <a class="level-item">
                      <span class="icon is-small"><i class="fa fa-heart"></i></span>
                    </a>
                  </div>
                </nav>
              </div>
            </article>
            <article class="media">
              <div class="media-left">
                <figure class="image is-64x64">
                  <img src="http://placehold.it/128x128" alt="Image">
                </figure>
              </div>
              <div class="media-content">
                <div class="content">
                  <p>
                    <strong>John Smith</strong> <small>@johnsmith</small> <small style="float:right;">31m</small>
                    <br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
                  </p>
                </div>
                <nav class="level">
                  <div class="level-left">
                    <a class="level-item">
                      <span class="icon is-small"><i class="fa fa-reply"></i></span>
                    </a>
                    <a class="level-item">
                      <span class="icon is-small"><i class="fa fa-retweet"></i></span>
                    </a>
                    <a class="level-item">
                      <span class="icon is-small"><i class="fa fa-heart"></i></span>
                    </a>
                  </div>
                </nav>
              </div>
            </article>
            <article class="media">
              <div class="media-left">
                <figure class="image is-64x64">
                  <img src="http://placehold.it/128x128" alt="Image">
                </figure>
              </div>
              <div class="media-content">
                <div class="content">
                  <p>
                    <strong>John Smith</strong> <small>@johnsmith</small> <small style="float:right;">31m</small>
                    <br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
                  </p>
                </div>
                <nav class="level">
                  <div class="level-left">
                    <a class="level-item">
                      <span class="icon is-small"><i class="fa fa-reply"></i></span>
                    </a>
                    <a class="level-item">
                      <span class="icon is-small"><i class="fa fa-retweet"></i></span>
                    </a>
                    <a class="level-item">
                      <span class="icon is-small"><i class="fa fa-heart"></i></span>
                    </a>
                  </div>
                </nav>
              </div>
            </article>
          </div>
        </div>

      </div>
    </div>
  </section>
@stop
