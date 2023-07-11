create or replace view v_validation_code as 
select code.id id_code, code.numero, code.status, code.montant, 
        user.*,
        details.monnaie, vc.id id_validation, vc.date, vc.valide
from validation_code vc 
join code on vc.id_code = code.id 
join utilisateur user on vc.id_user = user.id
join details on user.id = details.idUtilisateur;

