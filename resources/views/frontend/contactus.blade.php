@extends('frontend.layouts.master')

@section('content')
<style>
    .contact-section {
        text-align: center;
        padding: 50px 20px;
        background: #f7f7f7;
    }

    .contact-header h2 {
        font-size: 36px;
        margin-bottom: 10px;
    }

    .contact-header .highlight {
        color: #ff5722;
    }

    .contact-container {
        display: flex;
        justify-content: center;
        gap: 40px;
        flex-wrap: wrap;
        margin-top: 30px;
    }

    .contact-box {
        background: #fff;
        padding: 20px;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        text-align: center;
        width: 280px;
    }

    .contact-icon {
        font-size: 30px;
        color: #ff5722;
        margin-bottom: 10px;
    }

    .contact-body {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: start;
        gap: 40px;
        padding: 40px 20px;
        background: #fff;
    }

    .form-container {
        flex: 1;
        min-width: 350px;
        max-width: 500px;
        background: #f9f9f9;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    .form-container h1 {
        font-size: 28px;
        color: #333;
        margin-bottom: 15px;
    }

    .form-container p {
        font-size: 14px;
        color: #555;
        margin-bottom: 25px;
    }

    .input-group {
        display: flex;
        gap: 15px;
        margin-bottom: 15px;
    }

    .input-group input,
    textarea {
        flex: 1;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 14px;
        width: 100%;
    }

    textarea {
        resize: vertical;
        height: 120px;
        margin-bottom: 15px;
    }

    .submit-button {
        background-color: #ff5722;
        color: #fff;
        border: none;
        padding: 12px 20px;
        border-radius: 8px;
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .submit-button:hover {
        background-color: #e64a19;
    }

    iframe {
        border-radius: 12px;
        width: 100%;
        height: 100%;
        min-height: 450px;
        border: none;
    }

    @media (max-width: 768px) {
        .contact-container {
            flex-direction: column;
            align-items: center;
        }
        .contact-body {
            flex-direction: column;
        }
    }
</style>

<div class="container">
    <div class="row">
        <section class="contact-section">
            <div class="contact-header">
                <h2><strong>GET IN</strong> <span class="highlight">TOUCH</span></h2>
                <p>Contact us if you need information</p>
            </div>

            <div class="contact-container">
                <div class="contact-box">
                    <i class="fas fa-map-marker-alt contact-icon"></i>
                    <p><strong>252B, Central Street Main Road</strong><br>Belix Tower, New York, USA</p>
                </div>

                <div class="contact-box">
                    <i class="fas fa-phone-alt contact-icon"></i>
                    <p>09 (123) 456 789<br>09 (987) 654 321</p>
                </div>

                <div class="contact-box">
                    <i class="fas fa-globe contact-icon"></i>
                    <p>info@example.com<br>www.example.com</p>
                </div>
            </div>
        </section>
    </div>
</div>

<div class="d-flex contact-body">
    <div class="form-container">
        <h1>Send Message</h1>
        <p>If you need any information, feel free to send us a message. We’ll get back to you as soon as possible.</p>
        <form action="{{ route('storeContactMessage') }}" method="POST">
            @csrf
            <div class="input-group">
                <input type="text" name="full_name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
            </div>
            <textarea name="message" placeholder="Write your message here..." required></textarea>
            <button class="submit-button" type="submit">SEND MESSAGE</button>
        </form>
    </div>

    <div class="form-container">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3520.698700012525!2d81.62104727531406!3d28.06422297597978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3998677e63505b1b%3A0x1037b3303874919d!2sThe%20Burger%20House%20And%20Crunchy%20Fried%20Chicken!5e0!3m2!1sen!2snp!4v1747293316702!5m2!1sen!2snp"
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</div>
@endsection
