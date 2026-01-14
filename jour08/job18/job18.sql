SELECT etage.nom, salles.nom AS "Biggest Room", MAX(salles.capacite) AS "capacite" FROM `etage` 
INNER JOIN salles ON etage.id = salles.id_etage;