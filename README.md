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
