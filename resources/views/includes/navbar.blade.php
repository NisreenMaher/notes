<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="{{url('/')}}">NOTE KEEPER</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <a class="nav-item nav-link active" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="{{url('/about')}}">About</a>

                <a class="nav-item nav-link" href="{{url('/posts')}}">NOTES</a>
                <a class=" btn btn-primary" href="{{url('/posts/create')}}">Create a note</a>
    
            </ul>
    
            <!-- Right Side Of Navbar -->

        </div>
      </nav>

