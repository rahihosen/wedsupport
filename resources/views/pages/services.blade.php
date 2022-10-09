@extends('layouts.main')
@section('content')
    <div class="grid_3">
        <div class="container">
            <div class="breadcrumb1">
                <ul>
                    <a href="index.html"><i class="fa fa-home home_1"></i></a>
                    <span class="divider">&nbsp;|&nbsp;</span>
                    <li class="current-page">Services</li>
                </ul>
            </div>
            <div class="services">
                <div class="page_header">
                    <h1>Services</h1>
                    <h3>There are many variations of passages of Lorem Ipsum available</h3>
                    <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.
                        Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in
                        their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                    </p>
                </div>
                <div class="services_top">
                    <div class="col-sm-4 item_content">
                        <i class="fa fa-heart-o icon_4"> </i>
                        <h4>Lorem ipsum dolor</h4>
                        <p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled
                            and demoralized by the charms of pleasure of the moment, so blinded by desire.</p>
                    </div>
                    <div class="col-sm-4 item_content">
                        <i class="fa fa-lemon-o icon_4"> </i>
                        <h4>Lorem ipsum dolor</h4>
                        <p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled
                            and demoralized by the charms of pleasure of the moment, so blinded by desire.</p>
                    </div>
                    <div class="col-sm-4 item_content">
                        <i class="fa fa-thumbs-o-up icon_4"> </i>
                        <h4>Lorem ipsum dolor</h4>
                        <p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled
                            and demoralized by the charms of pleasure of the moment, so blinded by desire.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="services_top1">
                    <div class="col-sm-4 item_content">
                        <i class="fa fa-smile-o icon_4"> </i>
                        <h4>Lorem ipsum dolor</h4>
                        <p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled
                            and demoralized by the charms of pleasure of the moment, so blinded by desire.</p>
                    </div>
                    <div class="col-sm-4 item_content">
                        <i class="fa fa-wheelchair icon_4"> </i>
                        <h4>Lorem ipsum dolor</h4>
                        <p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled
                            and demoralized by the charms of pleasure of the moment, so blinded by desire.</p>
                    </div>
                    <div class="col-sm-4 item_content">
                        <i class="fa fa-spinner icon_4"> </i>
                        <h4>Lorem ipsum dolor</h4>
                        <p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled
                            and demoralized by the charms of pleasure of the moment, so blinded by desire.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about_middle">
        <div class="container">
            <h2>Happy Clients</h2>
            <div class="about_middle-grid1">
                <div class="col-sm-6 testi_grid list-item-0">
                    <blockquote class="testi_grid_blockquote">
                        <figure class="featured-thumbnail">
                            <img src="{{ asset('assets/images/a1.jpg') }}" class="img-responsive" alt="" />
                        </figure>
                        <div><a href="#">Aenean nonummy hendrerit mau phasellu porta. Fusce suscipit varius mi sed. Cum
                                sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla
                                dui.…</a>
                            <div class="clearfix"></div>
                        </div>
                    </blockquote>
                    <small class="testi-meta"><span class="user">Eiusmod tempor incididunt</span></small>
                </div>
                <div class="col-sm-6 testi_grid list-item-1">
                    <blockquote class="testi_grid_blockquote">
                        <figure class="featured-thumbnail">
                            <img src="{{ asset('assets/images/a2.jpg') }}" class="img-responsive" alt="" />
                        </figure>
                        <div><a href="#">Aenean nonummy hendrerit mau phasellu porta. Fusce suscipit varius mi sed. Cum
                                sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla
                                dui.…</a>
                            <div class="clearfix"></div>
                        </div>
                    </blockquote>
                    <small class="testi-meta1"><span class="user">Sint occaecat </span></small>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="about_middle-grid2">
                <div class="col-sm-6 testi_grid list-item-0">
                    <blockquote class="testi_grid_blockquote">
                        <figure class="featured-thumbnail">
                            <img src="{{ asset('assets/images/a1.jpg') }}" class="img-responsive" alt="" />
                        </figure>
                        <div><a href="#">Aenean nonummy hendrerit mau phasellu porta. Fusce suscipit varius mi sed. Cum
                                sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla
                                dui.…</a>
                            <div class="clearfix"></div>
                        </div>
                    </blockquote>
                    <small class="testi-meta"><span class="user">Eiusmod tempor incididunt</span></small>
                </div>
                <div class="col-sm-6 testi_grid list-item-1">
                    <blockquote class="testi_grid_blockquote">
                        <figure class="featured-thumbnail">
                            <img src="{{ asset('assets/images/a2.jpg') }}" class="img-responsive" alt="" />
                        </figure>
                        <div><a href="#">Aenean nonummy hendrerit mau phasellu porta. Fusce suscipit varius mi sed. Cum
                                sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla
                                dui.…</a>
                            <div class="clearfix"></div>
                        </div>
                    </blockquote>
                    <small class="testi-meta1"><span class="user">Sint occaecat </span></small>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div class="about_bottom">
        <div class="container">
            <h3>Team</h3>
            <div class="col-md-3 about_grid1">
                <ul class="posts-grid our-team">
                    <li class="list-item-1">
                        <figure class="thumbnail_1 thumbnail">
                            <a href="#"><img src="{{ asset('assets/images/a4.jpg') }}" class="img-responsive" alt="" /></a>
                            <div class="post_networks">
                                <ul>
                                    <li class="network_0"><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
                                </ul>
                            </div>
                        </figure>
                        <div class="desc">
                            <h4><a href="#">Perspiciatis</a></h4>
                            <p>Lorem ipsum dolor sit amet,</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 about_grid1">
                <ul class="posts-grid our-team">
                    <li class="list-item-1">
                        <figure class="thumbnail_1 thumbnail">
                            <a href="#"><img src="{{ asset('assets/images/a5.jpg') }}" class="img-responsive" alt="" /></a>
                            <div class="post_networks">
                                <ul>
                                    <li class="network_0"><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
                                </ul>
                            </div>
                        </figure>
                        <div class="desc">
                            <h4><a href="#">Aspernatur </a></h4>
                            <p>Lorem ipsum dolor sit amet,</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 about_grid1">
                <ul class="posts-grid our-team">
                    <li class="list-item-1">
                        <figure class="thumbnail_1 thumbnail">
                            <a href="#"><img src="{{ asset('assets/images/a6.jpg') }}" class="img-responsive" alt="" /></a>
                            <div class="post_networks">
                                <ul>
                                    <li class="network_0"><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
                                </ul>
                            </div>
                        </figure>
                        <div class="desc">
                            <h4><a href="#">Temporibus</a></h4>
                            <p>Lorem ipsum dolor sit amet,</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 about_grid1">
                <ul class="posts-grid our-team">
                    <li class="list-item-1">
                        <figure class="thumbnail_1 thumbnail">
                            <a href="#"><img src="{{ asset('assets/images/a7.jpg') }}" class="img-responsive" alt="" /></a>
                            <div class="post_networks">
                                <ul>
                                    <li class="network_0"><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
                                </ul>
                            </div>
                        </figure>
                        <div class="desc">
                            <h4><a href="#">Serferendis</a></h4>
                            <p>Lorem ipsum dolor sit amet,</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
@endsection
