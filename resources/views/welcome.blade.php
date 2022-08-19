@extends('layouts.landing')

@section('contents')
    <div class="promo">
        <div class="promo-content">
            <div class="promo-left">
                <div class="promo-left-texts">
                    <div class="text-code"><img src="/assets/img/promo/code-1.png" alt=""><img src="/assets/img/promo/code-2.png" alt=""><img src="/assets/img/promo/code-3.png" alt=""></div>
                    <div class="text-code"><img src="/assets/img/promo/code-4.png" alt=""></div>
                    <div class="typed">Digital Marketing Software Development</div>
                    <div class="text-code"><img src="/assets/img/promo/code-5.png" alt=""></div>
                    <a id="stack" href="#anchor-project"><button class="btn-cases">Our cases</button></a>
                </div>
            </div>
            <div class="promo-right">
            </div>
        </div>
    </div>
    <div class="tools-section">
        <div class="custom-container">
            <div class="tools">
                <div class="tools-text">
                    <p>Tech stacks used for software development:</p>
                </div>
                <div class="tools-icons d-flex">
                    <div class="tools-icons-block">
                        <img src="/assets/img/icons/js.svg" alt="">
                    </div>
                    <div class="tools-icons-block">
                        <img src="/assets/img/icons/php.svg" alt="">
                    </div>
                    <div class="tools-icons-block">
                        <img src="/assets/img/icons/vue.svg" alt="">
                    </div>
                    <div class="tools-icons-block">
                        <img src="/assets/img/icons/react.svg" alt="">
                    </div>
                    <div class="tools-icons-block">
                        <img src="/assets/img/icons/mysql.svg" alt="">
                    </div>
                    <div class="tools-icons-block">
                        <img src="/assets/img/icons/redis.svg" alt="">
                    </div>
                    <div class="tools-icons-block">
                        <img src="/assets/img/icons/typescript.svg" alt="">
                    </div>
                    <div class="tools-icons-block">
                        <img src="/assets/img/icons/postgre.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="features-section">
        <div class="custom-container">
            <div class="features">
                <div class="features-block">
                    <div class="features-block-image">
                        <img src="/assets/img/features/1.svg" alt="">
                    </div>
                    <div class="features-block-text">
                        <p>Define the Presentation layer that contains technologies for user experience</p>
                    </div>
                </div>
                <div class="features-block">
                    <div class="features-block-image">
                        <img src="/assets/img/features/2.svg" alt="">
                    </div>
                    <div class="features-block-text">
                        <p>Outline the Business layer that covers products’ functional requirements</p>
                    </div>
                </div>
                <div class="features-block">
                    <div class="features-block-image">
                        <img src="/assets/img/features/3.svg" alt="">
                    </div>
                    <div class="features-block-text" id="expertise">
                        <p>Build a Domain layer that contains algorithms and programming components </p>
                    </div>
                </div>
                <div class="features-block">
                    <div class="features-block-image">
                        <img src="/assets/img/features/4.svg" alt="">
                    </div>
                    <div class="features-block-text">
                        <p>Develop a Data Access layer that stores data and manages databases</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-title-block">
        <div class="custom-container">
            <div class="title">
                <h2>Experienced Team of Web App Developers</h2>
            </div>
            <div class="text">
                <p>Our mission is to create innovative and scalable software applications that handle large volumes of data requests and backend computations.
                    We leverage best development practices to ensure that each platform functions properly and is available without interruptions.</p>
            </div>
        </div>
    </div>
    <div class="slider-block">
        <div class="custom-container">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="swiper-slide-text">
                            <div class="icon">
                                <img src="/assets/img/icons/setting-icon.svg" alt="">
                            </div>
                            <div class="title">
                                <h5>Data Analytics</h5>
                            </div>
                            <div class="description">
                                <p>Our dedicated experts design business data management strategies and develop
                                    well-integrated and secure solutions to streamline operations, improve
                                    budgeting, and minimize risks.
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide-image">
                            <img src="/assets/img/slider/1.png" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-slide-text">
                            <div class="icon">
                                <img src="/assets/img/icons/scheme-icon.svg" alt="">
                            </div>
                            <div class="title">
                                <h5>UX/UI</h5>
                            </div>
                            <div class="description">
                                <p>UX specialists at Smartdata ensure smooth and positive user experience by
                                    arranging thorough reasearch, considering various scenarios, building
                                    consistent design library and handling usability testings.
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide-image">
                            <img src="/assets/img/slider/1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev">
                    <div class="button-prev">
                        <img src="/assets/img/icons/arrow-icon.svg" alt="">
                    </div>
                </div>
                <div class="swiper-button-next">
                    <div class="button-next">
                        <img src="/assets/img/icons/arrow-icon.svg" alt="">
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
    <div class="about-blocks">
        <div class="custom-container">
            <div class="about-block desktop-reverse">
                <div class="about-block-image">
                    <img src="/assets/img/1.png" alt="">
                </div>
                <div class="about-block-text">
                    <div class="title">
                        <h3>Digital Marketing Automation Software</h3>
                    </div>
                    <div class="text">
                        <p>We create an all-in-one digital marketing management platforms that armor independent
                            marketers and agencies with a set of campaign optimization tools. These tools allow
                            eliminating routine tasks and achieving consistency in ad campaign management
                            decisions.</p>
                    </div>
                </div>
            </div>
            <div class="about-block gray-back">
                <div class="about-block-image">
                    <img src="/assets/img/2.png" alt="">
                </div>
                <div class="about-block-text">
                    <div class="title">
                        <h3>Customized Admin Dashboard for SaaS</h3>
                    </div>
                    <div class="text">
                        <p>We produce low-code services that optimize operational processes for SaaS businesses and large Enterprises. Companies save hours spent on development by using ready-to-use features tailored for business analytics, customer service, and subscription management.</p>
                    </div>
                </div>
            </div>
            <div class="about-block desktop-reverse">
                <div class="about-block-image">
                    <img src="/assets/img/3.png" alt="">
                </div>
                <div class="about-block-text">
                    <div class="title">
                        <h3>Cloud Cost Management Platform</h3>
                    </div>
                    <div class="text">
                        <p>We design a Сloud cost optimization platforms for heads of IT departments, Financial teams, and Company owners. These solutions provide granular visibility on numerous resources’ consumption and cost rates for making balanced managerial decisions. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="contact-us" class="form-section">
        <div class="custom-container">
            <div class="form-overlay">
                <div class="form-overlay-block">
                    <div class="title">
                        <h3>Connect with us</h3>
                    </div>
                    <div class="text">
                        <p>Hungary, 1085 Budapest, József krt 69. fszt 1.</p>
                        <a href="mailto:support@smartdatatech.io" class="custom-link">support@smartdatatech.io</a>
                    </div>
                </div>
            </div>
            <div class="form">
                <div class="form-title">
                    <h4>Send us a message</h4>
                </div>
                <div class="form-row">
                    <label>
                        <input v-model="name"
                               class="custom-input"
                               :class="{'error': showErrors && getError('name')}"
                               placeholder="First name"
                               type="text">
                        <span v-if="showErrors" class="error-text">{{getError('name')}}</span>
                    </label>
                </div>
                <div class="form-row">
                    <label>
                        <input v-model="email"
                               class="custom-input"
                               :class="{'error': showErrors && getError('email')}"
                               placeholder="Email"
                               type="email">
                        <span v-if="showErrors" class="error-text">{{getError('email')}}</span>
                    </label>
                </div>
                <div class="form-row">
                    <label>
                                <textarea v-model="message"
                                          class="custom-input"
                                          :class="{'error': showErrors && getError('message')}"
                                          placeholder="Message"
                                          name="comment"
                                          id="comment"
                                          cols="30"
                                          rows="10"></textarea>
                        <span v-if="showErrors" class="error-text">{{getError('message')}}</span>
                    </label>
                </div>
                <div class="form-button">
                    <button @click="sendForm()" :disabled="showErrors && disableButton" class="custom-button yellow">
                        <span>Send message</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
