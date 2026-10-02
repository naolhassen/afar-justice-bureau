@extends('layouts.app')

@section('content')
    <x-page-hero
        :title="__('messages.contact.title')"
        :titleHighlight="__('messages.contact.titleHighlight')"
        :description="__('messages.contact.description')"
    />

    <section class="civic-section">
        <div class="auto-container">
            <div class="row clearfix g-4">

                <!-- Left Column: Official Contact Directory -->
                <div class="col-lg-5 col-md-12 mb-4">
                    <div class="civic-card h-100">
                        <span class="civic-badge civic-badge-navy mb-3">Headquarters Directory</span>
                        <h3 style="font-weight: 800; color: var(--afar-navy); margin-bottom: 18px; font-size: 1.5rem;">
                            {{ __('messages.contact.info') }}
                        </h3>
                        <p style="color: var(--afar-muted); font-size: 0.95rem; line-height: 1.7; margin-bottom: 24px;">
                            {{ __('messages.contact.description') }}
                        </p>

                        <div style="display: flex; flex-direction: column; gap: 20px;">
                            <!-- Address -->
                            <div style="display: flex; gap: 16px; align-items: flex-start;">
                                <div style="width: 44px; height: 44px; border-radius: 12px; background: rgba(201, 151, 56, 0.14); color: var(--afar-gold); display: flex; align-items: center; justify-content: center; font-size: 18px; flex-shrink: 0;">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div>
                                    <h6 style="font-weight: 800; color: var(--afar-navy); margin-bottom: 4px; font-size: 0.95rem;">{{ __('messages.contact.addressLabel') }}</h6>
                                    <p style="color: var(--afar-muted); font-size: 0.9rem; line-height: 1.6; margin: 0;">
                                        {{ __('messages.contact.addressValue') }}
                                    </p>
                                </div>
                            </div>

                            <!-- Phone / Hotline -->
                            <div style="display: flex; gap: 16px; align-items: flex-start;">
                                <div style="width: 44px; height: 44px; border-radius: 12px; background: rgba(10, 34, 54, 0.08); color: var(--afar-navy); display: flex; align-items: center; justify-content: center; font-size: 18px; flex-shrink: 0;">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div>
                                    <h6 style="font-weight: 800; color: var(--afar-navy); margin-bottom: 4px; font-size: 0.95rem;">{{ __('messages.footer.phone') }}</h6>
                                    <a href="tel:+251336660123" style="color: var(--afar-navy); font-weight: 700; font-size: 0.95rem; text-decoration: none;">
                                        {{ __('messages.contact.phoneValue') }}
                                    </a>
                                </div>
                            </div>

                            <!-- Email -->
                            <div style="display: flex; gap: 16px; align-items: flex-start;">
                                <div style="width: 44px; height: 44px; border-radius: 12px; background: rgba(11, 122, 90, 0.1); color: var(--afar-green); display: flex; align-items: center; justify-content: center; font-size: 18px; flex-shrink: 0;">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <div>
                                    <h6 style="font-weight: 800; color: var(--afar-navy); margin-bottom: 4px; font-size: 0.95rem;">{{ __('messages.footer.email') }}</h6>
                                    <a href="mailto:{{ __('messages.contact.emailValue') }}" style="color: var(--afar-navy); font-weight: 700; font-size: 0.95rem; text-decoration: none;">
                                        {{ __('messages.contact.emailValue') }}
                                    </a>
                                </div>
                            </div>

                            <!-- Working Hours -->
                            <div style="display: flex; gap: 16px; align-items: flex-start;">
                                <div style="width: 44px; height: 44px; border-radius: 12px; background: rgba(201, 151, 56, 0.14); color: var(--afar-gold); display: flex; align-items: center; justify-content: center; font-size: 18px; flex-shrink: 0;">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                <div>
                                    <h6 style="font-weight: 800; color: var(--afar-navy); margin-bottom: 4px; font-size: 0.95rem;">{{ __('messages.contact.hoursLabel') }}</h6>
                                    <p style="color: var(--afar-muted); font-size: 0.9rem; line-height: 1.6; margin: 0;">
                                        {{ __('messages.contact.hoursValue') }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Direct Social Channels -->
                        <div style="margin-top: 30px; padding-top: 20px; border-top: 1px solid var(--afar-border);">
                            <span style="display: block; font-size: 12px; font-weight: 800; text-transform: uppercase; color: var(--afar-navy); letter-spacing: 0.08em; margin-bottom: 12px;">
                                Official Media Channels
                            </span>
                            <div style="display: flex; gap: 10px;">
                                <a href="https://facebook.com" target="_blank" rel="noopener" style="width: 38px; height: 38px; border-radius: 50%; background: rgba(10,34,54,0.06); color: var(--afar-navy); display: flex; align-items: center; justify-content: center; text-decoration: none;"><i class="fa fa-facebook-f"></i></a>
                                <a href="https://twitter.com" target="_blank" rel="noopener" style="width: 38px; height: 38px; border-radius: 50%; background: rgba(10,34,54,0.06); color: var(--afar-navy); display: flex; align-items: center; justify-content: center; text-decoration: none;"><i class="fa fa-twitter"></i></a>
                                <a href="https://t.me" target="_blank" rel="noopener" style="width: 38px; height: 38px; border-radius: 50%; background: rgba(10,34,54,0.06); color: var(--afar-navy); display: flex; align-items: center; justify-content: center; text-decoration: none;"><i class="fa fa-paper-plane"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Official Inquiry Form -->
                <div class="col-lg-7 col-md-12">
                    <div class="civic-card">
                        <span class="civic-badge civic-badge-gold mb-3">Citizen Communication Desk</span>
                        <h3 style="font-weight: 800; color: var(--afar-navy); margin-bottom: 8px; font-size: 1.5rem;">
                            Submit an Official Inquiry or Petition
                        </h3>
                        <p style="color: var(--afar-muted); font-size: 0.95rem; line-height: 1.7; margin-bottom: 26px;">
                            Fill in the required information below to submit a formal inquiry, request legal aid eligibility assessment, or lodge a public feedback petition.
                        </p>

                        <form action="#" method="POST" onsubmit="event.preventDefault(); alert('Your message has been received by the Afar Justice Bureau Secretariat.');">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group mb-3">
                                    <label style="font-size: 13px; font-weight: 700; color: var(--afar-navy); margin-bottom: 6px;">{{ __('messages.contact.nameLabel') }} <span style="color: var(--afar-red);">*</span></label>
                                    <input type="text" name="name" class="form-control" placeholder="Your full name" required style="height: 48px; border-radius: 10px; border: 1px solid var(--afar-border); background: #fdfdfe;">
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <label style="font-size: 13px; font-weight: 700; color: var(--afar-navy); margin-bottom: 6px;">{{ __('messages.contact.emailLabel') }} <span style="color: var(--afar-red);">*</span></label>
                                    <input type="email" name="email" class="form-control" placeholder="name@domain.com" required style="height: 48px; border-radius: 10px; border: 1px solid var(--afar-border); background: #fdfdfe;">
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <label style="font-size: 13px; font-weight: 700; color: var(--afar-navy); margin-bottom: 6px;">{{ __('messages.contact.phoneLabel') }}</label>
                                    <input type="tel" name="phone" class="form-control" placeholder="+251 9... / 09..." style="height: 48px; border-radius: 10px; border: 1px solid var(--afar-border); background: #fdfdfe;">
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <label style="font-size: 13px; font-weight: 700; color: var(--afar-navy); margin-bottom: 6px;">Woreda / Zone of Residence</label>
                                    <input type="text" name="woreda" class="form-control" placeholder="e.g. Semera, Dubti, Asayita" style="height: 48px; border-radius: 10px; border: 1px solid var(--afar-border); background: #fdfdfe;">
                                </div>
                                <div class="col-12 form-group mb-3">
                                    <label style="font-size: 13px; font-weight: 700; color: var(--afar-navy); margin-bottom: 6px;">{{ __('messages.contact.subjectLabel') }} <span style="color: var(--afar-red);">*</span></label>
                                    <input type="text" name="subject" class="form-control" placeholder="Subject of inquiry or legal assistance request" required style="height: 48px; border-radius: 10px; border: 1px solid var(--afar-border); background: #fdfdfe;">
                                </div>
                                <div class="col-12 form-group mb-4">
                                    <label style="font-size: 13px; font-weight: 700; color: var(--afar-navy); margin-bottom: 6px;">{{ __('messages.contact.messageLabel') }} <span style="color: var(--afar-red);">*</span></label>
                                    <textarea name="message" class="form-control" rows="5" placeholder="Provide complete details regarding your inquiry or petition..." required style="border-radius: 10px; border: 1px solid var(--afar-border); background: #fdfdfe;"></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="theme-btn btn-style-one" style="padding: 12px 32px;">
                                        <span class="txt">{{ __('messages.contact.submit') }} &rarr;</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
