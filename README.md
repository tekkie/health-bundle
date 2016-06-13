# Standalone Health Bundle

## Start the local web server

To start a local server on `http://127.0.0.1:8000`,
run the following command in the root of this bundle:
```bash
$ php Tests/app/console.php server:run -d Tests/app
```

Alternatively, you can start it and detach the console by running

```bash
$ php Tests/app/console.php server:start -d Tests/app
```

and stop it with
```bash
$ php Tests/app/console.php server:stop
```
