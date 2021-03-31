<style>
.nav-right {

    width: 100%;

    display: flex;

}


.nav-name {
    margin-left: 1%;
}
</style>

<div class="navbar navbar-light" style="background-color: #e3f2fd; ">
    <nav class="navbar navbar-expand-lg navbar-light bg-light"
        style="background-color: #e3f2fd;padding-left: 1rem; font-family: 'Pangolin', cursive; width:100% ;">
        <!-- here i have use some in line css to modify this nav bar by my self -->
        <div class="nav-name">
            <a class="navbar-brand" href="#"></a>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style=" font-size: 20px;">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="http://localhost/Final%20project/Project/view/about.php">About <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Q&A</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                        href="https://www.google.com.bd/maps/search/restaurants/@24.3637996,88.6434296,15z/data=!3m1!4b1?hl=en&authuser=0">Around
                        You</a>
                </li>
                <br>
                <li class="nav-item">
                    <div class="after-login">
                <li class="nav-item">
                    <a class="nav-link" href="#">Restaurant</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Food</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Area</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Reating</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Offer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.foodpanda.com.bd/">Delivery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Review</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Get started</a>
                </li>
        </div>
        </li>
        </ul>


        <form class="form-inline my-2 my-lg-0">
            <div class="nav-right">
                <div class="nav-input">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                </div>
                <div class="nav-btn">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </div>
            </div>
        </form>
</div>
</nav>

</div>


<!-- this nav bar is from bootstrap 4 link is: https://getbootstrap.com/docs/4.6/components/navbar/ -->