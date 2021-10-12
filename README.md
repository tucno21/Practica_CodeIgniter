# Practica con CodeIgniter 4.1.4 Framework

# migraciones

Crear migracion.
https://codeigniter.com/user_guide/dbmgmt/migration.html

```
php spark make:migration countries --table
php spark make:migration groups --table
php spark make:migration info_users --table
php spark make:migration users --table
```

Ejecutar las migraciones

```
php spark migrate
```

rollback (por cada php spark migrate -- realizado)
Revierte todas las migraciones, llevando el grupo de bases de datos a una pizarra en blanco, migración efectiva 0

```
php spark migrate:rollback
```

refresh
Actualiza el estado de la base de datos al deshacer primero todas las migraciones y luego migrar todas:

```
php spark migrate:refresh
```
