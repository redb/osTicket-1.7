<?php
/*********************************************************************
    index.php

    Helpdesk landing page. Please customize it to fit your needs.

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2012 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/
require('client.inc.php');
$section = 'home';
require(CLIENTINC_DIR.'header.inc.php');
?>

<div id="landing_page">
    <h1>Bienvenue au Support Technique</h1>
    <p>
        Pour mieux vous servir et afin de pouvoir garder un historique de vos demandes, nous utilisons un système de support par tickets. Chaque demande de ticket reçois un numéro de ticket unique que vous pouvez utiliser pour consulter la progression et les réponses en ligne. Nous fournissons les archives et l'historique de toutes vos demandes au support. Une adresse courriel valide est nécessaire pour ouvrit un ticket .
    </p>

    <div id="new_ticket">
        <h3>Ouvrir un Nouveau Ticket</h3>
        <br>
        <div>Please provide as much detail as possible so we can best assist you. To update a previously submitted ticket, please login.</div>
        <p>
            <a href="open.php" class="green button">Open a New Ticket</a>
        </p>
    </div>

    <div id="check_status">
        <h3>Check Ticket Status</h3>
        <br>
        <div>We provide archives and history of all your current and past support requests complete with responses.</div>
        <p>
            <a href="view.php" class="blue button">Check Ticket Status</a>
        </p>
    </div>
</div>
<div class="clear"></div>
<?php
if($cfg && $cfg->isKnowledgebaseEnabled()){
    //FIXME: provide ability to feature or select random FAQs ??
?>
<p>Be sure to browse our <a href="kb/index.php">Frequently Asked Questions (FAQs)</a>, before opening a ticket.</p>
</div>
<?php
} ?>
<?php require(CLIENTINC_DIR.'footer.inc.php'); ?>
