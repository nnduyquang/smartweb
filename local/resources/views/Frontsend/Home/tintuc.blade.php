<style>
    div#fe_h_tintuc h5 {
        font-size: 36px;
        position: relative;
        padding-bottom: 10px;
        width: fit-content;
        margin: auto;

    }

    div#fe_h_tintuc h5:before {
        content: '';
        position: absolute;
        width: 68px;
        height: 2px;
        background-color: #0a95d1;
        left: 50%;
        transform: translate(-50%, 0%);
        bottom: -5px;
    }

    div#fe_h_tintuc h5 span {
        color: #0a95d1;
        font-weight: 400;
    }

    div#fe_h_tintuc p {
        font-size: 16px;
        width: 60%;
        margin: auto;
        padding-top: 10px;
        color: #6c757d;
        padding-bottom: 38px;
    }

    div.tintuc-element {
        width: 100%;
        border: 1px solid #c5c6c9;
        padding: 13px;
        overflow: hidden;
        transition: .3s;
    }

    div.tintuc-element div.img-boder-zoom:before {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 10;
        content: '';
        /*width: 0;*/
        /*height: 0;*/
        transition: .6s;
        width: 0%;
        height: 0%;
        border: 16px solid rgba(255, 255, 255, 0.5);
        opacity: 0;
    }

    div.tintuc-element:hover div.img-boder-zoom:before {
        width: 100%;
        height: 100%;
        border: 16px solid rgba(255, 255, 255, 0.5);
        opacity: 1;
    }

    div.tintuc-element img {
        width: 100%;
        height: auto;
        transition: .3s;

    }

    div.tintuc-element h6 {
        font-size: 23px;
        padding-top: 10px;
        padding-bottom: 10px;
    }

    div.tintuc-element span{
        font-size: 14px;
    }

    div.tintuc-element button{
        border: none;
        border-radius: 3px;
        padding: 8px 15px;
        font-size: 14px;
        color:white;
        background-color: #0a95d1;
        cursor: pointer;
    }

    div.tintuc-element:hover img {
        transform: scale(1.3);
    }

</style>

<div class="container-fluid pb-5" id="fe_h_tintuc">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h5>OUR <span>BLOG</span></h5>
                <p class="pt-3 pb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce aliquet, massa ac
                    ornare feugiat, nunc dui auctor ipsum, sed posuere eros sapien id quam.</p>
            </div>

            <div class="col-md-4 mb-5">
                <div class="tintuc-element shadow-lg">
                    <div class="img-boder-zoom position-relative" style="width: 100%;overflow: hidden">
                        <img src="{{URL::asset('images/Banner/blog-post-01.jpg')}}" alt="">
                    </div>

                    <h6>Duis ultricies aliquet mauris</h6>

                    <div class="d-flex justify-content-between">
                        <span><i class="fas fa-user text-primary"></i> Admin</span>
                        <span><i class="far fa-calendar-alt text-primary"></i> 23 Dec 2017</span>
                        <span><i class="far fa-comments text-primary"></i> 5 Comments</span>
                    </div>
                    <p style="width: 100%">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        consectetur adipiscing elit...</p>

                    <button>Read More <i class="fas fa-long-arrow-alt-right"></i></button>
                </div>

            </div>

            <div class="col-md-4 mb-5">
                <div class="tintuc-element shadow-lg">
                    <div class="img-boder-zoom position-relative" style="width: 100%;overflow: hidden">
                        <img src="{{URL::asset('images/Banner/blog-post-01.jpg')}}" alt="">
                    </div>

                    <h6>Duis ultricies aliquet mauris</h6>

                    <div class="d-flex justify-content-between">
                        <span><i class="fas fa-user text-primary"></i> Admin</span>
                        <span><i class="far fa-calendar-alt text-primary"></i> 23 Dec 2017</span>
                        <span><i class="far fa-comments text-primary"></i> 5 Comments</span>
                    </div>
                    <p style="width: 100%">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        consectetur adipiscing elit...</p>

                    <button>Read More <i class="fas fa-long-arrow-alt-right"></i></button>
                </div>

            </div>

            <div class="col-md-4 mb-5">
                <div class="tintuc-element shadow-lg">
                    <div class="img-boder-zoom position-relative" style="width: 100%;overflow: hidden">
                        <img src="{{URL::asset('images/Banner/blog-post-01.jpg')}}" alt="">
                    </div>

                    <h6>Duis ultricies aliquet mauris</h6>

                    <div class="d-flex justify-content-between">
                        <span><i class="fas fa-user text-primary"></i> Admin</span>
                        <span><i class="far fa-calendar-alt text-primary"></i> 23 Dec 2017</span>
                        <span><i class="far fa-comments text-primary"></i> 5 Comments</span>
                    </div>
                    <p style="width: 100%">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        consectetur adipiscing elit...</p>

                    <button>Read More <i class="fas fa-long-arrow-alt-right"></i></button>
                </div>

            </div>

        </div>
    </div>
</div>