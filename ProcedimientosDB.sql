DELIMITER $$
CREATE PROCEDURE sp_ConsultarCasas()
BEGIN
        
    SELECT DescripcionCasa, PrecioCasa, UsuarioAlquiler, FechaAlquiler
FROM CasasSistema Where PrecioCasa Between 115000 AND 180000 ORDER BY UsuarioAlquiler;
    
END$$
DELIMITER ;


DELIMITER $$
CREATE PROCEDURE sp_AlquilarCasas(
IN IdCasa_sp bigint,
IN UsuarioAlquiler_sp varchar(30)
)
BEGIN
        
UPDATE CasasSistema SET
UsuarioAlquiler = UsuarioAlquiler_sp,
FechaAlquiler = NOW()
WHERE IdCasa = IdCasa_sp;
    
END$$
DELIMITER ;




INSERT INTO CasasSistema (DescripcionCasa,PrecioCasa,UsuarioAlquiler,FechaAlquiler)
VALUES ('Casa en San José',190000,null,null);
INSERT INTO CasasSistema (DescripcionCasa,PrecioCasa,UsuarioAlquiler,FechaAlquiler)
VALUES ('Casa en Alajuela',145000,null,null);
INSERT INTO CasasSistema (DescripcionCasa,PrecioCasa,UsuarioAlquiler,FechaAlquiler)
VALUES ('Casa en Cartago',115000,null,null);
INSERT INTO CasasSistema (DescripcionCasa,PrecioCasa,UsuarioAlquiler,FechaAlquiler)
VALUES ('Casa en Heredia',122000,null,null);
INSERT INTO CasasSistema (DescripcionCasa,PrecioCasa,UsuarioAlquiler,FechaAlquiler)
VALUES ('Casa en Guanacaste',105000,null,null);
