<section class="container" id="portfolio">
    <div class="main-title">
        <h2>My <span>Portfolio</span><span class="bg-text">My Work</span></h2>
    </div>
    <p class="port-text">
        Here is some of my work that I've done in various programming languages.
    </p>
    <div class="portfolios">

    @foreach ($portfolios as $portfolio)
        <div class="portfolio-item">
            <div class="image">
                <img src="{{ asset('')}}{{ @$portfolio->image }}" alt="">
            </div>
            <div class="hover-items">
                <h3>Project Source</h3>
                <div class="icons">
                    <a href="{{ @$portfolio->git_link}}" class="icon">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="{{@$portfolio->behance_link}}" class="icon">
                        <i class="fab fa-behance"></i>
                    </a>
                    <a href="{{@$portfolio->youtube_link}}" class="icon">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
       
       
       
       
       
        
    
    
    







    </div>
</section>
