CREATE VIEW overview AS
SELECT difuntos.id, difuntos.nombre_finado, difuntos.fecha_fallecimiento, localizacion.panteon, localizacion.domicilio
FROM difuntos
LEFT JOIN localizacion
ON difuntos.id = localizacion.id_difunto
ORDER BY difuntos.id;


CREATE VIEW detalles AS
SELECT difuntos.id, difuntos.fecha_archivo, difuntos.fecha_fallecimiento, difuntos.nombre_finado, difuntos.nombre_familiar, difuntos.observaciones, difuntos.peticiones,
pagos.fecha_pago, pagos.nrecibo, pagos.cantidad, pagos.referendo, 
permisos.perp, permisos.exh, permisos.pert, permisos.const, permisos.cond, 
localizacion.lt, localizacion.mz, localizacion.sec, localizacion.fila, localizacion.panteon, localizacion.domicilio
FROM difuntos
LEFT  JOIN pagos ON pagos.id_difunto = difuntos.id
LEFT  JOIN permisos ON permisos.id_difunto = difuntos.id
LEFT  JOIN localizacion ON localizacion.id_difunto = difuntos.id 
ORDER BY difuntos.id;
