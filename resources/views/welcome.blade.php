@extends('layouts.main')


@section('content')
    <section class="banner" id="banner">
        <div class="content">
            <h2>Always Choose Good</h2>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer
            </p>
            <a href="#menu" class="btn">Our Menu</a>
        </div>
    </section>
    <section class="about" id="about">
        <div class="row">
            <div class="col-50">
                <h2><span>A</span>bout Us</h2>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printerLorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    <br><br>
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printerLorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printerLorem .
                </p>
            </div>
            <div class="col-50">
                <div class="imgBox">
                    <img src="../images/about.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="menu" id="menu">
        <div class="title">
            <h2>Our <span>M</span>enu</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
        <div class="content">
            <div class="box">
                <div class="imgBox">
                    <img src="../images/ragu.jpg" alt="">
                </div>
                <div class="text"><h3>Ragu Pasta</h3></div>
            </div>
            <div class="box">
                <div class="imgBox">
                    <img src="../images/seafood.jpg" alt="">
                </div>
                <div class="text"><h3>Seafood Pasta</h3></div>
            </div>
            <div class="box">
                <div class="imgBox">
                    <img src="../images/salad.jpg" alt="">
                </div>
                <div class="text"><h3>Special Salad</h3></div>
            </div>
            <div class="box">
                <div class="imgBox">
                    <img src="../images/pizza.jpg" alt="">
                </div>
                <div class="text"><h3>Special Pizza</h3></div>
            </div>
            <div class="box">
                <div class="imgBox">
                    <img src="../images/pie.jpg" alt="">
                </div>
                <div class="text"><h3>Special Pies</h3></div>
            </div>
            <div class="box">
                <div class="imgBox">
                    <img src="../images/icecream.jpg" alt="">
                </div>
                <div class="text"><h3>Gelato</h3></div>
            </div>
        </div>
        <a href="#" class="btn">View All</a>
    </section>
    <section class="experts" id="experts">
        <div class="title">
            <h2>Our <span>E</span>xperts</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
        <div class="content">
            <div class="box">
                <div class="imgBox">
                    <img src="../images/expert-1.jpg" alt="expert 1">
                </div>
                <div class="text"><h3>Jason Tatum</h3></div>
            </div>
            <div class="box">
                <div class="imgBox">
                    <img src="../images/expert-2.jpg" alt="expert 2">
                </div>
                <div class="text"><h3>Ambretta Udinesi</h3></div>
            </div>
            <div class="box">
                <div class="imgBox">
                    <img src="../images/expert-3.jpg" alt="expert 3">
                </div>
                <div class="text"><h3>Giordana Genovesi</h3></div>
            </div>
            <div class="box">
                <div class="imgBox">
                    <img src="../images/expert-4.jpg" alt="expert 4">
                </div>
                <div class="text"><h3>Alfreda Capon</h3></div>
            </div>
        </div>
    </section>
    <section class="testimonials" id="testimonials">
        <div class="title">
            <h2>Our <span>E</span>xperts</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
        <div class="content">
            <div class="box">
                <div class="imgBox">
                    <img src="../images/test-1.jpg" alt="test 1">
                </div>
                <div class="quote">
                    <p>
                        <span>&OpenCurlyDoubleQuote;</span><br>
                        Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry.Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry.Lorem Ipsum is simply dummy text .
                        dummy text of the printing .<br>
                        <span>&CloseCurlyDoubleQuote;</span>
                    </p>
                </div>
                <div class="text"><h3>Brock Florance</h3></div>
            </div>
            <div class="box">
                <div class="imgBox">
                    <img src="../images/test-2.jpg" alt="test 2">
                </div>
                <div class="quote">
                    <p>
                        <span>&OpenCurlyDoubleQuote;</span><br>
                        Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry.Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry.Lorem Ipsum is simply dummy text of the
                        dummy text of the printing .<br>
                        <span>&CloseCurlyDoubleQuote;</span>
                    </p>
                </div>
                <div class="text"><h3>Edward Abrahams</h3></div>
            </div>
            <div class="box">
                <div class="imgBox">
                    <img src="../images/test-3.jpg" alt="test 3">
                </div>
                <div class="quote">
                    <p>
                        <span>&OpenCurlyDoubleQuote;</span><br>
                        Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry.Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry.Lorem Ipsum is simply dummy text of the
                        dummy text of the printing .<br>
                        <span>&CloseCurlyDoubleQuote;</span>
                    </p>
                </div>
                <div class="text"><h3>Alma A. Laursen</h3></div>
            </div>
        </div>
    </section>
    <section class="contact" id="contact">
        <div class="contact-form">
            <div class="title">
                <h2><span>C</span>ontact <span>U</span>s</h2>
            </div>
            <form action="#" class="form">
                <h3>Send Message</h3>
                <div class="form-group">
                    <input type="text" id="name" class="form-input" placeholder="Full Name" required>
                    <label for="name" class="form-label">Full Name</label>
                </div>
                <div class="form-group">
                    <input type="email" id="email" class="form-input" placeholder="E-Mail" required>
                    <label for="email" class="form-label">E-Mail Address</label>
                </div>
                <div class="form-group">
                    <textarea type="text" id="message" class="form-input" placeholder="Message" required></textarea>
                    <label for="message" class="form-label">Message</label>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn">
                       Send &rarr;
                    </button>
                </div>
            </form>
        </div>
    </section>
    <script type="text/javascript">
        window.addEventListener("scroll",function(){
            var header=document.querySelector("header");
            header.classList.toggle("sticky",window.scrollY >0);
        });
    </script>
@endsection
