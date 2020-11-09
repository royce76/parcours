

function showContent() {
    //objet de base pour gérer les requêtes et les réponses.
    httpRequest = new XMLHttpRequest();
    //Code à exécuter
    httpRequest.onreadystatechange = function() {
    // instructions de traitement de la réponse
    // tout va bien, la réponse a été reçue
    if (httpRequest.readyState === XMLHttpRequest.DONE) {
        if (httpRequest.status === 200) {
            // parfait ! la réponse est exploitable
            let user = JSON.parse(httpRequest.responseText);
            //On affiche la réponse sur la page
            let p = document.getElementById("content");
            p.innerText = user.name;
        } else {
            // il y a eu un problème avec la requête,
            // par exemple la réponse peut être un code 404 (Non trouvée) 
            // ou 500 (Erreur interne au serveur)
            console.log("une erreur est survenue")
        }
    // pas encore prête
    } else {
        
        console.log("Réponse en attente");
    }
    };
    //Ouvertur et envoie de la requête
    httpRequest.open('GET', 'https://swapi.dev/api/people/1/', true);
    httpRequest.send();
}