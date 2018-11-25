<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/')}}">Home</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Teacher<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('/teacher_registration')}}">Teacher Registration</a></li>
                        <li><a href="{{ url('/teacher_list')}}">Teacher View</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Staff<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('/staff_registration')}}">Staff Registration</a></li>
                        <li><a href="{{ url('/staff_list')}}">Staff View</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Student<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('/student_registration')}}">Student Registration</a></li>
                        <li><a href="{{ url('/student_list')}}">Student View</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Parent<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('/parents/create')}}">Parent Registration</a></li>
                        <li><a href="{{ url('/parents')}}">Parent View</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>