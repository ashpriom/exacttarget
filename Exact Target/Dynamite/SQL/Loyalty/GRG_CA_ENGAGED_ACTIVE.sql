SELECT * 
FROM ent.GAR_CA_ENGAGED
WHERE (STATUS IN ('active', 'bounced') OR STATUS IS NULL)