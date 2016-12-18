<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
<head>
    <title>Formulaire d'identification</title>
</head>
<body>
<?php if(!empty($message)) : ?>
    <p><?php echo $message; ?></p>
<?php endif; ?>
<form action="../server/post.php" method="post">
    <fieldset>
        <legend>Etudiant</legend>
        <table>
            <tr>
                <td>
                    <label for="login">nom :</label>
                </td>
                <td>
                    <input type="text" name="nom" id="nom" />
                </td>
            </tr>
            <tr>
                <td>
                    <label for="login">note TP :</label>
                </td>
                <td>
                    <input type="text" name="note1"  id="note1" />
                </td>
            </tr>
            <tr>
                <td>
                    <label for="login">Note Ds :</label>
                </td>
                <td>
                    <input type="text" name="note2" id="note2" />
                </td>
            </tr>
            <tr>
                <td>
                    <label for="login">Note Examen :</label>
                </td>
                <td>
                    <input type="text" name="note3" id="note3" />
                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>
                    <input type="submit" name="submit" value="Identification" />
                </td>
            </tr>
        </table>

    </fieldset>
</form>
</body>
</html>