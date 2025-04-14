<link rel="stylesheet" href="public/css/ajouterProduit.css">

<div class="ajoutervin-container">
    <h1>➕ Ajouter un nouveau produit</h1>

    <a href="Moderation" class="btn-retour">⬅ Retour à l’espace admin</a>

    <form method="POST" enctype="multipart/form-data" action="">
            <label>Nom du vin :</label>
            <input type="text" name="nom" required>

            <label>Description :</label>
            <textarea name="descLong" required></textarea>

            <label>Tarif unitaire (€) :</label>
            <input type="text" name="tarifUnit" required>

            <label>Tarif en carton (€) :</label>
            <input type="text" name="tarifCart" required>

            <label>Catégorie :</label>
            <select name="codeCat" required>
                <option value="RG">Rouge</option>
                <option value="RO">Rosé</option>
                <option value="BL">Blanc</option>
                <option value="BIO">Bio</option>
                <option value="MO">Mousseux</option>
                <option value="BIB">Bag in Box</option>
            </select>

            <label>Image (fichier) :</label>
            <input type="file" name="imgFile" accept="image/*" required>

            <label for="stock">Stock :</label>
            <select name="stock" id="stock" required>
                <option value="1">En stock</option>
                <option value="0">Sur demande</option>
            </select>

        <button type="submit" name="ajouter">✅ Ajouter</button>
    </form>
</div>
