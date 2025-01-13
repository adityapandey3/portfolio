<section id="contact-section">
    <style>
        #contact-section {
            padding: 50px;
            background: #1f242d;
            color: white;
        }
        .contact-title {
            font-size: 2rem;
            text-align: center;
            color: #0ef;
        }
        .contact-form {
            margin: 20px auto;
            max-width: 400px;
        }
        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border-radius: 5px;
        }
        .contact-form button {
            padding: 10px 20px;
            background: #0ef;
            color: #000;
            border: none;
            border-radius: 5px;
        }
    </style>
    <h2 class="contact-title">Contact Me</h2>
    <form class="contact-form">
        <input type="text" placeholder="Name" required>
        <input type="email" placeholder="Email" required>
        <textarea placeholder="Message" rows="5" required></textarea>
        <button type="submit">Send</button>
    </form>
</section>
