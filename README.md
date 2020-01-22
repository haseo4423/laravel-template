## Getting Started

### cloning this repository & changing directory

```
$ git clone {ThisRepository}
$ cd {ThisRepository}
```

### copying .env file

```
$ cp .env.bak.vessel .env
```

### building & starting container

```
$ ./vessel start
```

### installing composer packages

```
$ ./vessel comp install
```

### generating encryption key

```
$ ./vessel artisan key:generate
```

### migrating database

```
$ ./vessel artisan migrate --seed
```

### Enjoy!

## LaravelAdminLTE

[LaravelAdminLTE](https://github.com/jeroennoten/Laravel-AdminLTE)
