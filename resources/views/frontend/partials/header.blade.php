<header class="container header active" id="home">
    <div class="header-content">
        <div class="left-header">
            <div class="h-shape"></div>
            <div class="image">
                <img src="{{ asset('')}}{{ @$hero->image }}" alt="">
            </div>
        </div>
        <div class="right-header">
            <h1 class="name">
                {{ @$hero->title }}
            </h1>
            <p>
               {{ @$hero->description }}
            </p>
            <div class="btn-con">
                <a href="{{ asset('admin/cv')}}/{{ @$hero->cv_file }}" class="main-btn" download>
                    <span class="btn-text">Download CV</span>
                    <span class="btn-icon"><i class="fas fa-download"></i></span>
                </a>
            </div>
        </div>
    </div>
</header>
