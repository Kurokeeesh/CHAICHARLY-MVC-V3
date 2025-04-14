<link rel="stylesheet" href="public/css/admin.css">
<a href="index.php?page=Logout" class="btn-deconnexion">🚪 Se déconnecter</a>


<h1>Bienvenue sur la page admin 🎉</h1>

<div class="admin-header">
    <p class="admin-intro">Voici la liste de vos produits :</p>
    <a href="ajouterProduit" class="btn-ajouter">➕ Ajouter un produit</a>
</div>

</br>
</br>

<?php
$categories = [
    'RG' => '🍷 Rouges',
    'RO' => '🌸 Rosés',
    'BL' => '🧊 Blancs',
    'BIO' => '🌿 Bios',
    'MO' => '🥂 Mousseux',
    'BIB' => '📦 Bag in Box'
];

$currentCat = '';

foreach ($produits as $produit):
    if ($produit['codeCat'] !== $currentCat):
        $currentCat = $produit['codeCat'];
        // on ferme la div précédente s’il y en avait une
        if (isset($openGrid) && $openGrid) echo '</div>';

        echo "<div class='categorie-titre'><h2>{$categories[$currentCat]}</h2></div>";
        echo "<div class='grid-vin'>";
        $openGrid = true;
    endif;
?>

    <div class="card-vin">
    <?php
?>

        <form method="POST">
            <input type="hidden" name="id" value="<?= $produit['id'] ?>">

            <?php if (!empty($produit['imgUrl'])): ?>
            <img src="<?= $produit['imgUrl'] ?>" alt="Image du vin" style="width: 100%; max-height: 180px; object-fit: cover; border-radius: 8px; margin-bottom: 12px;">
            <?php endif; ?>


            <label>Nom :</label>
            <input type="text" name="nom" value="<?= htmlspecialchars($produit['nom']) ?>">

            <label>Description :</label>
            <textarea name="descLong"><?= htmlspecialchars($produit['descLong']) ?></textarea>

            <label>Tarif unitaire (€) :</label>
            <input type="text" name="tarifUnit" value="<?= $produit['tarifUnit'] ?>">

            <label>Tarif carton (€) :</label>
            <input type="text" name="tarifCarton" value="<?= $produit['tarifCart'] ?>">

            <label>Stock :</label>
            <select name="stock">
                <option value="1" <?= $produit['stock'] ? 'selected' : '' ?>>🟢 En stock</option>
                <option value="0" <?= !$produit['stock'] ? 'selected' : '' ?>>🟠 Sur demande</option>
            </select>

            <button type="submit" name="modifier">✏️ Modifier</button>
            <div class="btn-supprimer-container">
                <a class="btn-supprimer" href="index.php?page=Moderation&action=supprimer&id=<?= $produit['id'] ?>" onclick="return confirm('Supprimer ce produit ?')">
                    🗑️ Supprimer
                </a>
</div>
        </form>
    </div>

<?php endforeach; ?>

<?php if (isset($openGrid) && $openGrid) echo '</div>'; ?>

