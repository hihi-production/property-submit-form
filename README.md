<h1 align="center">Property Form Submit</h1>

## About Project

Property Form Submit is tools used to simplify rental listings.
This project use [Laravel](https://laravel.com/) for the backend system.

## Want To Contribute? Follow The Steps!
1. Fork this repository
2. Clone the repository for your fork
```sh
$ git clone https://github.com/{your-username}/property-submit-form.git
```
3. Add upstream to the clone results
```sh
$ git remote add upstream https://github.com/hihi-production/property-submit-form.git
```
4. Copy file `.env.example` to `.env`:
5. install all package
```sh
$ composer install
```
6. Setup database. Then fill in the configuration in `.env` according to the database settings. Example:
```sh
...
DB_DATABASE=db_property
DB_USERNAME=root
DB_PASSWORD=
...
```
7. Run this command:
```sh
$ php artisan key:generate
```
8. If you want to run this program, run this command:
```sh
$ php artisan serve
```
and write this `localhost:8000` on your favorite browser


### Here're The Steps That You Must Take In The Contribution Process
1. Always pull upstream everytime you want to start developing
```sh
$ git pull upstream master
```
2. Create a new branch on each developed feature. example:
```sh
$ git branch feature/add-login // example For Add New Feature
$ git branch bug/fix-menu // example For Fix Some Bug
```
3. After each time, push to the repo of your fork
```sh
$ git push origin {branch-name}
```
4. When ready to be taken to the main repository. Make a Pull Request from your branch to the `master` branch. Before the pull request makes sure the branch is clean. If there is a conflict, please fix the conflict. Make sure to make a good title and description so it's easy to understand!
5. Ganbate!!!