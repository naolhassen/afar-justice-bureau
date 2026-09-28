@extends('layouts.app')

@section('content')
    <x-page-hero
        title="{{ __('messages.contact.title') }}"
        titleHighlight="{{ __('messages.contact.titleHighlight') }}"
        description="{{ __('messages.contact.description') }}"
    />

    <!--===== CONTACT AREA STARTS =======-->
    <div class="contact-widget-sec sp1">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="contact-widget-box">
                        <p>{{ __('messages.contact.description') }}</p>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="contact-widget-small">
                                    <div class="icons">
                                        <i class="fa-solid fa-location-dot fa-2xl text-white"></i>
                                    </div>
                                    <div class="space24"></div>
                                    <h5>{{ __('messages.contact.addressLabel') }}</h5>
                                    <div class="space12"></div>
                                    <a href="#">{{ __('messages.contact.headOffice') }}</a>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="contact-widget-small">
                                    <div class="icons">
                                        <i class="fa-solid fa-envelope fa-2xl text-white"></i>
                                    </div>
                                    <div class="space24"></div>
                                    <h5>{{ __('messages.contact.emailLabel') }}</h5>
                                    <div class="space12"></div>
                                    <a href="mailto:prosperityafarbranch@gmail.com">prosperityafarbranch@gmail.com</a>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="contact-widget-small">
                                    <div class="icons">
                                        <i class="fa-solid fa-clock fa-2xl text-white"></i>
                                    </div>
                                    <div class="space24"></div>
                                    <h5>{{ __('messages.contact.workingHours') ?? 'Working Hours' }}</h5>
                                    <div class="space12"></div>
                                    <a href="#">Mon - Fri: 8:30 AM - 5:30 PM</a>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="contact-widget-small">
                                    <h5>{{ __('messages.footer.about') }}</h5>
                                    <div class="space24"></div>
                                    <ul>
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-telegram"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="space30 d-xl-none d-block"></div>
                    <div class="contact-widget-area-inner heading1">
                        <h4 data-aos="fade-left" data-aos-duration="900">{{ __('messages.contact.title') }}</h4>
                        <div class="space12"></div>
                        <p data-aos="fade-left" data-aos-duration="1100">{{ __('messages.contact.description') }}</p>
                        <div class="space12"></div>
                        <div class="contact-boxarea" data-aos="fade-left" data-aos-duration="1200">
                            <form onsubmit="event.preventDefault(); alert('Message sent successfully!');">
                                <div class="row">
                                    <div class="col-xl-6 col-md-6">
                                        <div class="input-area">
                                            <input type="text" placeholder="{{ __('messages.contact.nameLabel') }}" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-md-6">
                                        <div class="input-area">
                                            <input type="email" placeholder="{{ __('messages.contact.emailLabel') }}" required>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-md-12">
                                        <div class="input-area">
                                            <input type="text" placeholder="{{ __('messages.contact.subjectLabel') ?? 'Subject / Topic' }}">
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-md-12">
                                        <div class="input-area">
                                            <textarea placeholder="{{ __('messages.contact.messageLabel') }}" rows="5" required></textarea>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-md-12">
                                        <div class="input-area">
                                            <button type="submit" class="vl-btn1">{{ __('messages.contact.submit') }} <i class="fa-solid fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== CONTACT AREA ENDS =======-->
@endsection
