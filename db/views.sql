CREATE VIEW overview AS
SELECT difuntos.id, difuntos.nombre_finado, difuntos.fecha_fallecimiento, localizacion.panteon, localizacion.domicilio
FROM difuntos
LEFT JOIN localizacion
ON difuntos.id = localizacion.id_difunto
ORDER BY difuntos.id;
