<form action="result.php" method="POST">
    <div>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="user_name">
    </div>
    <div>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="user_first_name">
    </div>
    <div>
        <label for="courriel">Courriel :</label>
        <input type="email" id="courriel" name="user_email">
    </div>
    <div>
        <label for="phone">Téléphone :</label>
        <input type="text" id="phone" name="user_phone">
    </div>
    <div>
        <label for="subject">Sujet :</label>
        <select id="subject" name="user_subject">
            <option value="panne">Panne</option>
            <option value="informations">Informations</option>
            <option value="gestion">Gestion</option>
            <option value="autres">Autres</option>
        </select>
    </div>
    <div>
        <label for="message">Message :</label>
        <textarea id="message" name="user_message"></textarea>
    </div>
    <div class="button">
        <button type="submit">Envoyer votre message</button>
    </div>
</form>
