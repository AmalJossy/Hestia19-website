# Hestia Web app


#!Do not commit personal development configurations as it could override those of other

## Installation

1. clone files
2. setup virtual hosts in xampp, make hosts file point a domain( example hestialocal.live) to localhost
3. create folder development or production in application/config folder
4. create configurations
	- config.php : basic codeigniter config
	- database.php : database config
	- google_api.php : google auth api keys
	- super.php : super admin credentials
5. start apache and MySQL servers
6.  goto your_domain/migrate/index to migrate database
7.  place the google-api-client folder in thir_party folder
8.  insert google api credentials in google_api.php in config/<environement> folder

## API
### login

```
OkHttpClient client = new OkHttpClient();

MediaType mediaType = MediaType.parse("application/x-www-form-urlencoded");
RequestBody body = RequestBody.create(mediaType, "username=<username>&password=<password>");
Request request = new Request.Builder()
  .url("http://hestialocal.live/admin/login")
  .post(body)
  .addHeader("Content-Type", "application/x-www-form-urlencoded")
  .build();

Response response = client.newCall(request).execute();
```

### get category
```
OkHttpClient client = new OkHttpClient();

Request request = new Request.Builder()
  .url("http://hestialocal.live/admin/category[/<id>]")
  .get()
  .build();

Response response = client.newCall(request).execute();
```
### add category
```
OkHttpClient client = new OkHttpClient();

MediaType mediaType = MediaType.parse("application/x-www-form-urlencoded");
RequestBody body = RequestBody.create(mediaType, "cat_name=&username=&password=");
Request request = new Request.Builder()
  .url("http://hestialocal.live/admin/category")
  .post(body)
  .addHeader("Content-Type", "application/x-www-form-urlencoded")
  .build();

Response response = client.newCall(request).execute();
```
### edit category
```
OkHttpClient client = new OkHttpClient();

MediaType mediaType = MediaType.parse("application/x-www-form-urlencoded");
RequestBody body = RequestBody.create(mediaType, "cat_id=&cat_name=&username=&pswd=");
Request request = new Request.Builder()
  .url("http://hestialocal.live/admin/category")
  .put(body)
  .addHeader("Content-Type", "application/x-www-form-urlencoded")
  .build();

Response response = client.newCall(request).execute();
```
### delete category
```
OkHttpClient client = new OkHttpClient();

Request request = new Request.Builder()
  .url("http://hestialocal.live/admin/category/<id>")
  .delete(null)
  .build();

Response response = client.newCall(request).execute();
```
