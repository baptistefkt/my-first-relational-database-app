        <?php include 'partials/header.php' ?>
        <form id='login' action='logsign.php' method='post' accept-charset='UTF-8'>
            <fieldset >
                <legend>Login</legend>
                <input type='hidden' name='submitted' id='submitted' value='1'/>
                <label for='username'>Nom d'utilisateur:</label>
                <input type='text' name='username' id='username'  maxlength="50" />
                <label for='password'>Mot de passe:</label>
                <input type='password' name='password' id='password' maxlength="50" />
                <input type='submit' name='Submit' value='Submit' />
            </fieldset>
        </form>
    </body>
</html>
