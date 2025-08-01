SELECT 
    etages.nom AS nom_etage, 
    salles.nom AS "Biggest Room", 
    salles.capacite
FROM salles
JOIN etage ON salles.id_etage = etages.id
WHERE salles.capacite = (
    SELECT MAX(capacite) FROM salles
);
