<div class="summary" id="zen-summary" role="article">
    <p>Ancien <abbr title="Cascading Style Sheets">PAI Privé</abbr></p>
    <p>Bienvenu <a href="http://poc-auth.agrica.loc:8080/auth/realms/PaiParticulier/account/" title="Site Account"><?= getenv('OIDC_CLAIM_name') ?></a></p>
    <p><a href="/redirect_uri?logout=http://<?= getenv('SERVER_NAME') ?>:<?= getenv('SERVER_PORT') ?>/logout.php" title="Logout">Logout</a></p>
</div>