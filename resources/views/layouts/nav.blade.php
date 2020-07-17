    <!-- Start nav -->
      <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container-fluid px-md-4 ">
          <a class="navbar-brand" href="index.html">Skillhunt</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>

          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                @foreach($pages as $page)
                    @if($page->name == 'Post a Job')
                        <li class="nav-item cta mr-md-1"><a href="new-post.html" class="nav-link">Post a Job</a></li>
                    @elseif($page->name == 'Want a Job')
                        <li class="nav-item cta cta-colored"><a href="job-post.html" class="nav-link">Want a Job</a></li>
                    @else
                    <li class="nav-item"><a href="#" class="nav-link">{{$page->name}}</a></li>
                    @endif
                @endforeach
              <!--<li class="nav-item"><a href="browsejobs.html" class="nav-link">Browse Jobs</a></li>
              <li class="nav-item"><a href="candidates.html" class="nav-link">Canditates</a></li>
              <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
              <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
              <li class="nav-item cta mr-md-1"><a href="new-post.html" class="nav-link">Post a Job</a></li>
              <li class="nav-item cta cta-colored"><a href="job-post.html" class="nav-link">Want a Job</a></li>-->

            </ul>
          </div>
        </div>
      </nav>
    <!-- END nav -->
