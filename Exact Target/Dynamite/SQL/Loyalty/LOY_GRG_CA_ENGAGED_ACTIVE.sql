SELECT * 
FROM ent.DYN_CA_ENGAGED
WHERE (STATUS IN ('active', 'bounced') OR STATUS IS NULL)