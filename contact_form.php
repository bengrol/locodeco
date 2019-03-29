<section>
    <section class="contact_form">
        <form id="locoContactForm" method="post">
            <div class="fields">
                <div class="field half">
                    <label for="name">Nom</label>
                    <input type="text" name="name" id="name" minlegth="3" required/>
                </div>
                <div class="field half">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required/>
                </div>
                <div class="field">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" rows="6" required></textarea>
                </div>
            </div>
            <ul class="actions">
                <li><button id="locoContactFormInput" type="submit" value="Envoi Message" class="primary" /></li>
                <li><input type="reset" value="Efface" /></li>
            </ul>
        </form>
    </section>
    <section class="contact_form" style="display: none">
        <h1>message envoyé</h1>
    </section>
</section>

