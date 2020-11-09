<?php
require 'Personne.php';
require 'Client.php';
require 'Electeur.php';

$client = new Client("Royce", "george", "landeau");
echo "<p>{$client->getCoord()}</p>";

$electeur = new Electeur("royce", "george", "paris", false);
echo "<p>{$electeur->aVoter()}</p>";

echo "<p>{$electeur->aVoter()}</p>";
echo "<p>{$electeur->aVoter()}</p>";
